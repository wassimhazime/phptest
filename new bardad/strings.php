<!DOCTYPE html>
<html>
<head>
</head>
<body>
 
 <?php
$name="Hussein arluabe";
$bref="works as software developer in emerge";

echo $name .",". $bref;

$info=$name .",". $bref;
echo "<br/>";
echo "To upper:". strtoupper($info);
echo "<br/>";
echo "To lower:". strtolower($info);
echo "<br/>";
echo "Trim:". trim("  new york city "). " best city" ;
echo "<br/>";
echo "replace:". str_replace("emerge", "smplicity", $info);
 ?>


</body>
</html>