<?php
if(file_exists("book.xml"))
{
	$x=simplexml_load_file('book.xml');
	///echo $x;
	///var_dump($x);
	print_r($x);
}
else
	echo "ERROR File not exists";
?>

