<?php
session_start();
$eno=$_POST['eno'];
$enm=$_POST['enm'];
$eadd=$_POST['eadd'];
$_SESSION['eno']=$eno;
$_SESSION['enm']=$enm;
$_SESSION['eadd']=$eadd;
?>
<a href="b22.html"><br>Show</a>
