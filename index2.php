<form>
	<input type="text" name="cadena"/>
	<input type="text" name="url"/>
	<button type="submit">Contar</button>
</form>

<?php
	extract($_GET);
	echo strlen($cadena);
	$data=explode("-", $url);

	foreach ($data as $key => $value) {
		echo $value, "<br />";
	}
?>