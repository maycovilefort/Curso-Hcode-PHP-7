<form>
	<input type="text" name="nome">
	<input type="date" name="nasc">
	<input type="submit" value="OK">
</form>
<?php
	if(isset($_GET)) {

		foreach ($_GET as $key => $value) {
			echo $key." : ".$value."<br/>";
			echo "<hr>";
		}
	}
?>