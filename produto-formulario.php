<?php include("cabecalho.php");?>
			<h1>Formulário de produto:</h1>
			<form action="adiciona-produto.php">
			<form> 
				Nome: 
				<input type="text" name="nome"><br/>
				Preço:
				<input type="number" name="preco"><br/>

				<input type="submit" value="Cadastrar">
<?php include("rodape.php");?>