<?php
session_start();
include('../clas/conexao.php');
$matricula = '1'.date('Y').rand();
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$senha = substr($cpf,-4);
$rg = $_POST['rg'];
$data_nascimento = $_POST['data_nascimento'];
$cep = $_POST['cep'];
$sexo = $_POST['sexo'];
$cor = $_POST['cor'];
$disciplina = $_POST['disciplina'];
$turno = $_POST['turno'];
$celular = $_POST['celular'];
$fixo = $_POST['fixo'];
$email = $_POST['email'];
$data_cadastro = date('Y/m/d');
$consulta_matricula = mysqli_query($con, "SELECT * FROM professor WHERE matricula = '$matricula'");
$total_matricula = mysqli_num_rows($consulta_matricula);
if($total_matricula >= 1){
	$_SESSION['erro']= 'ERRO_CREAT_MAT';
	echo '<script>window.location="../index.php?pagina=professor"</script>';
}else{
$arquivo = $_FILES['foto']['name'];
$caminho = '../documentos/img/professor/';
if (!file_exists($caminho)) {
	mkdir($caminho, 0777, true) or die("Erro ao criar pastas");
}
if ($_FILES) { // Verificando se existe o envio de arquivos.
	if (!empty($_FILES['foto']['name'])) { // Verifica se o campo não está vazio.
			$dir = $caminho; // Diretório que vai receber o arquivo.
			$tmpName = $_FILES['foto']['tmp_name']; // Recebe o arquivo temporário.
			$name = $_FILES['foto']['name'];// Recebe o nome do arquivo.
			preg_match_all('/\.[a-zA-Z0-9]+/', $name, $extensao);
				if (!in_array(strtolower(current(end($extensao))), array('.png','.jpg'))) {
					$_SESSION['erro'] = "Permitido apenas imagens no formato .jpg .png";
					echo '<script>location.href="../index.php?pagina=professor"</script>';
					die;
				}else{
					if (move_uploaded_file($tmpName, $dir.$name)) {					
						$sql = mysqli_query($con, "INSERT INTO professor
						(matricula, senha, foto, nome, sexo, cor, cpf, rg, cep, id_disciplina, id_turno, data_nascimento, telefone_celular, telefone_fixo, email, data_cadastro)
						VALUES ('$matricula','$senha','$arquivo','$nome','$sexo','$cor','$cpf','$rg','$cep','$disciplina','$turno','$data_nascimento','$celular','$fixo','$email','$data_cadastro')");
						if($sql == true){
							$_SESSION['ok']= 'Professor cadastrado com sucesso';
							echo '<script>window.location="../index.php?pagina=professor"</script>';
						}else{
							$_SESSION['erro']= 'ERRO_NOT_SEND';
							echo '<script>window.location="../index.php?pagina=professor"</script>';
						}
					}
				}
			}else{
				$sql = mysqli_query($con, "INSERT INTO professor (matricula, senha, foto, nome, sexo, cor, cpf, rg, cep, id_disciplina, id_turno, data_nascimento, telefone_celular, telefone_fixo, email, data_cadastro) VALUES ('$matricula','$senha','nenhum arquivo','$nome','$sexo','$cor','$cpf','$rg','$cep','$disciplina','$turno','$data_nascimento','$celular','$fixo','$email','$data_cadastro')");
					if($sql == true){
						$_SESSION['ok']= 'Professor cadastrado com sucesso';
						echo '<script>window.location="../index.php?pagina=professor"</script>';
					}else{
						$_SESSION['erro']= 'ERRO_NOT_SEND';
						echo '<script>window.location="../index.php?pagina=professor"</script>';
					}
			}
		}
	}
mysqli_close($con);
?>