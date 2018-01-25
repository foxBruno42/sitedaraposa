<?php
// defined('BASEPATH') OR exit('No direct script access allowed');
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Administrator</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
	<script type="text/javascript" src="assets/js/scripts.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<?php //echo $this->session->flashdata('result'); ?>
	<form method="POST" action="<?=base_url('login/logar')?>" onsubmit="return verificadados()" >
		<div class="login">
			<input type="email" name="username" id="username" placeholder="Digite Seu usuário..." value="" />
			<input type="password" name="password" id="password" placeholder="Digite Sua senha..." value="" />
			<button type="submit" name="submit" value="Logar">Logar</button>
		</div>
	</form>
</body>
</html>