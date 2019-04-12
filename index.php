
<!DOCTYPE html>
<html lang="pl">
	<?php
		require 'vendor/swiftmailer/swiftmailer/lib/swift_required.php';
		require 'mail_cfg.php';
	?>
<head>
   
	    <title>mailer</title>
		<meta name="keywords" content="donec, elementum, velit, vitae, elementum, auctor, tortor, augue, ornare, sapien, posuere, nibh, nisl, quis">
		<meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipiscing elit">
		<meta name="author" content="Lokalny programista">
		<meta name="generator" content="Sublime Text">
		<meta name="copyright" content="LokalnyProgramista.com">
		<meta name="language" content="PL">
		<meta charset="UTF-8">
		<meta http-equiv="Reply-to" content="programista@lokalnyprogramista.com">
		<meta http-equiv="Creation-date" content="2019.02.22">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
</head>


<body>

<form action="" method="post">
	   <input type="text" name="topic" id="" placeholder="Temat"><br>
	   <input type="text" name="recipient" id="" placeholder="Do"><br>
	   <textarea name="message" id="" cols="30" rows="10" placeholder="Treść"></textarea>
	   <input type="submit" name="sendMessage" id="" value="Wyślij">
<?php

		   if (isset($_POST['sendMessage'])) {
		$transport = (new Swift_SmtpTransport($server, $port, $encrypt))
		  ->setUsername($login)
		  ->setPassword($password)
		;

		$mailer = new Swift_Mailer($transport);

		$message = (new Swift_Message('Wonderful Subject'))
		  ->setFrom([$login])
		  ->setTo([ $_POST{'recipent'}])
		  ->setBody($_POST['message'])
		  ;
		$result = $mailer->send($message);
		   }
?>
	</form>
</body>
</html>