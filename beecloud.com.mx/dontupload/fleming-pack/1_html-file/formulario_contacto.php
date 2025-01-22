<?php

	$nombre_completo		=	$_POST['form_name'];
	$email					=	$_POST['form_email'];
	$telefono				=	$_POST['form_phone'];
	$asunto					=	$_POST['form_subject'];
	$mensaje				=	$_POST['form_message'];

	$post = [
		'nombre_completo'	=>	$nombre_completo,
		'email'				=>	$email,
		'telefono'			=>	$telefono,
		'asunto'			=>	$asunto,
		'mensaje'			=>	$mensaje,
	];

	$ch = curl_init('https://www.api.beecloud.com.mx/public/api/email/');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

	// execute!
	$message = curl_exec($ch);
	$status = "true";

	// close the connection, release resources used
	curl_close($ch);

	// do anything you want with your response
	$status_array = array( 'message' => $message, 'status' => $status);
	echo json_encode($status_array);

?>