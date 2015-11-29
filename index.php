<html>
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<title>PHP, CSS, kontenery, POST, GET</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<div id="top">
<div id="NAGLOWEK">PHP, CSS, kontenery, POST, GET</div>
<div id="MENU">

<pre><ul>
<a href="index.php?strona=for">Pętla for</a></br>
<a href="index.php?strona=los">Losowanie</a></br>
<a href="index.php?strona=moneta">Rzut monetą</a></br>
<a href="index.php?strona=wzor">Wzór fizyczny</a></br>
<a href="index.php?strona=quiz">Quiz</a></br>
<a href="index.php?strona=kostka">Kostka do gry</a></br>
<a href="index.php?strona=o_mnie">O mnie</a></br>
</ul></pre>

</div>
<div id="TRESC">
<?
if (isset($_GET['strona']))
{
	switch($_GET['strona'])
	{
	case 'for':
	include('for/index.php');
	break;

	case 'los':
	include('losowanki/index.php');
	break;

	case 'moneta':
	include('losowanki/index2.php');
	break;

	case 'wzor':
	include('wzor/index.php');
	break;

	case 'quiz':
	include('quiz/index.php');
	break;

	case 'kostka':
	include('kostka/index.php');
	break;
	default:
	include('o_mnie.txt');
	}
}
else
	include('o_mnie.txt');
		
	
 ?>

</div>
<div id="STOPKA">Copyright 2015 by marcus255. All rights reserved.</div>
</div>
<body>
</body>
</html>

