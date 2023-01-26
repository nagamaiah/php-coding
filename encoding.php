
	<form action="" method="post">
	<input type="text" name="text" >
	<input type="submit">
	</form>



	<?php

	if (isset($_POST['text'])){
		$text = $_POST['text'];

		if ( !preg_match('/^\X*$/u', $text)) {
   		$str = utf8_encode($str);
		}
		echo mb_detect_encoding($str);
		echo "<p>{$str}</p>";
	}



?>