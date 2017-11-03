<?php
session_start();
include('../clas/conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$sala = $_POST['sala'];
	$sql = mysqli_query($con, "UPDATE turma SET nome='$nome',turno='$turno',sala='$sala' WHERE id = '$id' LIMIT 1");
	if($sql == true){
		$_SESSION['ok']= 'Alterações salvas com sucesso';
		echo '<script>window.location="../index.php?pagina=turma"</script>';
	}else{
		$_SESSION['erro']= 'ERRO_NOT_EDIT';
		echo '<script>window.location="../index.php?pagina=turma&edit='.$id.'"</script>';
	}
mysqli_close($con);
?>