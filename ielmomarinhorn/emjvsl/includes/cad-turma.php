<?php
include("../conexao.php");
session_start();
$nome = utf8_decode($_POST['nome']);
$sala = $_POST['sala'];
$turno = $_POST['turno'];
$codigo_turma = date('Y').rand();
$erro = 0;
$msg = '';
if(!is_numeric($sala)){
	$msg =  'o campo sala so deve conter números.';
	$erro = 1;
}
if($erro == 1){
	$_SESSION['erro'] = $msg;
	echo '<script> window.location.href="../#ajax/cad-turma.php";</script>';
}else{
	$sql = mysqli_query($conn, "INSERT INTO turma (id, nome, turno, sala) VALUES ('$codigo_turma','$nome','$turno','$sala')");
	if($sql == true){
		$_SESSION['ok'] = 'Turma inserida com sucesso.';
		echo '<script> window.location.href="../#ajax/cad-turma.php";</script>';
	}else{
		$_SESSION['erro'] = 'Erro ao inserir turma.';
		echo '<script> window.location.href="../#ajax/cad-turma.php";</script>';
	}
}
?>