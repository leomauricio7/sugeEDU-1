<?php
session_start();
include('../clas/conexao.php');
$id = $_GET['id'];
	$sql = mysqli_query($con, "DELETE FROM professor WHERE matricula = '$id' LIMIT 1");
	if($sql == true){
		$_SESSION['ok']= 'Professor (a) removido(a) com sucesso';
		echo '<script>window.location="../index.php?pagina=professor"</script>';
	}else{
		$_SESSION['erro']= 'ERRO_NOT_REMOVE';
		echo '<script>window.location="../index.php?pagina=professor"</script>';
	}
mysqli_close($con);
?>