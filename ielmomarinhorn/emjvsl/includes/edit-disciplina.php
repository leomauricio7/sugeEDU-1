<?php
include("../conexao.php");
session_start();
$nome = utf8_decode($_POST['nome']);
$id = $_POST['id'];
$erro = 0;
$msg = '';
if(is_numeric($nome)){
	$msg =  'o campo nome não deve conter números.';
	$erro = 1;
}
if($erro == 1){
	$_SESSION['erro'] = $msg;
	echo '<script> window.location.href="../#ajax/edit-disciplina.php?id='.$id.'";</script>';
}else{
	$sql = mysqli_query($conn, "UPDATE disciplina SET nome = '$nome' WHERE id = '$id' LIMIT 1");
	if($sql == true){
		$_SESSION['ok'] = 'Alterações efetuadas com sucesso.';
		echo '<script> window.location.href="../#ajax/list-disciplinas.php";</script>';
	}else{
		$_SESSION['erro'] = 'Erro ao efetuar alterações.';
		echo '<script> window.location.href="../#ajax/edit-disciplina.php?id='.$id.'";</script>';
	}
}
?>