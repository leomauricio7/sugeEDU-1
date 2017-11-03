<?php
session_start();
include('../clas/conexao.php');
$id = $_GET['id'];
	$sql = mysqli_query($con, "DELETE FROM turma WHERE id = '$id' LIMIT 1");
	if($sql == true){
		$_SESSION['ok']= 'Turma removida com sucesso';
		echo '<script>window.location="../index.php?pagina=turma"</script>';
	}else{
		$_SESSION['erro']= 'ERRO_NOT_REMOVE';
		echo '<script>window.location="../index.php?pagina=turma"</script>';
	}
mysqli_close($con);
?>