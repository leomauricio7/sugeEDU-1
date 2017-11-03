<?php
session_start();
include('../clas/conexao.php');
$nome = $_POST['nome'];
	$sql = mysqli_query($con, "INSERT INTO disciplina (nome) VALUES ('$nome')");
	if($sql == true){
		$_SESSION['ok']= 'Disciplina cadastrada com sucesso';
		echo '<script>window.location="../index.php?pagina=disciplina"</script>';
	}else{
		$_SESSION['erro']= 'ERRO_NOT_SEND';
		echo '<script>window.location="../index.php?pagina=disciplina"</script>';
	}
mysqli_close($con);
?>