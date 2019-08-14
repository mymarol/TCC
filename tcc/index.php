<?php
  session_start();
  if(!isset($_SESSION['id_user'])){
    header("location: login.php");
    exit;
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<title>TCC</title>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>
<body>
<div class="container">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" class="form-contact" method="post" tabindex="1">
  	<label class="form-label">Digite sua matrícula:</label> 
  	<input type="text" class="form-contact-input" id="matricula" name="register" placeholder="Matrícula" required onkeypress="isInputNumber(event)" />
    <button type="submit" name="enviar" onclick="testMat(document.getElementById('matricula'));" class="form-contact-button">Enviar</button> 
    <a class="non" href="link-pagina-search-byname">Não sei minha matrícula</a> 
  </form>  
</div>  
<a href="sair.php">Sair</a>
</body>
</html>