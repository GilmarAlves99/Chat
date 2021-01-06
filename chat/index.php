<?php 
include "db.php";
 ?>


<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Mukta+Vaani" rel="stylesheet"> 

	<script type="text/javascript">
	function ajax(){
		var req = new XMLHttpRequest();
		req.onreadystatechange = function(){
			if(req.readyState == 4 && req.status == 200){
				document.getElementById('chat').innerHTML = req.responseText;
			}
		}

		req.open('GET', 'chat.php', true);
		req.send();
	}

	setInterval(function(){ajax();}, 1000);

	</script>


	<title>Chat com PHP</title>

</head>
<!--ESTE ONLOAD AJAX É PARA ASSIM QUE A PÁGINA ABRIR ELE JÁ CARERGAR AS INFORMAÇÕES, SEM TER QUE ESPERAR 1 SEGUNDO PARA ISSO -->
<body onload="ajax();">

<div id="conteudo">
	<div id="caixa-chat">
		<div id="chat">
		
		<!-- LOCAL ONDE VAI CHAMAR O CHAT -->

		</div>
	</div>

	<form method="POST" action="index.php">
		<input type="text" name="nome" placeholder="Preencha seu Nome">
		<textarea name="mensagem" placeholder="Insira uma mensagem"></textarea>
		<input type="submit" name="enviar" value="Enviar">
	</form>

	<?php



	if(isset($_POST['enviar'])){
		$nome = $_POST['nome'];
		$mensagem = $_POST['mensagem'];
		$consulta = "INSERT INTO tb_chat (nome, mensagem) VALUES ('$nome', '$mensagem')";
		$executar = $conexao->query($consulta);
		if($executar){
			echo "<embed loop='false' src='beep.mp3' hidden='true' autoplay='true'>";
		}
	}

	?>

</div>

</body>
</html>