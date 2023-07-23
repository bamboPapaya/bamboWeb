<!DOCTYPE html>
<html lang="en">
<head>
<title>Bambo Papaya</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 300px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 70%;
  background-color: #f1f1f1;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #777;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>

<h2>Welcome to our City Breifing Page</h2>
<p>Our simple example will help us work on the cities in the southern african area of africa where we have 3 cities that we have proposed to work with</p>
<p>These are the cities that we have opted to work with:</p>

<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="harare.php">Harare</a></li>
      <li><a href="lusaka.php">Lusaka</a></li>
      <li><a href="gaborone.php">Gaborone</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>Harare</h1>
    <h1>Lusaka</h1><h1>Gaborone</h1>
  
  </article>
</section>

<footer>
  <p>Footer</p>
</footer>

</body>
</html>

