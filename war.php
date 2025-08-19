<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<style>
body {
  font-family: Arial, sans-serif;
  background: linear-gradient(135deg, #74ebd5 0%, #9face6 100%);
  margin: 0;
  padding: 0;
  display: flex;
  flex-direction: column;
  height: 100vh;
  justify-content: center;
  align-items: center;
}

form {
  background: #fff;
  padding: 30px;
  width: 350px;
  border-radius: 15px;
  box-shadow: 0px 8px 20px rgba(0,0,0,0.2);
  text-align: center;
  transition: 0.3s ease;
}

form:hover { transform: scale(1.03); }

h2 { margin-bottom: 20px; color: #333; }

label {
  display: block;
  text-align: left;
  font-weight: bold;
  margin-bottom: 5px;
  color: #444;
}

input[type="text"], input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
  font-size: 16px;
  transition: 0.3s;
}

input[type="text"]:focus, input[type="password"]:focus {
  border-color: #6a11cb;
  outline: none;
  box-shadow: 0 0 5px rgba(106,17,203,0.4);
}

.error { color: red; font-size: 14px; margin-bottom: 10px; display: block; }

input[type="submit"] {
  background: linear-gradient(135deg, #6a11cb, #2575fc);
  color: white;
  border: none;
  padding: 12px 20px;
  border-radius: 8px;
  cursor: pointer;
  font-size: 16px;
  width: 100%;
  transition: 0.3s;
}

input[type="submit"]:hover {
  background: linear-gradient(135deg, #2575fc, #6a11cb);
}

table {
  margin-top: 20px;
  border-collapse: collapse;
  width: 80%;
  background: #fff;
}
th, td {
  border: 1px solid black;
  padding: 10px;
  text-align: center;
}
th {
  background: #6a11cb;
  color: white;
}
</style>
</head>
<body>
<?php
$connection = mysqli_connect('localhost','root','','kamran');
$email = $password = "";
$emailErr = $passwordErr = "";
$loginMsg = "";
$userData = null; // yaha user ka data save karenge

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // email validate
  if (empty($_POST['email'])) {
    $emailErr = "Email is required";
  } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format!";
  } else {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
  }

  // password validate
  if (empty($_POST['password'])) {
    $passwordErr = "Password is required";
  } elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/", $_POST["password"])) {
    $passwordErr = "Password must be at least 5 characters long and contain both letters and numbers";
  } else {
    $password = mysqli_real_escape_string($connection, $_POST['password']);
  }

  // agar dono valid hain tabhi database check karo
  if(empty($emailErr) && empty($passwordErr)) {
    $sql = "SELECT * FROM form_login_data WHERE email='$email' AND password='$password'";
    $result = mysqli_query($connection, $sql);

    if (mysqli_num_rows($result) > 0) {
      $loginMsg = "<p style='color:green; font-weight:bold;'>Login Successful! ✅</p>";
      $userData = mysqli_fetch_assoc($result); // user ka data fetch karo
    } else {
      $loginMsg = "<p style='color:red; font-weight:bold;'>Invalid Email or Password ❌</p>";
    }
  }
}
?>
<form method="POST" action="">
  <h2>Login</h2>
  
  <label>Email:</label>
  <input type="text" name="email" value="<?php echo htmlspecialchars($email);?>" placeholder="Enter your email">
  <span class="error"><?php echo $emailErr ?></span>
  
  <label>Password:</label>
  <input type="password" name="password" value="<?php echo htmlspecialchars($password);?>" placeholder="Enter your password">
  <span class="error"><?php echo $passwordErr ?></span>
  
  <input type="submit" value="Sign In">
</form>

<?php echo $loginMsg; ?>

<?php if($userData): ?>
  <h2>Your Data</h2>
  <table>
    <tr>
      <th>Name</th>
      <th>Father Name</th>
      <th>Year</th>
      <th>Gender</th>
      <th>Email</th>
      <th>Course</th>
    </tr>
    <tr>
      <td><?php echo $userData['name']; ?></td>
      <td><?php echo $userData['fatherName']; ?></td>
      <td><?php echo $userData['year']; ?></td>
      <td><?php echo $userData['gender']; ?></td>
      <td><?php echo $userData['email']; ?></td>
      <td><?php echo $userData['course']; ?></td>
    </tr>
  </table>
<?php endif; ?>
</body>
</html>
