<?php
// Agar future me session ya login check karna ho to yaha PHP code likh sakte ho
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The First Sem Page</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }
    body {
      background-color: #fff8e7;
      line-height: 1.6;
    }

    /* 🔹 Top Bar */
    .top-bar {
      width: 100%;
      background-color: orange;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
    }
    .top-bar img {
      height: 50px;  
      width: 100px; 
      border-radius: 40%;
    }
    .logo-text {
      font-size: 22px;
      font-weight: bold;
      color: darkblue;
      margin-left: 15px;
    }
    .top-bar .right {
      display: flex;
      align-items: center;
      gap: 20px;
    }
    .top-bar span {
      font-size: 16px;
      color: black;
    }
    .top-bar input {
      padding: 6px 14px;
      font-size: 14px;
      cursor: pointer;
      background: darkblue;
      color: white;
      border: none;
      border-radius: 5px;
    }
    .top-bar input:hover {
      background: black;
    }

    /* 🔹 Header */
    .header {
      width: 100%;
      background-color: orange; 
      text-align: center;
      font-size: 50px;
      padding: 25px 10px;
      color: black;
    }
    .header marquee {
      font-size: 20px;
      font-weight: bold;
      margin-top: 10px;
      color: white;
    }

    /* 🔹 Navbar */
    ul {
      list-style: none;   
      margin: 0;
      padding: 0;
      background-color: red; 
      text-align: center;
      position: sticky;
      top: 0;
      z-index: 1000;
    }
    ul li {
      display: inline-block; 
    }
    ul li a, ul li select {
      display: inline-block;
      color: yellow;
      text-decoration: none;
      padding: 12px 18px;
      font-size: 16px;
      background-color: red;
      border: none;
      cursor: pointer;
    }
    ul li a:hover {
      background-color: black;
      color: yellow;
    }
    ul li select option {
      background-color: white;
      color: black;
    }

    /* 🔹 Content Sections */
    .section {
      max-width: 1100px;
      margin: auto;
      padding: 30px 20px;
    }
    .section h1 {
      text-align: center;
      font-size: 40px;
      margin-bottom: 20px;
      color: darkblue;
    }
    .section h2 {
      text-align: center;
      margin: 15px 0;
      font-size: 28px;
      color: #333;
    }
    .section p, .section i {
      font-size: 18px;
      text-align: justify;
    }
    .section img {
      max-width: 100%;
      border-radius: 10px;
      border: 2px solid black;
      box-shadow: 0 4px 10px rgba(0,0,0,0.3);
      margin: 20px 0;
    }
    .image-left {
      display: flex;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }
    .image-left img {
      flex: 1;
      max-width: 45%;
    }
    .image-left p {
      flex: 1;
      font-size: 20px;
    }

    /* 🔹 Footer */
    footer {
      background-color: #333;
      color: white;
      padding: 20px 10px;
      margin-top: 30px;
    }
    footer .footer-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      max-width: 1000px;
      margin: auto;
    }
    footer .footer-section {
      margin: 10px;
      flex: 1;
      min-width: 200px;
    }
    footer .footer-section h3 {
      margin-bottom: 10px;
      font-size: 20px;
      color: #ffcc00;
    }
    footer .footer-section p,
    footer .footer-section a {
      font-size: 16px;
      color: #ddd;
      text-decoration: none;
    }
    footer .footer-section a:hover {
      color: #ffcc00;
    }
    footer .bottom {
      margin-top: 20px;
      border-top: 1px solid #555;
      padding-top: 10px;
      font-size: 14px;
      color: #aaa;
      text-align: center;
    }


  </style>
