<?php 




$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root", "");

$stmt= $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");
$stmt->execute();
$result = $stmt-> fetchALL(PDO::FETCH_ASSOC);

foreach ($result as $row) {

	foreach ($row as $key => $value) {

		echo "<strong>" .$key. ":</strong>" .$value. "<br/>";
	}

	echo "=========================================<br>";
	
}



 ?>