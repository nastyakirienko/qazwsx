<?php
$f = $c = '';
if(isset($_POST['f'])) $f = $_POST['f'];
if(isset($_POST['c'])) $c = $_POST['с'];

if($f!='')
{
    $c = ($f-32)*(5/9);
    $out = "Температура фаренгейта $f ° равна $c ° Цельсия";
}
else if($c != ""){
    $f = ($c+32)*(9/5);
    $out = "Температура $c ° цельсия равна $f ° Фаренгейта";
}
else $out = "";

echo <<<_END
<html>
 <head> 
		<title> Перевод температуры</title>
 </head>
 <body>
 <pre>
 Введите значение температуры в одной из полей формы:
  <b>$out</b>
   <form method="post" action = "index.php">
 		Температура по Фаренгейту <input type="text" name="f" size="7"><br><br>
		  Температура по Цельсию <input type="text" name="с" size="7">
		<input type="submit" value="Перевести">
  </form>
  </pre>	
 </body>
 </html>
_END;
?>
