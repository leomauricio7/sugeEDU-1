<?php
include("../conexao.php");
session_start();
$nome = utf8_decode($_POST['nome']);
$erro = 0;
$msg = '';
if(is_numeric($nome)){
	$msg =  'o campo nome não deve conter números.';
	$erro = 1;
}
if($erro == 1){
	$_SESSION['erro'] = $msg;
	echo '<script> window.location.href="../#ajax/cad-disciplina.php";</script>';
}else{
	$sql = mysqli_query($conn, "INSERT INTO disciplina (nome) VALUES ('$nome')");
	if($sql == true){
		$_SESSION['ok'] = 'Disciplina inserida com sucesso.';
		echo '<script> window.location.href="../#ajax/cad-disciplina.php";</script>';
	}else{
		$_SESSION['erro'] = 'Erro ao inserir disciplina.';
		echo '<script> window.location.href="../#ajax/cad-disciplina.php";</script>';
	}
}
?>