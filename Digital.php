<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Syllabus of Digital Electronics</title>

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
      <h1>The Syllabus of Digital Electronics</h1>
    </header>
	<main class="card">
  <h2>Unit I: Logic Gates and Circuit</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>Gates
      <ul>
        <li>OR</li>
        <li>AND</li>
        <li>NOR</li>
        <li>NAND</li>
        <li>XOR</li>
        <li>XNOR</li>
      </ul>
    </li>
    <li>Demorgan’s Laws</li>
    <li>Boolean Laws</li>
    <li>Circuit Designing Techniques
      <ul>
        <li>SOP (Sum of Product)</li>
        <li>POS (Product of Sum)</li>
        <li>K-Map</li>
      </ul>
    </li>
  </ul>
</main>

<main class="card">
  <h2>Unit II: Combinational Building Blocks</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>Multiplexers</li>
    <li>Decoder</li>
    <li>Encoder</li>
    <li>Adder</li>
    <li>Subtracter</li>
  </ul>
</main>

<main class="card">
  <h2>Unit III: Memories</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>ROMs</li>
    <li>PROMs</li>
    <li>EPROMs</li>
    <li>RAMs</li>
    <li>Hard Disk</li>
    <li>Floppy Disk</li>
    <li>CD-ROM</li>
  </ul>
</main>

<main class="card">
  <h2>Unit IV: Sequential Building Blocks</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>Flip-Flops
      <ul>
        <li>RS Flip-Flop</li>
        <li>D Flip-Flop</li>
        <li>JK Flip-Flop</li>
        <li>Master-Slave Flip-Flop</li>
        <li>T Flip-Flop</li>
      </ul>
    </li>
    <li>Registers</li>
    <li>Shift Registers</li>
    <li>Counters</li>
    <li>Synchronous Designing Method</li>
    <li>Asynchronous Designing Method</li>
  </ul>
</main>

<main class="card">
  <h2>Unit V: Memory Organization</h2>
  <p>This is the topic list for this unit 👇</p>
  <ul class="topic-list">
    <li>Basic cell of Static RAM</li>
    <li>Basic cell of Dynamic RAM</li>
    <li>Building large memories using chips</li>
    <li>Associative Memory</li>
    <li>Cache Memory Organisation</li>
    <li>Virtual Memory Organisation</li>
  </ul>
</main>

	
	<footer>
      <p>© 2025 The Syllabus Website | All Rights Reserved</p>
    </footer>
  </div>
</body>
</html>