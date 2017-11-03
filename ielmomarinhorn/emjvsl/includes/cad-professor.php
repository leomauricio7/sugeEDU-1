<?php
include("../conexao.php");
session_start();
$matricula = date('Y').rand();
$nome = utf8_decode($_POST['nome']);
$foto = '';
$data_nascimento = utf8_decode($_POST['data_nascimento']);
$cor = utf8_decode($_POST['cor']);
$sexo = utf8_decode($_POST['sexo']);
$cpf = $_POST['cpf'];
$rg = $_POST['rg'];
$cep = utf8_decode($_POST['cep']);
$disciplina = $_POST['disciplina'];
$turno = $_POST['turno'];
$telefone_fixo = $_POST['telefone_fixo'];
$telefone_celular = $_POST['telefone_celular'];
$email = $_POST['email'];
$dt_c = date('Y/m/d H:i');
/*echo 'Matricula: '.$matricula.'<br>';
echo 'Nome: '.$nome.'<br>';
echo 'Data: '.$data_nascimento.'<br>';
echo 'Cor: '.$cor.'<br>';
echo 'Sexo: '.$sexo.'<br>';
echo 'Cpf: '.$cpf.'<br>';
echo 'Rg: '.$rg.'<br>';
echo 'Cep: '.$cep.'<br>';
echo 'Disciplina: '.$disciplina.'<br>';
echo 'Turno: '.$turno.'<br>';
echo 'T - Fixo: '.$telefone_fixo.'<br>';
echo 'T - celular: '.$telefone_celular.'<br>';
echo 'E-mail: '.$email.'<br>';
echo 'Data Cadastro: '.$dt_c;*/

$erro = 0;
$msg = '';
if(is_numeric($nome)){
	$msg =  'o campo nome não deve conter números.';
	$erro = 1;
}
if($erro == 1){
	$_SESSION['erro'] = $msg;
	echo '<script> window.location.href="../#ajax/cad-professor.php";</script>';
}else{
	$sql = mysqli_query($conn, "INSERT INTO professor (matricula, nome, sexo, cor, cpf, rg, cep, id_disciplina, id_turno, data_nascimento, telefone_celular, telefone_fixo, email, data_cadastro)
	VALUES ('$matricula', '$nome', '$sexo', '$cor', '$cpf', '$rg', '$cep', '$disciplina', '$turno', '$data_nascimento', '$telefone_celular', '$telefone_fixo', '$email', '$dt_c')");
	if($sql == true){
		$_SESSION['ok'] = 'Professor cadastardo com sucesso.';
		echo '<script> window.location.href="../#ajax/cad-professor.php";</script>';
	}else{
		$_SESSION['erro'] = 'Erro ao cadastra professor.';
		echo '<script> window.location.href="../#ajax/cad-professor.php";</script>';
	}
}
?>