<?php 



//conexao com SQL SERVER
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooll=0","root", "");

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