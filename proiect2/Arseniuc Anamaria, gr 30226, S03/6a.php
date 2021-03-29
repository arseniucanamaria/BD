<?php
require 'conectare_bd.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>6a</title>
<style>
body {
  background-image: url('2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
</head>
<body>
<form action="paginaPrinc.php" >
 <input type="submit" name="inapoi" value="Revino la PAGINA PRINCIPALA">
 </form>
  <center><img src="utcn1.jpg" alt="Universitatea Tehnica" width="150" height="80">
  
  <h2><font face="Kristen ITC">6.a)Sa se gaseasca pentru fiecare depanator numarul de devize (nume_depanator,
câte_devize) cu data_finalizare în luna septembrie 2019.</font>
</h2>
  
  <table border=2>
  <tr><td><center><font size = 4>nume_depanator</font></td>
  <td><center><font size = 4>Nr_devize</font></td>
  </tr>
  
  
  
  <?php
  $var="SELECT p.nume AS nume_depanator, count(*) AS Nr_devize
FROM Deviz d LEFT JOIN Persoana p ON d.id_depanator = p.id
WHERE data_finalizare BETWEEN '2019-09-01' AND '2019-09-30'
GROUP BY  d.id_depanator,p.nume;";

  $rezultat=mysqli_query($conexiune,$var);
  
  if(isset($_POST['cautare'])){
	  while($var1=mysqli_fetch_assoc($rezultat)){
		  ?>
		  <tr><td><center>
		  <?php
		  echo $var1["nume_depanator"];
		  ?>
		  <td><center>
		  <?php
		  echo $var1["Nr_devize"];
		  ?>
		  
		  <?php
	  }
  }
  ?></td></tr></table><br>
  
  <center><form action="" method="post">
  <input type="submit" name="cautare" value="CAUTARE"></form></center><br>
  
  <center><form action="meniu.php" >
  <input type="submit" name="inapoi" value="INAPOI LA MENIU"></form></center>
  
  <p style=" position: absolute; bottom: 0; left: 0; width: 100%; text-align: right;"><i>Arseniuc Anamaria <br> grupa 30226 <br> Calculatoare si Tehnologia Informatiei</i></p>
</body>
</html>