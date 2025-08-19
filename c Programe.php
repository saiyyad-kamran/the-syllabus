<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Syllabus of Programming in "c"</title>

  <style>
    :root{
      --brand: #6a0dad;     /* purple */
      --accent: #178a2c;    /* green */
      --bg: #f7f7fb;
      --text: #1f2937;
      --muted: #4b5563;
      --card: #ffffff;
      --radius: 12px;
    }

    /* Reset-ish */
    *, *::before, *::after { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, "Noto Sans", "Helvetica Neue", sans-serif;
      color: var(--text);
      background: var(--bg);
      line-height: 1.6;
    }

    .container{
      max-width: 960px;
      margin: 0 auto;
      padding: 20px;
    }

    header h1{
      margin: 20px auto 14px;
      padding: 22px 20px;
      background: var(--brand);
      color: #fff;
      text-align: center;
      font-size: clamp(28px, 5vw, 44px);
      border-radius: var(--radius);
      letter-spacing: .3px;
    }

    .card{
      background: var(--card);
      border-radius: var(--radius);
      padding: 22px;
      box-shadow: 0 6px 18px rgba(0,0,0,.06);
      border: 1px solid rgba(0,0,0,.06);
    }

    h2{
      margin: 8px 0 10px;
      font-size: clamp(20px, 3.5vw, 28px);
      color: var(--brand);
    }

    p {
      margin: 0 0 8px;
      color: var(--muted);
    }

    ul.topic-list{
      margin: 10px 0 0 0;
      padding: 0 0 0 24px;
    }
    ul.topic-list li{
      margin: 8px 0;
    }

    footer{
      margin: 26px 20px;
      padding: 20px 16px;
      font-size: 14px;
      color: #fff;
      text-align: center;
      background: var(--accent);
      border-radius: 10px;
    }

    /* Small screens */
    @media (max-width: 520px){
      .container{ padding: 14px; }
      .card{ padding: 16px; }
    }
  </style>
</head>
<body>
  <div class="container">
    <header>
      <h1>The Syllabus of Programming in "c"</h1>
    </header>
<main class="card">
  <h2>Unit I: Introduction to C Language</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>History of C Language</li>
    <li>Structure of C Programming</li>
    <li>Function as building blocks</li>
    <li>Language Fundamentals
      <ul>
        <li>Character set</li>
        <li>C Tokens</li>
        <li>Keywords</li>
        <li>Identifiers</li>
        <li>Variables</li>
        <li>Constants</li>
        <li>Data Types</li>
        <li>Comments</li>
      </ul>
    </li>
  </ul>
</main>

<main class="card">
  <h2>Unit II: Operators and I/O Functions</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>Types of operators</li>
    <li>Precedence and Associativity</li>
    <li>Expression, Statement and types of statements</li>
    <li>Built-in Operators and Functions</li>
    <li>Console based I/O and related functions
      <ul>
        <li>printf()</li>
        <li>scanf()</li>
        <li>getch()</li>
        <li>getchar()</li>
        <li>putchar()</li>
      </ul>
    </li>
    <li>Concept of Header Files</li>
    <li>Preprocessor Directives
      <ul>
        <li>#include</li>
        <li>#define</li>
      </ul>
    </li>
  </ul>
</main>

<main class="card">
  <h2>Unit III: Control Structures</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>Decision Making Structures
      <ul>
        <li>If</li>
        <li>If-else</li>
        <li>Nested If-else</li>
        <li>Switch</li>
      </ul>
    </li>
    <li>Loop Control Structures
      <ul>
        <li>While</li>
        <li>Do-while</li>
        <li>For</li>
        <li>Nested For Loop</li>
      </ul>
    </li>
    <li>Other Statements
      <ul>
        <li>break</li>
        <li>continue</li>
        <li>goto</li>
        <li>exit</li>
      </ul>
    </li>
  </ul>
</main>

<main class="card">
  <h2>Unit IV: Simple Arithmetic Problems</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>Addition / Multiplication of integers</li>
    <li>Determining if a number is positive / negative / even / odd</li>
    <li>Maximum of 2 numbers / 3 numbers</li>
    <li>Sum of first n numbers</li>
    <li>Sum of given n numbers</li>
    <li>Integer division</li>
    <li>Digit reversing</li>
    <li>Table generation for n, a<sup>b</sup></li>
    <li>Factorial</li>
    <li>Sine series</li>
    <li>Cosine series</li>
    <li>nCr</li>
    <li>Pascal Triangle</li>
    <li>Prime number</li>
    <li>Factors of a number</li>
    <li>Perfect number</li>
    <li>GCD of numbers</li>
    <li>Swapping</li>
    <li>Write Algorithms and Draw Flowcharts</li>
  </ul>
</main>

<main class="card">
  <h2>Unit V: Functions</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>Basic types of function</li>
    <li>Declaration and Definition</li>
    <li>Function Call</li>
    <li>Types of Function</li>
    <li>Parameter Passing
      <ul>
        <li>Call by Value</li>
        <li>Call by Reference</li>
      </ul>
    </li>
    <li>Scope of Variable</li>
    <li>Storage Classes</li>
    <li>Recursion</li>
  </ul>
</main>

	<footer>
      <p>© 2025 The Syllabus Website | All Rights Reserved</p>
    </footer>
  </div>
</body>
</html>