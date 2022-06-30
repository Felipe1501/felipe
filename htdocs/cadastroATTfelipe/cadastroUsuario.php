<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cadastro Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="container">
	<h1 class="text-center bg-primary text-white">CADASTRO DE USUÁRIOS</h1>
	<br>
		<div class="row">
			<div class="col">
				
			</div>
			<div class="col">
				<form action="#" method="POST">
				  <div class="mb-3">
					<label for="nome" class="form-label">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome">
				  </div>
				  <div class="mb-3">
					<label for="cpf" class="form-label">CPF</label>
					<input type="text" class="form-control" id="cpf" name="cpf" oninput="mascara(this, 'cpf')"/>
				  </div>
                  <div class="mb-3">
                  <label for="country" class="form-label" >PERFIL</label>
                  <select class="form-control" id="exampleInputperfil" name="perfil">
                    <option value="" selected="selected">Selecione um perfil</option>
                    <option value="FORNECEDOR">FORNECEDOR</option>
                    <option value="FORNECEDOR">CLIENTE</option>
                  </select>
                  </div>
				  <div class="mb-3">
					<label for="endereco" class="form-label">Endereço</label>
					<input type="text" class="form-control" id="endereco" name="endereco">
				  </div>
				  <div class="mb-3">
					<label for="tel" class="form-label">Telefone</label>
					<input type="text" class="form-control" id="tel" name="tel" oninput="mascara(this, 'tel')"/>
				  </div>
				  <div class="mb-3">
					<label for="email" class="form-label">E-mail</label>
					<input type="text" class="form-control" id="email" name="email">
				  </div>
                  	<div class="mb-3">
					<label for="email" class="form-label">Nome de Usuário</label>
					<input type="text" class="form-control" id="nmUsuario" name="nmUsuario">
				  </div>
                    <div class="mb-3">
					<label for="email" class="form-label">Senha</label>
					<input type="password" class="form-control" id="senha" name="senha">
				  </div>
				 <div class="text-center">
				  	<input type="submit" class="btn btn-primary" value="Cadastrar">
					<button type="button" class="btn btn-danger" onclick="javascript:location.href ='menu.php';">Voltar</button>
				</div>
				</form>
			</div>
			<div class="col">
				
			</div>
		</div>
	</div>
    	<script src="index.js"></script>
  </body>
</html>

<?php

	if(!empty($_POST))
	{
		$nome = $_POST['nome'];
		$cpf = $_POST['cpf'];
		$endereco = $_POST['endereco'];
        $perfil = $_POST['perfil'];
		$tel = $_POST['tel'];
		$email = $_POST['email'];
        $login = $_POST['nmUsuario'];
		
		$arquivo = fopen("cadastro/usuarios.txt", "a+")or die("Não foi possivel abrir o arquivo!");
		
		$conteudo = "$nome, $cpf, $endereco, $perfil, $tel, $email, $login,
";

		if(fwrite($arquivo, $conteudo))
		{
			echo "<script>alert('Cadastrado com sucesso');</script>";
			fclose($arquivo);
		}
		else
		{
			echo "<script>alert('Erro ao cadastrar as informações');</script>";
		}
		
		
	}


?>