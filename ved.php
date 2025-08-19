<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Vedio</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #f6fff6;
      display: flex;
      flex-direction: column;
      min-height: 100vh; /* full height */
    }
    h1 {
      width: 95%;
      margin: 20px auto 10px;
      background-color: green;	  
      text-align: center;
      font-size: 42px;
      padding: 24px 20px;
      color: white;
      border-radius: 10px;
    }
    p {
      text-align: center;
      font-size: 28px;
      line-height: 1.5;
    }

    /* Remove underline */
    a {
      text-decoration: none;
    }

    /* ✅ Subject Buttons */
    .subject-btn {
      display: block;
      width: 250px;
      margin: 15px 30px; /* left side shift */
      padding: 12px;
      text-align: left;
      font-size: 18px;
      font-weight: bold;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: 0.3s;
    }

    /* Individual colors */
    .math { background-color: red; }
    .math:hover { background-color: darkred; }

    .cf { background-color: orange; }
    .cf:hover { background-color: darkorange; }

    .cprog { background-color: teal; }
    .cprog:hover { background-color: darkslategray; }

    .de { background-color: blue; }
    .de:hover { background-color: darkblue; }

    .bc { background-color: purple; }
    .bc:hover { background-color: indigo; }

    /* ✅ Footer always bottom */
    footer {
	boder : 1px solid black;
	background-color: green;
	text-align: center;
	width: 100%;
	height : 10%;
	font-size: 10px;
	padding-below: 10px;
	boder-radius: 10px;
	}

  </style>
</head>
<body>

  <h1>WELCOME TO Vedio System 🚀</h1>
  <p>
    See the Vedio after choose the subject <br>
    Example: click on the subject 👇 
  </p>

  <!-- Buttons aligned left -->
  <a href="boost.php" target="_blank">
    <button class="subject-btn math">Mathematical Foundation</button>
  </a>

  <a href="const.php" target="_blank">
    <button class="subject-btn cf">Computer Fundamental</button>
  </a>

  <a href="const.php" target="_blank">
    <button class="subject-btn cprog">Programming in C</button>
  </a>

  <a href="const.php" target="_blank">
    <button class="subject-btn de">Digital Electronics</button>
  </a>

  <a href="const.php" target="_blank">
    <button class="subject-btn bc">Business Communication</button>
  </a>

  <footer>
    <p>© 2025 The Syllabus Website | All Rights Reserved</p>
  </footer>
</body>
</html>
