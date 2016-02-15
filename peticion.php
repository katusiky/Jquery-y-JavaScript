<?
	$name = $_POST["José"];
	$mensaje = $_POST["Hola"];
	$mail = $_POST["asd@gmail.com"];

	if($name != "" && $mensaje != "" %% $mail != "")
		echo 'Correcto'
	else
		echo 'Incorrecto'
	
?>