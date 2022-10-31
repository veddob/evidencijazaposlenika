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
	table,
	td {
   		 border: 1px solid #333;
	}
	.elementi{
  		  border: 1px solid #333;
 		 background-color: #333;
   	 color: #fff;
 	 }

	thead,
		tfoot {
  	 	 background-color: #333;
   	 	color: #fff;
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

<table>
    <thead>
        <tr>
            <th colspan="7">ZAPOSLENICI</th>
        </tr>
    </thead>
    <tbody>
        <tr class="elementi">
            <td>R.br.</td>
            <td>Prezime</td>
          	 <td>Ime</td>
          	 <td>Email</td>
          	 <td>Telefonski broj</td>
          	 <td>Radno mjesto</td>	
          	 <td>Odjel</td>
        </tr>
      	<tr>
            <td>1.</td>
            <td>Dobrić</td>
          	 <td>Vedrana</td>
          	 <td>veddob@gmail.com</td>
          	 <td>0914920364</td>
          	 <td>Voditelj odjela</td>	
          	 <td>IT</td>
        </tr>
      	<tr>
            <td>2.</td>
            <td>Jakovac</td>
          	 <td>Nikolina</td>
          	 <td>n.jakovac@hotmail.com</td>
          	 <td>0973378492</td>
          	 <td>Računovođa</td>	
          	 <td>Financije</td>
        </tr>
      	<tr>
           <td>3.</td>
            <td>Grgin</td>
          	 <td>Ena</td>
          	 <td>enagrgin@gmail.com</td>
          	 <td>0955033027</td>
          	 <td>Viši referent</td>	
          	 <td>Nabava</td>
        </tr>
		<tr>
            <td>4.</td>
            <td>Grgin</td>
          	 <td>Antonela</td>
          	 <td>antonela.gr@gmail.com</td>
          	 <td>0987653491</td>
          	 <td>Voditelj poslovnice</td>	
          	 <td>Prodaja</td>
        </tr>
    </tbody>
</table>

	</body>
</html>
