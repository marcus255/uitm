<HTML>
<HEAD>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</HEAD>
<BODY>
Podaj ile razy chcesz rzucić:<br>
        <form action="index.php?strona=kostka" method="GET">

<input type=text name="ilosc" style="font-size:20px"> <br>
    <input type='hidden' name='strona' value='kostka'>
	<input type=SUBMIT value="Graj!" style="font-size:20px">
        </form>

<?php
srand();
if (isset($_GET['ilosc'])) $n = $_GET['ilosc']; else $n = 1;
$a1=0;
for($i = 1; $i <= $n; $i++)
{
$kostka = rand(1,6);
switch($kostka)
{
   case '1':
      echo "<img src='kostka/k1.png'>";	
$a1=$a1+1;
 break;
   case '2':
      echo "<img src='kostka/k2.png'>";
$a1=$a1+2;			
      break;
   case '3':
      echo "<img src='kostka/k3.png'>";	
$a1=$a1+3;		
      break;
   case '4':
      echo "<img src='kostka/k4.png'>";
$a1=$a1+4;
      break;
   case '5':
      echo "<img src='kostka/k5.png'>";	
$a1=$a1+5;		
      break;
  case '6':
      echo "<img src='kostka/k6.png'>";	
$a1=$a1+6;		
}	
}
echo "<br><font size=20>Suma oczek wynosi ".$a1.".</font>";

?>

</BODY>
</HTML>

