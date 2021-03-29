<?php
require 'conectare_bd.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>3a</title>
<style>
body {
  background-image: url('1.jpg');
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
  <center><img src="utcn1.jpg" alt="Universitatea Tehnica" width="150" height="80"><br>
  
  <h2><font face="Kristen ITC" >3.a) Să se găsească detaliile pentru devizele care au constatare și sunt nefinalizate la data ‚01-SEP-2019’, ordonat după data introducere.</font></h2><br>
  
  <table border=3 align="center"><font color=red>
  <tr>
  <td><h3><center><font size = 4 color=red>id_d</h3></font></td>
  <td><h3><center><font size = 4 color=red>data_introducere</h3></font></td>
  <td><h3><center><font size = 4 color=red>aparat</h3></font></td>
  <td><h3><center><font size = 4 color=red>simptome</h3></font></td>
  <td><h3><center><font size = 4 color=red>defect</h3></font></td>
  <td><h3><center><font size = 4 color=red>data_constatare</h3></font></td>
  <td><h3><center><font size = 4 color=red>data_finalizare</h3></font></td>
  <td><h3><center><font size = 4 color=red>durata</h3></font></td>
  <td><h3><center><font size = 4 color=red>manopera_ora</h3></font></td>
  <td><h3><center><font size = 4 color=red>total</h3></font></td>
  <td><h3><center><font size = 4 color=red>id_client</h3></font></td>
  <td><h3><center><font size = 4 color=red>id_depanator</h3></font></td></tr></font>
  
  
  
  <?php
  $var="CALL 3a()";
  $rezultat=mysqli_query($conexiune,$var);
  
  if(isset($_POST['cautare'])){
	  while($var1=mysqli_fetch_assoc($rezultat)){
		  ?>
		  <tr><td><center>
		  <?php
		  echo $var1["id_d"];
		  ?>
		  <td><center>
		  <?php
		  echo $var1["data_introducere"];
		  ?>
		  <td><center>
		  <?php
		  echo $var1["aparat"];
		  ?>
		  <td><center>
		  <?php
		  echo $var1["simptome"];
		  ?>
		  <td><center>
		  <?php
		  echo $var1["defect"];
		  ?>
		  <td><center><?php
		  echo $var1["data_constatare"];
		  ?>
		  <td><center><?php
		  echo $var1["data_finalizare"];
		  ?>
		  <td><center><?php
		  echo $var1["durata"];
		  ?>
		  <td><center><?php
		  echo $var1["manopera_ora"];
		  ?>
		  <td><center><?php
		  echo $var1["total"];
		  ?>
		  <td><center><?php
		  echo $var1["id_client"];
		  ?>
		  <td><center><?php
		  echo $var1["id_depanator"];
		  ?>
		  <?php
	  }
  }
  ?></td></tr></table><br>
  
  <center><form action="" method="post">
  <input type="submit" name="cautare" value="CAUTARE"></form></center><br>
  
  <center><form action="meniu.php" >
  <input type="submit" name="inapoi" value="INAPOI LA MENIU"></form></center>
  
  <p style=" position: absolute; bottom: 0; left: 0; width: 100%; text-align: right;"><i><font color=white>Arseniuc Anamaria <br> grupa 30226 <br> Calculatoare si Tehnologia Informatiei</font></i></p>
</body>
</html>