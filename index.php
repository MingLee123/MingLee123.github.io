<html>
<head>
<link rel="stylesheet" type="text/css" href="/plik1.css"/>
</head>
<body>
<div id="logo">
LOGO
</div>
<div id="lewa">
<ul>
<li><a href="index.php">Strona G³ówna</a></li>
<li><a href="index.php?strona=form"">Formularz</a></li>
<li><a href="index.php?strona=sesja">Zawartoœæ sesji</a></li>
</ul>
</div>
<div id="srodek">
<?php
switch ($_GET['strona']) {
case form:
?>
<FORM method="post" action="">
<TABLE>
<tr><td>Imiê:</td><td><input type=text name="name"></td></tr>
<tr><td>Nazwisko:</td><td><input type=text name="lastname"></td></tr>
<tr><td>P³eæ:</td><td><input type=radio name="gender" value="female"> kobieta<br><input type=radio name="gender" value="male"> mê¿czyzna</td></tr>
<tr><td>Nazwisko panieñskie:</td><td><input type=text></td></tr>
<tr><td>Email:</td><td><input type=text></td></tr>
<tr><td>Kod pocztowy:</td><td><input type=text></td></tr>
</TABLE>
<input type="submit" value="Wyœlij">
</FORM>
<?php
break;
case sesja:
	echo "sesja";
	break;
default:
	echo "Strona g³ówna";
	break;
}
?>
</div>
<div id="prawa">
<ul>
<li><a href="www.google.com">google.com</a></li>
<li><a href="www.wp.pl">www.wp.pl</a></li>
</ul>
</div>
<div style=>
<div id="stopka">
stopka
</div>
</body>
</html>
