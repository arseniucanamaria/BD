<?php
require 'conectare_bd.php';
?>

<HTML>
<head>
<title>3b</title>
<style>
body {
  background-image: url('4.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<meta charset ="UTF-8">
</head>
<body>
<form action="paginaPrinc.php" >
 <input type="submit" name="inapoi" value="Revino la PAGINA PRINCIPALA">
 </form>
<center><img src="utcn1.jpg" alt="Universitatea Tehnica" width="150" height="80">
 

<?php
			if (isset($_POST['cautare'])) 
			{
				$val_cautat = $_POST['val_cautat'];
				$eroare=0;
				if ($val_cautat==NULL or !is_numeric($val_cautat))
					{
						$val_cautat=-1;
						$eroare=1;
					}	
					
			
				$query = "SELECT id_p,descriere,fabricant,cantitate_stoc,pret_c FROM Piesa  WHERE cantitate_stoc < $val_cautat ORDER BY cantitate_stoc ASC, descriere ASC; ";
				$rezultat = mysqli_query($conexiune, $query);
			}
			else {
				$query="SELECT id_p,descriere,fabricant,cantitate_stoc,pret_c FROM Piesa  WHERE cantitate_stoc = -1 ORDER BY cantitate_stoc ASC, descriere ASC; ";
				$rezultat = mysqli_query($conexiune, $query);
}
			
?>
</td></tr>
<br><center>
<form action="" method="post" >
<center><h2><font face="Kristen ITC" color=MEDIUMSPRINGGREEN>3.b) Să se găsească detaliile pieselor care au cantitate_stoc sub <input type="float" name="val_cautat" maxlength="6" min="1" max="999999" size="7" > ordonat crescător după cantitate_stoc și crescător după descriere.</font></h2></center>
			<table border=3 align="center" width="400px">
			<tr>
			<td><h3><center><font size = 4 color=white>id_p</h3></font></td>
			<td><h3><center><font size = 4 color=white>descriere</h3></font></td>
			<td><h3><center><font size = 4 color=white>fabricant</h3></font></td>
			<td><h3><center><font size = 4 color=white>cantitate_stoc</h3></font></td>
			<td><h3><center><font size = 4 color=white>pret_c</h3></font></td>
	
			
			</tr>
<br>

 <?php
					while($row=mysqli_fetch_array($rezultat)):?>
					<tr align="center">
						<td><center><font size = 3><?php echo $row['id_p'];?></td></font>
						<td><center><font size = 3><?php echo $row['descriere'];?></td></font>
						<td><center><font size = 3><?php echo $row['fabricant'];?></td></font>
						<td><center><font size = 3><?php echo $row['cantitate_stoc'];?></td></font>
						<td><center><font size = 3><?php echo $row['pret_c'];?></td></font>
						
					</tr>
					<?php endwhile;?>

</td></tr></table><br>

<input type="submit" name="cautare" value="CAUTARE">
</form><br>
 <center><form action="meniu.php" >
 <input type="submit" name="inapoi" value="INAPOI LA MENIU">
 
 </form>	</center>	
	
</body>
</html>