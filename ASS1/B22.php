<?php
session_start();
$e1=$_POST['e1'];
$e2=$_POST['e2'];
$e3=$_POST['e3'];
echo "<h3>Employee Details</h3>";
echo "Employee Number:".$_SESSION['eno']."<br>";
echo "Employee Name:".$_SESSION['enm']."<br>";
echo "Employee Address:".$_SESSION['eadd']."<br>";
echo "basic:".$e1."<br>";
echo "DA:".$e2."<br>";
echo "HRA:".$e3."<br>";
$total=$e1+$e2+$e3;
echo "<h2>Total is : ".$total."</h2>";
?>
