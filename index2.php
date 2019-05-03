<form>
	<input type="text" name="cadena"/>
	<button type="submit">Contar</button>
</form>

<?php
	extract($_GET);
	echo strlen($cadena);
?>