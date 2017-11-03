<?php
include("../conexao.php");
session_start();
$nome = utf8_decode($_POST['nome']);
$sala = $_POST['sala'];
$turno = $_POST['turno'];
$codigo_turma = $_POST['id'];
$erro = 0;
$msg = '';
if(!is_numeric($sala)){
	$msg =  'o campo sala so deve conter números.';
	$erro = 1;
}
if($erro == 1){
	$_SESSION['erro'] = $msg;
	echo '<script> window.location.href="../#ajax/edit-turma.php?id='.$codigo_turma.'";</script>';
}else{
	$sql = mysqli_query($conn, "UPDATE turma SET nome = '$nome', turno = '$turno' WHERE id = '$codigo_turma' LIMIT 1");
	if($sql == true){
		$_SESSION['ok'] = 'Alterações efetuadas com sucesso.';
		echo '<script> window.location.href="../#ajax/list-turmas.php";</script>';
	}else{
		$_SESSION['erro'] = 'Erro ao efetuar as alterações .';
		echo '<script> window.location.href="../#ajax/edit-turma.php?id='.$codigo_turma.'";</script>';
	}
}
?>