<?php
require 'conectare_bd.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>4a</title>
<style>
body {
  background-image: url('7.jpg');
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
  
  <h2><font face="Kristen ITC" color=white>4.a) Sa se gaseasca (id_d, descriere, fabricant, pret_c si pret_r) pentru piesele cu pretul de catalog mai mare decât pretul real. 
</font></h2>
  
  <table border=2>
  <tr><td><h3><center><font size = 4 color=gold>id_d</h3></font></td>
  <td><h3><center><font size = 4 color=gold>descriere</h3></font></td>
  <td><h3><center><font size = 4 color=gold>fabricant</h3></font></td>
  <td><h3><center><font size = 4 color=gold>pret_c</h3></font></td>
  <td><h3><center><font size = 4 color=gold>pret_r</h3></font></td>
  </tr>
  
  
  
  <?php
  $var="SELECT id_d, descriere, fabricant, pret_c, pret_r
FROM Piesa p INNER JOIN Piesa_Deviz pd
ON p.id_p = pd.id_p AND p.pret_c >= pd.pret_r;
";
  $rezultat=mysqli_query($conexiune,$var);
  
  if(isset($_POST['cautare'])){
	  while($var1=mysqli_fetch_assoc($rezultat)){
		  ?>
		  <tr><td><center><font color=LAVENDER>
		  <?php
		  echo $var1["id_d"];
		  ?>
		  <td><center><font color=LAVENDER>
		  <?php
		  echo $var1["descriere"];
		  ?>
		  <td><center><font color=LAVENDER>
		  <?php
		  echo $var1["fabricant"];
		  ?>
		  <td><center><font color=LAVENDER>
		  <?php
		  echo $var1["pret_c"];
		  ?>
		  <td><center><font color=LAVENDER>
		  <?php
		  echo $var1["pret_r"];
		  ?>
		  
		  <?php
	  }
  }
  ?></td></tr></table><br>
  
  <center><form action="" method="post">
  <input type="submit" name="cautare" value="CAUTARE"></form></center><br>
  
  <center><form action="meniu.php" >
  <input type="submit" name="inapoi" value="INAPOI LA MENIU"></form></center>
  
  <p style=" position: absolute; bottom: 0; left: 0; width: 100%; text-align: right;"><i><font color=white size=4>Arseniuc Anamaria <br> grupa 30226 <br> Calculatoare si Tehnologia Informatiei</font></i></p>
</body>
</html>