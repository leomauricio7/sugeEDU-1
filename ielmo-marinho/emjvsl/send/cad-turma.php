<?php
session_start();
include('../clas/conexao.php');
$id = rand();
$nome = $_POST['nome'];
$turno = $_POST['turno'];
$sala = $_POST['sala'];
$consulta_id = mysqli_query($con, "SELECT * FROM turma WHERE id = '$id'");
$total_id = mysqli_num_rows($consulta_id);
if($total_id >= 1){
	$_SESSION['erro']= 'ERRO_CREAT_ID';
	echo '<script>window.location="../index.php?pagina=turma"</script>';
}else{
	$sql = mysqli_query($con, "INSERT INTO turma (id,nome,turno,sala) VALUES ('$id','$nome','$turno','$sala')");
	if($sql == true){
		$_SESSION['ok']= 'Turma cadastrada com sucesso';
		echo '<script>window.location="../index.php?pagina=turma"</script>';
	}else{
		$_SESSION['erro']= 'ERRO_NOT_SEND';
		echo '<script>window.location="../index.php?pagina=turma"</script>';
	}
}
mysqli_close($con);
?>