</head>
<body>
  <!-- 🔹 Top Bar -->
  <div class="top-bar">
    <div style="display: flex; align-items: center;">
      <img src="sys.jpg" alt="Logo">
      <span class="logo-text">Study Time 😜</span>
    </div>
    <div class="right">
      <span>📞 Contact: 8439397630</span>
      <a href="run.php"><input type="button" value="Sign in"></a>
    </div>
  </div>

  <!-- 🔹 Header -->
  <div class="header">
    The Syllabus
    <marquee direction="left">The Syllabus of BCA is According to Maa Shakumbhari University</marquee>
  </div>

  <!-- 🔹 Navigation -->
  <ul>
    <li><a href="#home">Home</a></li>
    <li><a href="syllabus.php">Subjects in BCA</a></li>
    <li>
      <select onchange="location = this.value;">
        <option value="#">Choose Subject and see the syllabus</option>
        <option value="maths.php">Mathematical Foundation</option>
        <option value="computer fun.php">Computer Fundamental</option>
        <option value="c Programe.php">Programming in C</option>
        <option value="Digital.php">Digital Electronics</option>
        <option value="Buss com.php">Business Communication</option>
      </select>
    </li>
    <li><a href="const.php">Notes System</a></li>
    <li><a href="ved.php">Vedio System</a></li>
    <li><a href="inquery.php">Inquiry System</a></li>
  </ul>

  <!-- 🔹 Content Section -->
  <div class="section" id="home">
    <img src="com.jpg" alt="Computer">
    <p style="font-size: 20px; text-align:center;">
      A computer is an electronic device that accepts data as input, processes it using a set of instructions called programs, 
      and produces meaningful results as output. It can perform calculations at very high speed, store huge amounts of information, 
      and perform logical operations accurately. Computers are widely used in education, business, science, communication, 
      and daily life because of their efficiency, reliability, and versatility.
    </p>
  </div>

  <div class="section">
    <h2>👉 Please read the paragraph below for more information about computers.</h2>
    <p>The history of computers goes back thousands of years. The earliest known calculating tool was the abacus...</p>
    <p>In the 20th century, electronic computers were developed. The first generation used vacuum tubes...</p>
  </div>

  <div class="section">
    <h1>Information about BCA</h1>
    <div class="image-left">
      <img src="lap.jpg" alt="Laptop">
      <div>
        <p>Bachelor of Computer Applications (BCA) is an undergraduate degree program...</p>
        <i>The program is designed for students who wish to build a career in the IT industry...</i>
      </div>
    </div>
  </div>

  <div class="section">
    <h1>Information about Coding</h1>
    <img src="code.jpg" alt="Coding">
    <p style="font-size: 20px; text-align:center;">
      Coding is the process of writing instructions that a computer can understand and execute...
    </p>
    <h2>👉 More About Coding</h2>
    <i>Coding is used to create websites, apps, games, software, and even control hardware like robots...</i>
  </div>

  <!-- 🔹 Footer -->
  <footer>
    <div class="footer-container">
      <div class="footer-section">
        <h3>About</h3>
        <p>This website is for BCA students to check syllabus, notes, and resources.</p>
      </div>
      <div class="footer-section">
        <h3>Career</h3>
        <p>Explore career options in IT, Software Development, and Data Science.</p>
      </div>
      <div class="footer-section">
        <h3>Contact</h3>
        <p>Email: skamran5821@gmail.com</p>
        <p>Phone: +91 8439397630</p>
      </div>
      <div class="footer-section">
        <h3>Follow Us</h3>
        <a href="https://www.Facebook.com">Facebook</a><br>
        <a href="https://www.Instagram.com">Instagram</a><br>
        <a href="https://www.LinkedIn.com">LinkedIn</a>
      </div>
      <div class="footer-section">
        <h3>Resources</h3>
        <a href="https://www.ChatGPT.com">ChatGPT</a><br>
        <a href="https://www.Google.com">Google</a><br>
        <a href="https://www.youtube.com">YouTube</a>
      </div>
    </div>
    <div class="bottom">
      <p>© 2025 The Syllabus Website | All Rights Reserved</p>
	      <p>Made by Saiyyad Kamran </p>
    </div>
  </footer>

</body>
</html>
