<form action="index.php" method="post">
	<input type="number" name="cantidad1">
	<input type="number" name="cantidad2">
	<input type="number" name="cantidad3">
	<input type="number" name="cantidad4">
	<input type="number" name="cantidad5">
	<input type="number" name="cantidad6">
	<input type="number" name="cantidad7">
	<input type="number" name="cantidad8">
	<input type="number" name="cantidad9">
	<input type="number" name="cantidad10">
	
	<button type="submit">Enviar</button>
</form>

<?php
	//envio de datos por la web: GET, POST
	//arrays globales
	//		$_GET, $_POST, $_REQUEST, $_FILES
	
	echo "Listado desde 0 hasta:", $_POST['cantidad10'];
	echo ":<br />";
	echo $_POST['cantidad1'], "<br />";
	echo $_POST['cantidad2'], "<br />";
	echo $_POST['cantidad3'], "<br />";
	echo $_POST['cantidad4'], "<br />";

	extract($_POST);
	echo "Listado desde 0 hasta:", $cantidad10;
	echo ":<br />";
	echo $cantidad1, "<br />";
	echo $cantidad2, "<br />";
	echo $cantidad3, "<br />";
	echo $cantidad4, "<br />";

	echo "<hr />";
	foreach ($_POST as $clave => $valor) {
		echo $valor, "<br />";
	}
?>