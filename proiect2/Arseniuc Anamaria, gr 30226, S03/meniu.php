<!DOCTYPE html>
<html lang="en">
<head>
<title>Meniu cerinte</title>
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
  background-color: #900C3F;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 10%;
  height: 350px ; 
  background: #D85351;
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
  width: 90%;
  text-align:left;
  background-color: #FAECEB;
  height: 350px;
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
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
  <center><img src="utcn1.jpg" alt="Universitatea Tehnica"  width="150" height="80">
  
  <header>
  <h2>Cerinte</h2>
</header>

<section>
  <nav>
    <ul><h2>
      <li><a href="3a.php">3.A</a></li>
      <li><a href="3b.php">3.B</a></li>
      <li><a href="4a.php">4.A</a></li>
	  <li><a href="4b.php">4.B</a></li>
	  <li><a href="5a.php">5.A</a></li>
	  <li><a href="5b.php">5.B</a></li>
	  <li><a href="6a.php">6.A</a></li>
	  <li><a href="6b.php">6.B</a></li>
    </h2></ul>
  </nav>
  
  <article>
  <p><b>3. Să se exprime în SQL următoarele interogări:</b><br>
a) Să se găsească detaliile pentru devizele care au constatare și sunt nefinalizate la data ‚01-SEP-2019’, ordonat după data introducere.<br>
b) Să se găsească detaliile pieselor care au cantitate_stoc sub 5 ordonat crescător după cantitate_stoc și crescător după descriere.</p>
  <p><b>4. Să se exprime în SQL următoarele interogări folosind operatorul JOIN:</b><br>
a) Să se găsească (id_d, descriere, fabricant, pret_c și pret_r) pentru piesele cu prețul de catalog mai mare decât prețul real.<br>
b) Să se găsească perechi de piese (id_p1, id_p2) care apar pe același deviz în aceeași cantitate. O pereche este unică în rezultat.</p>
  <p><b>5. Să se exprime în SQL fără funcții de agregare următoarele interogări
folosind cel puţin o interogare imbricată şi operatori de genul EXISTS, IN, ALL,
ANY:</b><br>
a) Să se găsească detaliile devizelor care au folosit piesa cu descrierea ‚șurub’.<br>
b) Să se găsească descrierea și fabricantul pentru piesa cu prețul real cel mai
mare.</p>
  <p><b>6. Să se exprime în SQL următoarele interogări folosind funcţii de agregare:</b><br>
a) Să se găsească pentru fiecare depanator numărul de devize (nume_depanator,
câte_devize) cu data_finalizare în luna septembrie 2019.<br>
b) Să se găsească pentru fiecare piesă folosită la devize cu data_finalizare în
luna septembrie 2019 cantitatea totală (descriere, fabricant, cantitate_totală).</p>
  </article>
</section>

  
  </body>
</html>