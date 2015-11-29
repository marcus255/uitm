<?php
srand();
$kostka = rand(1,2);
if ($kostka == 1) 
{
echo "Wylosowałeś oreła ;-)<br>";
echo("<img src='losowanki/1.jpg'>");
}
else 
{
echo "Wylosowałeś reszkę (-:<br>";
echo("<img src='losowanki/2.jpg'>");
}
?>
