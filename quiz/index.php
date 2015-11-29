<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>Quiz</title>
</head>
<body>
<font face="tahoma" size=2 >
<form action='index.php?strona=quiz' method='post'>

Który z podanych pierwiastków ma najmniejszą liczbę atomową?<br/>
<input type=radio name='wybor' value='1'>Hel<br/>
<input type=radio name='wybor' value='2'>Uran<br/>
<input type=radio name='wybor' value='3'>Wodór<br/>
<input type=radio name='wybor' value='4'>Kadm<br/>

<?php
if (isset($_POST['wybor'])) $wybor = $_POST['wybor']; else $wybor = 0;
if($wybor != 0)
   {
   if ($wybor == 3)
   echo '<font color=green><b>Dobrze.</b></font>';
   else echo '<font color=red><b>Źle.</b></font>';
   }
?>
<hr>

Podaj nazwisko obecnego premiera polskiego rządu:<br/>
<input type=text name='nazwisko'>
<br/>
<?php
if (isset($_POST['nazwisko'])) $nazwisko = $_POST['nazwisko']; else $nazwisko = '';
if ($nazwisko != '')
   {
   if ($nazwisko == 'Tusk') echo '<font color=green><b>Dobrze</b></font>';
   else if ($nazwisko == 'tusk') echo '<font color=orange><b>Dobrze, ale powinno być napisane wielką literą.</b></font>';
   else echo '<font color=red><b>Źle.</b></font>';
   }
?>
<hr>

Zaznacz liczby podzielne przez 7:<br>
<input type=checkbox name='liczba1'>13<br/>
<input type=checkbox name='liczba2'>28<br/>
<input type=checkbox name='liczba3'>54<br/>
<input type=checkbox name='liczba4'>63<br/>
<input type=checkbox name='liczba5'>77<br/>

<?php
if (isset($_POST['liczba1'])) $a1 = $_POST['liczba1']; else $a1 = '';
if (isset($_POST['liczba2'])) $a2 = $_POST['liczba2']; else $a2 = '';
if (isset($_POST['liczba3'])) $a3 = $_POST['liczba3']; else $a3 = '';
if (isset($_POST['liczba4'])) $a4 = $_POST['liczba4']; else $a4 = '';
if (isset($_POST['liczba5'])) $a5 = $_POST['liczba5']; else $a5 = '';
if ($a1 || $a2 || $a3 || $a4 || $a5)
   {
   if ((($a2 == 'on') || ($a4 == 'on') || ($a5 == 'on')) && (($a1 == 'on') || ($a3 == 'on'))) echo '<font color=orange><b>Prawie dobrze</b></font>';
   else if (($a2 == 'on') && ($a4 == 'on') && ($a5 == 'on')) echo '<font color=green><b>Dobrze.</b></font>';
   else echo '<font color=red><b>Źle.</b></font>';
   }
?>
<hr>

Która z podanych planet formalnie nie należy do Układu Słonecznego?<br/>
<select name='planeta'><br/>
<option selected value='0'>Wybierz</option>
<option value='1'>Uran</option>
<option value='2'>Merkury</option>
<option value='3'>Jowisz</option>
<option value='4'>Pluton</option>
<option value='5'>Neptun</option>
</select><br/>
<?php
if (isset($_POST['planeta'])) $planeta = $_POST['planeta']; else $planeta = 0;
if (isset($planeta))
   {
   if ($planeta != 0)
      {
      if ($planeta == 4)
      echo '<font color=green><b>Dobrze.</b></font>';
      else echo '<font color=red><b>Źle.</b></font>';
      }
   }
?>
<hr>

<input type='hidden' name='strona' value='quiz'>
<input type=submit value='Wyslij'>
</form>
</font>
</body>
</html>
