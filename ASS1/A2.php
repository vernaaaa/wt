<?php
echo "Font style is:".$_GET['s1']."<br>Font color is:".$_GET['c']."<br>Background colour is:".$_GET['b']."<br>Font size is:".$_GET['s'];
setcookie("set1",$_GET['s1'],time()+3600);
setcookie("set2",$_GET['c'],time()+3600);
setcookie("set3",$_GET['b'],time()+3600);
setcookie("set4",$_GET['s'],time()+3600);
?>
<a href="A22.php"><br>Show</a>
