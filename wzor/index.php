<HTML>
<HEAD>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />

</HEAD>
<BODY>
Podaj co chcesz obliczyć:<br>
        <form action="index.php" method="GET">

<select name="wybor" style="font-size:10px"> <br>
                       <option selected value="r">Opór</option>
                       <option value="i">Natężenie</option>
                       <option value="u">Napięcie</option>
					   <input type='hidden' name='strona' value='wzor'>
                       </select>
	<input type=SUBMIT value="Wybierz!" style="font-size:10px">
        </form>

<?php

if (isset($_GET['wybor'])) $a = $_GET['wybor']; else $a = '';
if ($a != '')
{
	if ($a == 'r')
	{
		echo " <form action='index.php' method='GET'>";
		echo "Podaj natężenie <input type=text name='pole1' style='font-size:10px'>";
		echo "Podaj napięcie <input type=text name='pole2' style='font-size:10px'>";
		echo "<input type=SUBMIT value='oblicz' >";
		echo "<input type='hidden' name='wybor' value='r'>";	
		echo "<input type='hidden' name='strona' value='wzor'>";		
		echo "</form>";

		if (isset($_GET['pole1']) && isset($_GET['pole2'])) 
		{
			$a = $_GET['pole1']; 
			$b = $_GET['pole2'];
			if ($a != 0)
			{
				$wynik = $b/$a;
				echo "Opór wynosi $wynik Ohm";
			}
			else
				echo "Nieprawidłowy zestaw wartości";
			
		}
		else 
			echo "Podaj wartości";
	}

	else if ($a == 'i')
	{
		echo " <form action='index.php' method='GET'>";
		echo "Podaj opór<input type=text name='pole1' style='font-size:10px'>";
		echo "Podaj napięcie <input type=text name='pole2' style='font-size:10px'>";
		echo "<input type=SUBMIT value='oblicz' >";
		echo "<input type='hidden' name='wybor' value='i'>";	
		echo "<input type='hidden' name='strona' value='wzor'>";
		echo "</form>";
		
		if (isset($_GET['pole1']) && isset($_GET['pole2'])) 
		{
			$a = $_GET['pole1']; 
			$b = $_GET['pole2'];
			if ($a != 0)
			{
				$wynik = $b/$a;
				echo "Natężenie wynosi $wynik A";
			}
			else
				echo "Nieprawidłowy zestaw wartości";
			
		}
		else 
			echo "Podaj wartości";
	}

	else 
	{
		echo " <form action='index.php' method='GET'>";
		echo "Podaj natężenie <input type=text name='pole1' style='font-size:10px'>";
		echo "Podaj opór <input type=text name='pole2' style='font-size:10px'>";
		echo "<input type=SUBMIT value='oblicz' >";
		echo "<input type='hidden' name='wybor' value='u'>";	
		echo "<input type='hidden' name='strona' value='wzor'>";
		echo "</form>";
		
		if (isset($_GET['pole1']) && isset($_GET['pole2'])) 
		{
			$a = $_GET['pole1']; 
			$b = $_GET['pole2'];
			$wynik = $a*$b;
			echo "Napięcie wynosi $wynik V";	
		}
		
	}
}
?>

</BODY>
</HTML>
