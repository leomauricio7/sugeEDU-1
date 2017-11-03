<?php
session_start();
include('../clas/conexao.php');
$id = $_GET['id'];
	$sql = mysqli_query($con, "DELETE FROM disciplina WHERE id = '$id' LIMIT 1");
	if($sql == true){
		$_SESSION['ok']= 'Disciplina removida com sucesso';
		echo '<script>window.location="../index.php?pagina=disciplina"</script>';
	}else{
		$_SESSION['erro']= 'ERRO_NOT_REMOVE';
		echo '<script>window.location="../index.php?pagina=disciplina"</script>';
	}
mysqli_close($con);
?>