<?php



$pessoa =  array(
	'nome' =>'Cíntia',
	'idade'=>20
);
foreach ($pessoa as  &$value) {
	# code...
	if (gettype($value)== 'integer')$value += 10;
	echo $value.'<br>'; 

		# code...
	
}
print_r($pessoa);


?>