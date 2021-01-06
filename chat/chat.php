<?php 


include "db.php";

		$consulta = "SELECT * FROM tb_chat ORDER BY id DESC";
		$executar = $conexao->query($consulta);
		while($linha = $executar->fetch_array()):
		?>	
			<div id="dados-chat">
				<span style="color: #1C62C4;"><?php echo $linha['nome']; ?> </span>
				<span style="color: #848484;"><?php echo $linha['mensagem']; ?> </span>
				<span style="float: right;"><?php echo formatarData($linha['data']); ?> </span>
			</div>
		<?php endwhile; ?>