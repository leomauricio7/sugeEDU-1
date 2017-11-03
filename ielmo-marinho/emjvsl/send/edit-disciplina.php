<?php
session_start();
include('../clas/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
	$sql = mysqli_query($con, "UPDATE disciplina SET nome='$nome' WHERE id = '$id' LIMIT 1");
	if($sql == true){
		$_SESSION['ok']= 'Alterações salvas com sucesso';
		echo '<script>window.location="../index.php?pagina=disciplina"</script>';
	}else{
		$_SESSION['erro']= 'ERRO_NOT_EDIT';
		echo '<script>window.location="../index.php?pagina=disciplina&edit='.$id.'"</script>';
	}
mysqli_close($con);
?>