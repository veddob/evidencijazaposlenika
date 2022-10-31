<?php
$db = mysqli_connect("localhost", "root", "");

if(!$db) {
	echo "Error: Unable to connect to MySQL.";
	echo "Debugging errno: " . mysqli_connect_errno();
	echo "Debugging error: " . mysqli_connect_error();
	exit;
}
echo "Success: A proper connection to MySQL was made!<br>";
echo "Host infomation: " . mysqli_get_host_info($db);

$sql = "CREATE DATABASE IF NOT EXISTS Evidencija_Zaposlenika";
if ($db->query ($sql) === false) {
	echo "Table not created: ".$db->error;
} else {
	$db->select_db('Evidencija_Zaposlenika');
}

$sql="CREATE Table Evidencija_Zaposlenika(
		rB int(10) NOT NULL auto_increment,
		Prezime varchar(255) NOT NULL default'',
		Ime varchar(255) NOT NULL default'',
		email varchar(255) NOT NULL default '',
		Telefonski_broj varchar(255),
		Radno_mjesto varchar(255) NOT NULL default '',
		Odjel varchar(255) NOT NULL default '',
		PRIMARY KEY(rB), 
		UNIQUE KEY(email)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8";
		
		//$db->query ($sql) or die ($db->error);
		
$sql ="Insert into Evidencija_Zaposlenika (Prezime,Ime,email,Telefonski_broj,Radno_mjesto,Odjel) 
			VALUES('Anic','Ana','ana@gmail.com','091222555','referent','Najam'),
					('Antic','Ante','antean@gmail.com','092333666','grafičar','Marketing')";
			
		//$db->query($sql) or die ($db->error);
		
		$sql="SELECT Prezime,Ime,email,Telefonski_broj,Radno_mjesto,Odjel 
		FROM Evidencija_Zaposlenika";

?>

<!DOCTYPE>
<html lang="en">
<head>
	<style>

	body {
	background-image: url("pozadina.jpg");
	background-color: #cccccc;
  	height: 100%;
  	background-position: center;
 	 background-repeat: no-repeat;
 	 background-size: cover;
	}
	h1{
		text-indent: 50px;
  letter-spacing: 3px;
	}
	a {
	font-family:Alternate Gothic;
	color: black;
	}
	</style>
	

</head>
	<body>
	
	
	
	<center><h1>LAST MINUTE</h1><center>
	
	
	<center><h2><a href="evidencija_zaposlenika.php">EVIDENCIJA ZAPOSLENIKA</a></h2><center>
	<center><h3><a href="PrikazSvihZaposlenika.php">Prikaz svih zaposlenika</a></h3><center>
	<center><h3><a href="DodavanjeZaposlenika.php">Dodavanje zaposlenika</a></h3><center>
	<center><h3><a href="BrisanjeZaposlenika.php">Brisanje zaposlenika</a></h3><center>
	<center><h3><a href="UredivanjeZaposlenika.php">Uređivanje zaposlenika</h3><center>
	</body>
</html>
