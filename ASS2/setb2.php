<?php
$d=new DOMDocument();
$d->load("movie.xml");
echo "<h2>Names of the Movies and their Actors:</h2>";
$movies=$d->getElementsByTagName("Movie");
foreach ($movies as $movie)
{
	$number = $movie->getElementsByTagName("Movieno")->item(0)->textContent;
	$title = $movie->getElementsByTagName("Movietitle")->item(0)->textContent;
	$actor = $movie->getElementsByTagName("Actorname")->item(0)->textContent;
	$year = $movie->getElementsByTagName("year")->item(0)->textContent;
	echo "<b>Movie Number :</b>$number<br>";
	echo "<b>Movie Title :</b>$title<br>";
	echo "<b>Actor Name :</b>$actor<br>";
	echo "<b>Release Year :</b>$year<br>";
}
?>
