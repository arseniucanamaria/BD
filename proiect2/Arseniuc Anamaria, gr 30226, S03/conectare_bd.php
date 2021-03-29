<?php

$hostname="localhost";
$username="root";
$password="";
$database="s03_colocviu_final";

$conexiune=mysqli_connect($hostname,$username, $password,$database)
or die ("Nu gasesc baza de date");

?>