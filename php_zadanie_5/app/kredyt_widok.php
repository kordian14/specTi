
<?php include 'header.php';  ?>
<body>

<form action="<?php print(_APP_URL);?>/app/calc.php" method="post">
	<label for="id_kwota">Podaj kwotę kredytu: </label>
	<input id="id_kwota" type="text" name="kwota" value="<?php isset($kwota)?print($kwota):""  ?>" />
	<br />
	<label for="id_procent">Podaj procent kredytu: </label>
	<input id="id_procent" type="text" name="procent" value="<?php isset($procent)?print($procent):"" ?>" /><br />
	<label for="id_rata">Podaj ile rat ma kredyt: </label>
	<input id="id_rata" type="text" name="rata" value="<?php isset($rata)?print($rata):"" ?>" /><br />
	<input type="submit" value="Oblicz" />
</form>	

<?php

if (isset($messages)) {
	if (count ( $messages ) > 0) {
		echo '<ol style="margin: 20px; padding: 10px 10px 10px 30px; border-radius: 5px; background-color: #f88; width:300px;">';
		foreach ( $messages as $key => $msg ) {
			echo '<li>'.$msg.'</li>';
		}
		echo '</ol>';
	}
}
?>

<?php if (isset($result)){ ?>
<div id="result">
<?php echo 'Wynik: '.$result; ?>
</div>
<?php } ?>

</body>
<?php include 'footer.php';  ?>