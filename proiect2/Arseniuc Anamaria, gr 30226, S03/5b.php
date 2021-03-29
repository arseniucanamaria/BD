<?php
require 'conectare_bd.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>5b</title>
<style>
body {
  background-image: url('8.jpg');
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
  <center><img src="utcn1.jpg" alt="Universitatea Tehnica" width="150" height="80"><br><br>
  
  <h2><font face="Kristen ITC" color=white>5.b) Sa se gaseasca descrierea si fabricantul pentru piesa cu pretul real cel mai mare. 
</font></h2><br>
  
  <table border=2>
  <tr><td><center><font size = 5>descriere</font></td>
  <td><center><font size = 5>fabricant</font></td>
  </tr>
  
  
  
  <?php
  $var="SELECT descriere, fabricant
FROM Piesa
WHERE id_p = ANY (SELECT id_p FROM Piesa_Deviz WHERE pret_r >= ALL (SELECT pret_r FROM Piesa_Deviz));     
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
		  
		  <?php
	  }
  }
  ?></td></tr></table>
  <br>
  <center><form action="" method="post">
  <input type="submit" name="cautare" value="CAUTARE"></form></center><br>
  
  <center><form action="meniu.php" >
  <input type="submit" name="inapoi" value="INAPOI LA MENIU"></form></center>
  
  <p style=" position: absolute; bottom: 0; left: 0; width: 100%; text-align: right;"><i><font color="white" size=4>Arseniuc Anamaria <br> grupa 30226 <br> Calculatoare si Tehnologia Informatiei</font></i></p>
</body>
</html>