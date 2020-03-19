<?php 
if (count($_POST))
	echo 'Witaj '. $_POST['imie'];
else  echo '<form action="" method="POST">
<input type="text" id="imie" name="imie">
<input type="submit" value="Wyślij">
</form>'; ?>
