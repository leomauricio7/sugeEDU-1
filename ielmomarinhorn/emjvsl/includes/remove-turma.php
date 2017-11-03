<?php
include("../conexao.php");
session_start();
$id = $_GET['id'];
	$sql = mysqli_query($conn, "DELETE FROM turma WHERE id = '$id' LIMIT 1");
	if($sql == true){
		$_SESSION['ok'] = 'Turma removida com sucesso.';
		echo '<script> window.location.href="../#ajax/list-turmas.php";</script>';
	}else{
		$_SESSION['erro'] = 'Erro ao remover turma.';
		echo '<script> window.location.href="../#ajax/list-turmas.php";</script>';
	}
?>