<?php
$str="
<?xml version='1.0' encoding='ISO-8859-1'?>
<BookInfo>
<book>
<bookno>1</bookno>
<bookname>Java</bookname>
<authorname>Balguru Swami</authorname>
<price>250</price>
<year>2006</year>
</book>
<book>
<bookno>2</bookno>
<bookname>C</bookname>
<authorname>Denis Ritche</authorname>
<price>500</price>
<year>1971</year>
</book>
</BookInfo>";

$fname="bk.xml";
$fp=fopen($fname,"w");
chmod($fp,777);
fwrite($fp,$str);
fclose($fp);
echo"created filenme is :".$fname;
?>
