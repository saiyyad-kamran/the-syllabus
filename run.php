<html>
<head>
  <title>Form Example</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f3f4f6;
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      align-items: center;
      min-height: 100vh;
      padding: 20px;
    }
    form {
      background: #fff;
      padding: 20px 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      width: 350px;
      margin-bottom: 30px;
    }
    h1 {
      text-align: center;
      font-size: 22px;
      margin-bottom: 20px;
      color: #333;
    }
    label {
      font-weight: bold;
      display: block;
      margin-bottom: 6px;
    }
    input[type="text"], 
    input[type="password"], 
    select {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 6px;
      outline: none;
    }
    input[type="checkbox"], 
    input[type="radio"] {
      margin-right: 8px;
    }
    .btn {
      width: 100%;
      padding: 10px;
      background-color: #4f46e5;
      border: none;
      border-radius: 6px;
      color: white;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }
    .btn:hover {
      background-color: #4338ca;
    }
    .error {color: red; font-size: 13px;}

    table {
      border-collapse: collapse;
      width: 90%;
      margin-top: 20px;
      background: #fff;
    }
    th, td {
      border: 1px solid black;
      padding: 8px 12px;
      text-align: center;
    }
    th {
      background: #4f46e5;
      color: white;
    }
  </style>
</head>
<body>
<?php
$connection = mysqli_connect('localhost','root','','kamran');
$name = $fatherName = $year = $gender = $email = $password = $course = "";
$nameErr = $fatherNameErr = $yearErr = $genderErr = $emailErr = $passwordErr = $courseErr = "";
$dataSaved = false;

if ($_SERVER["REQUEST_METHOD"] == "POST"){

  // name validation 
  if (empty($_POST['name'])){
    $nameErr = "Name is required";
  } elseif (!preg_match('/^[a-zA-Z ]*$/', $_POST['name'])){
    $nameErr = "Only alphabets allowed";
  } else {
    $name = $_POST['name'];
  }

  // father name validation 
  if (empty($_POST['fatherName'])){
    $fatherNameErr = "Father's Name is required";
  } elseif (!preg_match('/^[a-zA-Z ]*$/', $_POST['fatherName'])){
    $fatherNameErr = "Only alphabets allowed";
  } else {
    $fatherName = $_POST['fatherName'];
  }

  // year validation
  if (!empty($_POST['year'])){
    $yearArray = $_POST['year'];
    if (count($yearArray) > 1){
      $yearErr = "Choose only one year";
    } else {
      $year = implode(",", $yearArray);
    }
  } else {
    $yearErr = "Year is required";
  }

  // gender validation
  if (empty($_POST['gender'])){
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST['gender'];
  }

  // email validation
  if (empty($_POST['email'])){
    $emailErr = "Email is required";
  } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format!";
  } else {
    $email = $_POST['email'];
  }

  // password validation
  if (empty($_POST['password'])){
    $passwordErr = "Password is required";
  } elseif (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{5,}$/", $_POST["password"])) {
    $passwordErr = "Password must be at least 5 characters long and contain both letters and numbers";
  } else {
    $password = $_POST['password'];
  }

  // course validation
  if (empty($_POST['course'])){
    $courseErr = "Course is required";
  } elseif(!in_array($_POST['course'],["BTech","BCA","BBA","BPharma","BA"])){
    $courseErr = "Invalid course selected";
  } else {
    $course = $_POST['course'];
  }

  // agar sab sahi h 
  // agar sab sahi h 
if(empty($nameErr) && empty($fatherNameErr) && empty($yearErr) && empty($genderErr) && empty($emailErr) && empty($passwordErr) && empty($courseErr)){
    $dataSaved = true;

    $sql = "INSERT INTO form_login_data(name,fatherName,year,gender,email,password,course)
    VALUES ('$name','$fatherName','$year','$gender','$email','$password','$course')";

    if (mysqli_query($connection, $sql)){
        echo "Data saved successfully!";
    } else {
        echo "Error saving data: " . mysqli_error($connection);
    }
}
}
?>

  <form method="POST">
    <h1>Please Fill The Data</h1>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
    <span class="error"><?php echo $nameErr; ?></span>

    <label for="fatherName">Father's Name:</label>
    <input type="text" id="fatherName" name="fatherName" placeholder="Enter father's name" value="<?php echo $fatherName; ?>">
    <span class="error"><?php echo $fatherNameErr; ?></span>

    <label>Year:</label>
    <input type="checkbox" id="1st" name="year[]" value="1st" <?php if($year=="1st") echo "checked"; ?>> 1st Year
    <input type="checkbox" id="2nd" name="year[]" value="2nd" <?php if($year=="2nd") echo "checked"; ?>> 2nd Year
    <input type="checkbox" id="3rd" name="year[]" value="3rd" <?php if($year=="3rd") echo "checked"; ?>> 3rd Year
    <input type="checkbox" id="4th" name="year[]" value="4th" <?php if($year=="4th") echo "checked"; ?>> 4th Year
    <br>
    <span class="error"><?php echo $yearErr; ?></span>

    <br>
    <label>Gender:</label>
    <input type="radio" id="male" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
    <input type="radio" id="female" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female
    <br>
    <span class="error"><?php echo $genderErr; ?></span>

    <br>
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>

    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" value="<?php echo $password; ?>">
    <span class="error"><?php echo $passwordErr; ?></span>

    <br>
    <label for="course">Course:</label>
    <select id="course" name="course">
      <option value="">Choose course (👇)</option>
      <option value="BTech" <?php if($course=="BTech") echo "selected"; ?>>BTech</option>
      <option value="BCA" <?php if($course=="BCA") echo "selected"; ?>>BCA</option>
      <option value="BBA" <?php if($course=="BBA") echo "selected"; ?>>BBA</option>
      <option value="BPharma" <?php if($course=="BPharma") echo "selected"; ?>>BPharma</option>
      <option value="BA" <?php if($course=="BA") echo "selected"; ?>>BA</option>
    </select>
    <span class="error"><?php echo $courseErr; ?></span>

    <br><br>
    <input type="submit" value="Submit" class="btn"><br><br>
	<a href = "war.php">
    <input type="button" value="Signin" class="btn">
</a> 
 </form>
<h2> your data </h2>
<?php if($dataSaved): ?>
  <!-- Table me data show -->
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
      <td><?php echo $name; ?></td>
      <td><?php echo $fatherName; ?></td>
      <td><?php echo $year; ?></td>
      <td><?php echo $gender; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $course; ?></td>
    </tr>
  </table>
<?php endif; ?>

</body>
</html>
