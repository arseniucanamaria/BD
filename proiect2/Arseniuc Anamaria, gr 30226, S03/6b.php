<?php
require 'conectare_bd.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>6b</title>
<style>
body {
  background-image: url('6.jpg');
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
  
  <h2><font face="Kristen ITC" color=purple>6.b) Sa se gaseasca pentru fiecare piesa folosita la devize cu data_finalizare în
luna septembrie 2019 cantitatea totala (descriere, fabricant, cantitate_totala). </font></h2>
  
  <table border=2>
  <tr><td><center><font size = 5 color=white>descriere</font></td>
  <td><center><font size = 5 color=white>fabricant</font></td>
  <td><center><font size = 5 color=white>cantitate_totala</font></td>
  </tr>
  
  
  
  <?php
  $var="SELECT p.descriere, p.fabricant, SUM(pd.cantitate) AS cantitate_totala
FROM piesa_deviz pd LEFT JOIN deviz d ON pd.id_d = d.id_d LEFT JOIN piesa p ON pd.id_p = p.id_p
WHERE data_finalizare BETWEEN '2019-09-01' AND '2019-09-30'
GROUP BY pd.id_p, p.descriere, p.fabricant;    
";
  $rezultat=mysqli_query($conexiune,$var);
  
  if(isset($_POST['cautare'])){
	  while($var1=mysqli_fetch_assoc($rezultat)){
		  ?>
		  <tr><td><center>
		  <?php
		  echo $var1["descriere"];
		  ?>
		  <td><center>
		  <?php
		  echo $var1["fabricant"];
		  ?>
		  <td><center>
		  <?php
		  echo $var1["cantitate_totala"];
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