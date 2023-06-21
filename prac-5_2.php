<?php
echo "<h1 align='center'> Vora Jainam (216090307030)</h1>";
$arr = array(38,45,23,23,23,4,2,52,1);
$len = count($arr);
echo "Unsorted array: ";
for($i=0;$i<$len;$i++)
{
    echo $arr[$i]." ";
}
echo "<br />";
sort($arr);
echo "Sorted array: ";
for($i=0;$i<$len;$i++)
{
	echo $arr[$i]." ";
}
?>