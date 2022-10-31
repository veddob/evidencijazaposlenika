<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>The HTML5 Herald</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<style>
	.container {
		padding: 70px;
	}
	.table {
		border: 1px solid #eee;
		background-color:white;
	}
	body {
	background-image: url("pozadina.jpg");
	background-color: #cccccc;
  	height: 100vh;
  	background-position: center;
 	 background-repeat: no-repeat;
 	 background-size: cover;
	}
	.nav {
		background-color:white;
	}
	a {
		color:black;
	}
	
</style>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evidencija_zaposlenika";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM zaposlenici";
$result = $conn->query($sql);
$conn->close();
?>

<ul class="nav">
  <li class="nav-item">
    <a class="nav-link active" href="evidencija_zaposlenika.php">Evidencija zaposlenika</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="PrikazSvihZaposlenika.php">Prikaz svih zaposlenika</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="UredivanjeZaposlenika.php">Uređivanje zaposlenika</a>
</ul>

<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Prezime</th>
      <th scope="col">Ime</th>
	  <th scope="col">Email</th>
	  <th scope="col">Telefonski broj</th>
	  <th scope="col">Radno mjesto</th>
      <th scope="col">Odjel</th>
    </tr>
  </thead>
  <tbody>
  <?php
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			
			$redni_broj = $row["rb"];
			$prezime = $row["prezime"];
			$ime = $row["ime"];
			$email = $row["email"];
			$telefonski_broj = $row["telefonski_broj"];
			$radno_mjesto = $row["radno_mjesto"];
			$odjel = $row["odjel"];
			
			echo "<tr>",
					"<td>$redni_broj</td>",
					"<td>$prezime</td>",
					"<td>$ime</td>",
					"<td>$email</td>",
					"<td>$telefonski_broj</td>",
					"<td>$radno_mjesto</td>",
					"<td>$odjel</td>",
				"</tr>";
		}
	}
	?>
  </tbody>
</table>
</div>

</body>
</html>