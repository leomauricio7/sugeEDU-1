<?php
include("../conexao.php");
session_start();
$id = $_GET['id'];
	$sql = mysqli_query($conn, "DELETE FROM disciplina WHERE id = '$id' LIMIT 1");
	if($sql == true){
		$_SESSION['ok'] = 'Disciplina removida com sucesso.';
		echo '<script> window.location.href="../#ajax/list-disciplinas.php";</script>';
	}else{
		$_SESSION['erro'] = 'Erro ao remover disciplina.';
		echo '<script> window.location.href="../#ajax/list-disciplinas.php";</script>';
	}
?>