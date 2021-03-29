<?php
require 'conectare_bd.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>4b</title>
<style>
body {
  background-image: url('4.jpg');
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
  
  <h2><font face="Kristen ITC">4.b) Sa se gaseasca perechi de piese (id_p1, id_p2) care apar pe acelasi deviz în aceeasi
cantitate. O pereche este unica în rezultat.</font>
</h2>
  
  <table border=2>
  <tr><td><h3><center><font size = 4>Id_Piesa1</h3></font></td>
  <td><h3><center><font size = 4>Id_Piesa2</h3></font></td>
  </tr>
  
  
  
  <?php
  $var="SELECT DISTINCT LEAST(a.id_p, b.id_p) AS Id_Piesa1 ,GREATEST(a.id_p, b.id_p) AS Id_Piesa2
FROM (Piesa_Deviz a INNER JOIN Piesa_Deviz b ON  (a.id_d = b.id_d) AND (a.cantitate =  b.cantitate)) 
WHERE a.id_p <> b.id_p;
";
  $rezultat=mysqli_query($conexiune,$var);
  
  if(isset($_POST['cautare'])){
	  while($var1=mysqli_fetch_assoc($rezultat)){
		  ?>
		  <tr><td><center>
		  <?php
		  echo $var1["Id_Piesa1"];
		  ?>
		  <td><center>
		  <?php
		  echo $var1["Id_Piesa2"];
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