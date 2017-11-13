<?php
include("../conexao.php");
session_start();
$turma = utf8_decode($_POST['turma']);
$turno = utf8_decode($_POST['turno']);
$periodo = utf8_decode($_POST['periodo']);

$h1 = $_POST['h1']; $s1 = $_POST['s1']; $t1 = $_POST['t1']; $qua1 = $_POST['qua1']; $quin1 = $_POST['quin1']; $sex1 = $_POST['sex1']; 
$h2 = $_POST['h2']; $s2 = $_POST['s2']; $t2 = $_POST['t2']; $qua2 = $_POST['qua2']; $quin2 = $_POST['quin2']; $sex2 = $_POST['sex2']; 
$h3 = $_POST['h3']; $s3 = $_POST['s3']; $t3 = $_POST['t3']; $qua3 = $_POST['qua3']; $quin3 = $_POST['quin3']; $sex3 = $_POST['sex3']; 
$h4 = $_POST['h4']; $s4 = $_POST['s4']; $t4 = $_POST['t4']; $qua4 = $_POST['qua4']; $quin4 = $_POST['quin4']; $sex4 = $_POST['sex4']; 
$h5 = $_POST['h5']; $s5 = $_POST['s5']; $t5 = $_POST['t5']; $qua5 = $_POST['qua5']; $quin5 = $_POST['quin5']; $sex5 = $_POST['sex5'];

$erro = 0;
$msg = '';
if($erro == 1){
	$_SESSION['erro'] = $msg;
	echo '<script> window.location.href="../#ajax/cad-horario.php";</script>';
}else{

$sql = mysqli_query($conn, "INSERT INTO horario( turma, turno, periodo, horario, segunda, terca, quarta, quinta, sexta)
VALUES ('$turma', '$turno', '$periodo','$h1', '$s1', '$t1', '$qua1', '$quin1', '$sex1'),
( '$turma', '$turno', '$periodo', '$h2', '$s2', '$t2', '$qua2', '$quin2', '$sex2'),
( '$turma', '$turno', '$periodo', '$h3', '$s3', '$t3', '$qua3', '$quin4', '$sex3'),
( '$turma', '$turno', '$periodo', '$h4', '$s4', '$t4', '$qua4', '$quin4', '$sex4'),
( '$turma', '$turno', '$periodo', '$h5', '$s5', '$t5', '$qua5', '$quin5', '$sex5')");

if($sql == true){
		$_SESSION['ok'] = 'Horario cadastardo com sucesso.';
		echo '<script> window.location.href="../#ajax/cad-horario.php";</script>';
	}else{
		$_SESSION['erro'] = 'Erro ao cadastra horario.';
		echo '<script> window.location.href="../#ajax/cad-horario.php";</script>';
	}
}

/* echo $turma;

$h1 = $_POST['h1']; $s1 = $_POST['s1']; $t1 = $_POST['t1']; $qua1 = $_POST['qua1']; $quin1 = $_POST['quin1']; $sex1 = $_POST['sex1']; 
$h2 = $_POST['h2']; $s2 = $_POST['s2']; $t2 = $_POST['t2']; $qua2 = $_POST['qua2']; $quin2 = $_POST['quin2']; $sex2 = $_POST['sex2']; 
$h3 = $_POST['h3']; $s3 = $_POST['s3']; $t3 = $_POST['t3']; $qua3 = $_POST['qua3']; $quin3 = $_POST['quin3']; $sex3 = $_POST['sex3']; 
$h4 = $_POST['h4']; $s4 = $_POST['s4']; $t4 = $_POST['t4']; $qua4 = $_POST['qua4']; $quin4 = $_POST['quin4']; $sex4 = $_POST['sex4']; 
$h5 = $_POST['h5']; $s5 = $_POST['s5']; $t5 = $_POST['t5']; $qua5 = $_POST['qua5']; $quin5 = $_POST['quin5']; $sex5 = $_POST['sex5'];
*/
?>
