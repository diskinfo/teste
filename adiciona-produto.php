<?php include("cabecalho.php");?>
			<?php 
			$nome = $_GET['nome'];
			$preco = $_GET['preco'];

			//conexão com banco de dados
			$conexao = mysqli_connect('localhost', 'root', '', 'loja');

			//query que vai ser executada
			$query = "insert into produtos (nome, preco) values ('{$nome}', {$preco})";

			//executa conexão
			if (mysqli_query($conexao, $query)){ ?>
				<p class="alert-sucess">Produto <?php echo $nome?> com o valor de <?php echo $preco?> adicionado com sucesso!</p>
			<?php }else{ ?>
				<p class="alert-danger">Produto <?php echo $nome?> NÃO foi adicionado, verifique!</p>
			<?php }

			//fecha conexão
			mysqli_close($conexao);
			?>
<?php include("rodape.php");?> 