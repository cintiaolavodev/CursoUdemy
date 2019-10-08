<?php
//Cria pastas
$dir1= "folder_01";
$dir2= "folder_02";


if (!is_dir($dir1))mkdir($dir1);
if (!is_dir($dir2))mkdir($dir2);
//cria arquivo
$filename= "README.txt";
if (!file_exists($dir1 . DIRECTORY_SEPARATOR .$filename)) {
    $file= fopen($dir1 . DIRECTORY_SEPARATOR .$filename, "w+");
    fwrite($file, date("Y-m-d H:i:s"));
    fclose($file);
}
//move arquivo de dir1 para dir2
rename(
	$dir1 . DIRECTORY_SEPARATOR .$filename,//origem
	$dir2 . DIRECTORY_SEPARATOR .$filename//destino
);

echo "Arquivo movido com sucesso";

?>