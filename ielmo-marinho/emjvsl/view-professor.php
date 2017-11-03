<div class="row">
	<?php  
		$id = $_GET['id'];
		$consulta_professor = mysqli_query($con, "SELECT * FROM professor WHERE matricula = '$id' LIMIT 1");
		$dados = mysqli_fetch_assoc($consulta_professor);
		$id_disciplina = $dados['id_disciplina'];
		$consulta_disciplina = mysqli_query($con, "SELECT * FROM disciplina WHERE id = '$id_disciplina' LIMIT 1");
		$result_disciplina = mysqli_fetch_assoc($consulta_disciplina);
		$disciplina = $result_disciplina['nome'];
		$id_turno = $dados['id_turno'];
		$consulta_turno = mysqli_query($con, "SELECT * FROM turno WHERE id = '$id_turno' LIMIT 1");
		$result_turno = mysqli_fetch_assoc($consulta_turno);
		$turno = $result_turno['turno'];
		$id_cor = $dados['cor'];
		$consulta_cor = mysqli_query($con, "SELECT * FROM aux_cor WHERE id = '$id_cor' LIMIT 1");
		$result_cor = mysqli_fetch_assoc($consulta_cor);
		$cor = $result_cor['cor'];
		$id_sexo = $dados['sexo'];
		$consulta_sexo = mysqli_query($con, "SELECT * FROM aux_sexo WHERE id = '$id_sexo' LIMIT 1");
		$result_sexo = mysqli_fetch_assoc($consulta_sexo);
		$sexo = $result_sexo['sexo'];
	?>
	<div class="col-md-4">
		<img src="./documentos/img/professor/pp.jpg" class="img-responsive center-block img-circle" width="200">
	</div>
	<div class="col-md-8">
		<div class="col-md-8"></div>
		<div class="col-md-4">
			<a href="#" class="btn btn-primary"><i class="fa fa-file-pdf-o"></i> Emitir Declaração de Vinculo</a><hr>
		</div>
		<div class="col-md-6 alert alert-cinza" role="alert"><strong>Matrícula:</strong> <?php echo $dados['matricula']; ?></div>
		<div class="col-md-6 alert alert-cinza" role="alert"><strong>Nome:</strong> <?php echo $dados['nome']; ?></div>
		<div class="col-md-6 alert alert-branco" role="alert"><strong>CPF:</strong> <?php echo $dados['cpf']; ?></div>
		<div class="col-md-6 alert alert-branco" role="alert"><strong>RG:</strong> <?php echo $dados['rg']; ?></div>
		<div class="col-md-6 alert alert-cinza" role="alert"><strong>Data de Nascimento:</strong> <?php echo inverteData($dados['data_nascimento']); ?></div>
		<div class="col-md-6 alert alert-cinza" role="alert"><strong>CEP:</strong> <?php echo $dados['cep']; ?></div>
		<div class="col-md-6 alert alert-branco" role="alert"><strong>Sexo:</strong> <?php echo $sexo; ?></div>
		<div class="col-md-6 alert alert-branco" role="alert"><strong>Cor:</strong> <?php echo $cor; ?></div>
		<div class="col-md-6 alert alert-cinza" role="alert"><strong>Disciplina:</strong> <?php echo $disciplina; ?></div>
		<div class="col-md-6 alert alert-cinza" role="alert"><strong>Turno:</strong> <?php echo $turno; ?></div>
		<div class="col-md-6 alert alert-branco" role="alert"><strong>Telefone Celular:</strong> <?php echo $dados['telefone_celular']; ?></div>
		<div class="col-md-6 alert alert-branco" role="alert"><strong>Telefone Fixo:</strong> <?php echo $dados['telefone_fixo']; ?></div>
		<div class="col-md-6 alert alert-cinza" role="alert"><strong>E-mail:</strong> <?php echo $dados['email']; ?></div>
		<div class="col-md-6 alert alert-cinza" role="alert"><strong>Data do cadastro:</strong> <?php echo inverteData($dados['data_cadastro']); ?></div>
	</div>
</div>