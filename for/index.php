<HTML>
<HEAD>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</HEAD>
<BODY>
Podaj górną granicę zakresu liczb:<br>

        <form action="index.php" method="GET">
<input type=text name="ile" style="font-size:10px">
        <input type=SUBMIT value="OK" style="font-size:10px">
		<input type='hidden' name='strona' value='for'>
        </form>
        
 <?php


if (isset($_GET['ile'])) $a = $_GET['ile']; else $a = 1;
echo 'To jest pętla <font size=32>FOR</font>, w której wyświetlam wielokrotności liczby 3 w zakresie od 1 do '.$a.':<br>';
for($i = 0; $i <= $a; $i=$i+3)
{
	if ($i % 6) echo $i.' ';
else echo '<b>'.$i.'</b> ';	
  }
echo '<br><br>A to jest pętla <font size=32>WHILE</font>, której działanie jest jakie jest... A mianowicie wyświetla liczby mniejsze niż 20.<br>';
$a=1;
while( $a < 20)
{
echo $a.' - Ta liczba jest mniejsza od 20.<br>';
$a++;
}

?>
       
</BODY>
</HTML>
