<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Syllabus of Maths</title>

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
      <h1>The Syllabus of Mathematical Foundation</h1>
    </header>

    <main class="card">
      <h2>Unit 1: Matrix Theory</h2>
      <p>This is the topic list for this unit 👇</p>
      <ul class="topic-list">
        <li>Matrix Theory Review of fundamentals</li>
        <li>Equivalent matrices</li>
        <li>Elementary row (column) operations</li>
        <li>Rank of a matrix by reducing it to the normal form</li>
        <li>Rank of a matrix by reducing it to echelon form</li>
      </ul>
    </main>
	<main class="card">
      <h2>Unit 2:Mathematical Logic </h2>
      <p>This is the topic list for this unit 👇</p>
      <ul class="topic-list">
        <li>Connectives</li>
        <li>Negation</li>
        <li>Conjunction</li>
        <li>Disjunction</li>
        <li>conditional</li>
		<li>biconditional</li>
		<li>statement formulas</li>
		<li>Tautology and contradiction</li>
		<li>Equivalence formulae</li>
		<li>Normal forms: Principle conjunctive and disjunctive normal forms</li>
		<li>Theory of inferences for statement calculus validating using truth tables.</li>
      </ul>
    </main>
<main class="card">
      <h2>Unit 3: Graph Theory:</h2>
      <p>This is the topic list for this unit 👇</p>
      <ul class="topic-list">
        <li> Definition of a Graph</li>
        <li> Finite and infinite Graphs</li>
        <li>Incidence and Degree of a vertex </li>
        <li>Null Graph</li>
        <li>Sub graphs</li>
		<li>Walks, Paths</li>
		<li> Circuits</li>
		<li>Connected</li>
		<li>Disconnected graphs and Components</li>
		<li>Euler Graph</li>
		<li> Hamiltonian Path and Hamiltonian Circuits</li>
      </ul>
    </main>
<main class="card">
      <h2>Unit 4: Trees and Matrix Representation:</h2>
      <p>This is the topic list for this unit 👇</p>
      <ul class="topic-list">
        <li>Properties of Trees</li>
        <li> Distance and Centres in a Tree</li>
        <li>Rooted and Binary Trees</li>
        <li>Spanning Trees and Fundamental Circuits</li>
        <li> Cutset, properties of a Cutset.</li>
		<li> <b><i>Matrix Representation of graphs:</i></b> Incidence matrix</li>
		<li>Circuit matrix</li>
		<li>Fundamental Circuit matrix</li>
		<li>Cutset matrix</li>
		<li>Path matrix</li>
		<li> Adjacency matrix Planar and Dual Graphs Planar Graphs</li>
		<li>Kurtowski’s two Graphs</li>
		<li>Different Representations of a Planar Graph</li>
		<li>Detection of Planarity</li>
      </ul>
    </main>
<main class="card">
      <h2>Unit 5: Directed Graphs:</h2>
      <p>This is the topic list for this unit 👇</p>
      <ul class="topic-list">
        <li>Definition</li>
        <li> Some types of Digraphs</li>
        <li>Digraphs and Binary relations</li>
        <li>Directed paths and Connectedness</li>
        <li>Euler Digraphs</li>
		<li>Trees with directed edges</li>
		<li>Fundamental Circuits in Digraphs</li>
		<li>Adjacency Matrix of a Digraph.</li>
      </ul>
    </main>
    <footer>
      <p>© 2025 The Syllabus Website | All Rights Reserved</p>
    </footer>
  </div>
</body>
</html>
