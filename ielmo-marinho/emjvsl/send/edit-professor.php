<?php
session_start();
include('../clas/conexao.php');
$matricula = $_POST['id'];
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
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
$arquivo = $_FILES['foto']['name'];
$caminho = '../documentos/img/professor/';
	if (!file_exists($caminho)) {
		mkdir($caminho, 0777, true) or die("Erro ao criar pastas");
	}
	if(!empty($_FILES['foto']['name'])) { // Verifica se o campo não está vazio.
			$dir = $caminho; // Diretório que vai receber o arquivo.
			$tmpName = $_FILES['foto']['tmp_name']; // Recebe o arquivo temporário.
			$name = $_FILES['foto']['name'];// Recebe o nome do arquivo.
			preg_match_all('/\.[a-zA-Z0-9]+/', $name, $extensao);
				if (!in_array(strtolower(current(end($extensao))), array('.png','.jpg'))) {
					$_SESSION['erro'] = "Permitido apenas imagens no formato .jpg .png";
					echo '<script>location.href="../index.php?pagina=professor&edit='.$matricula.'"</script>';
					die;
				}else{
					if (move_uploaded_file($tmpName, $dir.$name)) {					
						$sql = mysqli_query($con, "UPDATE professor SET foto='$arquivo', nome='$nome', sexo='$sexo', cor='$cor', cpf='$cpf', rg='$rg', cep='$cep', id_disciplina='$disciplina', id_turno='$turno', data_nascimento='$data_nascimento', telefone_celular='$celular', telefone_fixo='$fixo', email='$email' WHERE matricula='$matricula' LIMIT 1");
						if($sql == true){
							$_SESSION['ok']= 'Alterações salvas com sucesso';
							echo '<script>window.location="../index.php?pagina=professor"</script>';
						}else{
							$_SESSION['erro']= 'ERRO_NOT_EDIT';
							echo '<script>window.location="../index.php?pagina=professor&edit='.$matricula.'"</script>';
						}
					}
				}
			}else{
				$sql = mysqli_query($con, "UPDATE professor SET nome='$nome', sexo='$sexo', cor='$cor', cpf='$cpf', rg='$rg', cep='$cep', id_disciplina='$disciplina', id_turno='$turno', data_nascimento='$data_nascimento', telefone_celular='$celular', telefone_fixo='$fixo', email='$email' WHERE matricula='$matricula' LIMIT 1");
					if($sql == true){
						$_SESSION['ok']= 'Alterações salvas com sucesso';
						echo '<script>window.location="../index.php?pagina=professor"</script>';
					}else{
						$_SESSION['erro']= 'ERRO_NOT_EDIT';
						echo '<script>window.location="../index.php?pagina=professor&edit='.$matricula.'"</script>';
					}
			}
mysqli_close($con);
?>