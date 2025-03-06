<?php

	const TOKEN_BEECLOUD = "BEECLOUDAPIPHPMETA";
	const WEBHOOK_URL = "https://www.beecloud.com.mx/meta/webhook.php";

	function verificarToken($req,$res){
		try{
			$token = $req['hub_verify_token'];
			$challenge = $req['hub_challenge'];

			if (isset($challenge) && isset($token) && $token == TOKEN_BEECLOUD){
				$res->send($challenge);
			} else {
				$res->status(400)->send();
			}
		}catch(Exception $e){
			$res->status(400)->send();
		}
	}

	function recibirMensajes($req,$res){
		try{
			$res->send("EVENT_RECEIVED");
		}catch(Exception $e){
			$res->send("EVENT_RECEIVED");
		}
	}

	if ($_SERVER['REQUEST_METHOD'] === 'POST'){
		$input = file_get_contents('php://input');
		$data = json_decode($input,true);

		$recibirMensajes($data,http_response_code());
	}else if($_SERVER['REQUEST_METHOD']==='GET'){

		if (isset($_GET['hub_mode']) && isset($_GET['hub_verify_token']) && isset($_GET['hub_challenge']) && $_GET['hub_mode'] === 'suscribe' && $_GET['hub_verify_token'] === TOKEN_BEECLOUD) {
			echo $GET['hub_challenge'];
		} else {
			http_response_code(403);
		}
		
	}

?>
