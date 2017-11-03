<?php

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

include "conexao.php";//inclui a conexao com o banco

$sql = mysqli_query($conn, "SELECT * FROM usuario WHERE login = '$usuario' LIMIT 1");//faz a pesquisa no banco
$dados = mysqli_num_rows($sql);//verica se houve algum registro inserido
//echo $dados['nome'];pega o resgistro e exibir na tela 


if($dados == 0) {//se não houver registros	
		$msg = " Usuário e senha inválidos";
		$_SESSION['erro'] = $msg;//criando uma sessão
		header("Location: ../../index.php");//redireciona para a apagina do site	

	}else{
		//se houver regitros mas a senha incorreta		
	$dados = mysqli_fetch_array($sql);
	$senha_banco = $dados["senha"]; 
	 
	 if($senha != $senha_banco){//Confere a Senha	
		$msg = " Senha incorreta";
		$_SESSION['erro'] = $msg;//criando uma sessão
		header("Location: ../../index.php");
		
	}else{
		$status = $dados["situacao"];
		if($status == 1){
			//se o nome e a senha estiver corretos criar as  sessões
				$tipo = utf8_encode($dados["tipo"]);
				$nome = utf8_encode($dados["nome"]);
				//criando sessões
				$_SESSION['tipo']=$tipo;
				$_SESSION['nome_usuario']=$nome;
				$num =  rand(100000,900000);
				$_SESSION['num_usuario']=$num;
				
				//verifica o tipo de usuario e depois redireciona
				if($tipo == "1"){
					//administrador		
					echo '<script>location.href="../"</script>';
				}elseif($tipo == "2"){
					//controlador										
					echo '<script>location.href="../"</script>';
					}
				}else{
					$msg = " Usuário Desativado";
					$_SESSION['erro'] = $msg;//criando uma sessão
					echo '<script>location.href="../../"</script>';					
				}
			}
		}
				
	mysqli_close($conn);//fecha a conexão
?>			