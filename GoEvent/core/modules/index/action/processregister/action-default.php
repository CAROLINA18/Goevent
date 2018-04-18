<?php
/**
* @author evilnapsis
* @brief Proceso de registo, obtiene los valores post del formulario de registro y los guarda en la bd.
**/

		if(!empty($_POST)){
			if($_POST["name"]!=""&&$_POST["lastname"]!=""&&$_POST["email"]!=""&&$_POST["password"]!=""){
				$user = UserData::getByEmail($_POST["email"]);
				if($user==null){
					$str = "abcdefghijklmopqrstuvwxyz1234567890";
					$code = "";
					for ($i=0; $i < 6; $i++) { 
						$code .= $str[rand(0,strlen($str)-1)];
					}
					
	
					$user = new UserData();
					$user->name = $_POST["name"];
					$user->lastname = $_POST["lastname"];
					$user->email = $_POST["email"];
					$user->password = sha1(md5($_POST["password"]));
					$user->code = $code;
					$u = $user->add();
					$p =  new ProfileData();
					$p->user_id = $u[1];
					$p->add();
					$usuario=$user->email;
					$pass= $_POST["password"];
					$nombre = $user->name;

$msg = "<body><h1>Registro Exitoso</h1>
		<br>
		Hola $nombre ahora eres parte de la comunidad GoEvent donde puedes ver y crear eventos de manera
		gratuita y facil.
		<br>
					<p>Tus Datos son los siguientes : </p>
						Usuario : $usuario
						<br>
						Password: $pass	
						<br>
						<a href='./?view=index'>Ingresa Ya</a>			
					</body>";
//$mensaje="hola a todos";
require 'PHPMailerAutoload.php';
//$emailfabricante= $this->product->mf_email;
//<p><a href='http://localhost/Goevent/smile-1.0/index.php?r=index/processactivation&e=".sha1(md5($_POST["email"]))."&c=".sha1(md5($code))."'>Activa tu cuenta:</a></p>
//					<p>O tambien puedes usar el siguiente codigo de activacion: ".$code."</p>
$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'aristizabal.ana@correounivalle.edu.co';
$mail->Password = 'carolinaunivalle123';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From       = 'ana.carolina.aristizabal@gmail.com';
$mail->FromName   = 'GoEvent';
//$mail->AddBCC('soporteweb@decohunter.com','Copia a sistemas');
//$mail->AddBCC('cv@decohunter.com','Copia a carlos');
//$mail->AddBCC('aristizabal.ana@correounivalle.edu.co','Copia a cliente final');
//$mail->AddBCC('mercadeo@decohunter.com','Copia a mercadeo');
$mail->addAddress($_POST["email"] , 'GoEvent');
$mail->WordWrap   = 50;
$mail->isHTML(true);
$mail->Subject ='Bienvenido a GoEvent';
        
$mail->Body = $msg;

$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';  		
	
					//mail($_POST["email"], "Registro Exitoso", $msg);
					/* $f = fopen (ROOT."/register.txt","w");
					fwrite($f, $msg);
					fclose($f);
					*/
					Core::alert("Registro Exitoso!, se ha enviado un correo electronico con sus datos de Usuario.");
					Core::redir("./");
				}else{
					Core::alert("El email proporcionado ya esta registrado.");
					Core::redir("./");

				}
			}else{
				Core::alert("No puede dejar campos vacios");				
				Core::redir("./");
			}
		}

//		Core::redir("./");
		//View::render($this,"index",array("meta"=>$meta));
	





?>