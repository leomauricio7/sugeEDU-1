<?php include '../conexao.php'; ?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Discente</a></li>
			<li><a href="#">Requerimento de Matrícula</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-tasks"></i>
					<span>Requerimento de Matrícula</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Dados Pessoais</h4>
				<form class="form-horizontal" role="form" method="post">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nome:</label>
						<div class="col-sm-4">
							<input type="text" name="nome_aluno" class="form-control" required placeholder="Digite o nome do aluno" data-toggle="tooltip" data-placement="bottom" title="Nome do aluno">
						</div>
						<label class="col-sm-2 control-label">Foto:</label>
						<div class="col-sm-4">
							<input type="file" name="foto" class="form-control" required data-toggle="tooltip" data-placement="bottom" title="Foto do Perfil">
						</div>
					</div> 
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Pai:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="pai_aluno" required placeholder="Digite o nome do pai" data-toggle="tooltip" data-placement="bottom" title="Nome do pai">
						</div>
						<label class="col-sm-2 control-label">Profissão do Pai:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="profissao_pai" required placeholder="Profissão do Pai" data-toggle="tooltip" data-placement="bottom" title="Profissão do pai">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Mãe:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="mae_aluno" required placeholder="Digite o nome da Mãe" data-toggle="tooltip" data-placement="bottom" title="Nome da mãe">
						</div>
						<label class="col-sm-2 control-label">Profissão da Mãe:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="profissao_mae" required placeholder="Profissão da Mãe" data-toggle="tooltip" data-placement="bottom" title="Profissão da mãe">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Estado:</label>
						<div class="col-sm-4">
								<select class="populate placeholder" name="estado" required id="s2_country" data-toggle="tooltip" data-placement="bottom" title="Estado">
									<option value="">Selecione o Estado</option>
									<?php 
									$sql_estado = mysqli_query($conn, "SELECT * from estados ORDER BY id_estado");
									while($dados_estados = mysqli_fetch_assoc($sql_estado)){
									?>
									<option value="<?php echo $dados_estados['id_estado']; ?>"><?php echo utf8_encode($dados_estados['sigla'].' - '.$dados_estados['nome']); ?></option>
									<?php } ?>
									
								</select>
						</div>
						<label class="col-sm-2 control-label">Cidade:</label>
						<div class="col-sm-4">
							<input type="text" class="form-control" name="cidade_aluno" required placeholder="Cidade" data-toggle="tooltip" data-placement="bottom" title="Cidade">
						</div>
					</div>
					
					<div class="form-group has-feedback">
						<label class="col-sm-2 control-label">Data de Nascimento: </label>
						<div class="col-sm-2">
							<input type="text" id="input_date" class="form-control" name="Data_Nascimento" required placeholder="Data Nascimento" data-toggle="tooltip" data-placement="bottom" title="Data de Nascimento" >
							<span class="fa fa-calendar txt-default form-control-feedback"></span>
						</div>
						<label class="col-sm-2 control-label">Nacionalidade:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="nacionalidade_aluno" required placeholder="Nacionalidade" data-toggle="tooltip" data-placement="bottom" title="Nacionalidade">
						</div>
						<label class="col-sm-2 control-label">Naturalidade:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="naturalidade_aluno" required placeholder="Naturalidade" data-toggle="tooltip" data-placement="bottom" title="Naturalidade">
						</div>
					</div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Cor:</label>
						<div class="col-sm-2">
								<select class="form-control" name="cor" required  data-toggle="tooltip" data-placement="bottom" title="Cor">
									<option value="">Selecione sua cor</option>
									<?php 
									$sql_cor = mysqli_query($conn, "SELECT * from aux_cor ORDER BY id");
									while($dados_cor = mysqli_fetch_assoc($sql_cor)){
									?>
									<option value="<?php echo $dados_cor['id']; ?>"><?php echo utf8_encode($dados_cor['cor']); ?></option>
									<?php } ?>
								</select>
						</div>
						
					<label class="col-sm-2 control-label">Sexo: </label>
					<div class="col-sm-6">
						<?php 
						$sql_sexo = mysqli_query($conn, "SELECT * from aux_sexo ORDER BY id");
						while($dados_sexo = mysqli_fetch_assoc($sql_sexo)){
						?>
						<div class="radio-inline">
							<label>
								<input type="radio" name="sexo" value="<?php echo $dados_sexo['id']; ?>"><?php echo $dados_sexo['sexo']; ?>
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<?php } ?>
						
					</div>
				</div>
				
				<div class="form-group">
						<label class="col-sm-2 control-label">CPF:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="cpf"  placeholder="CPF" data-toggle="tooltip" data-placement="bottom" title="CPF">
						</div>
						<label class="col-sm-2 control-label">RG:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="rg"  placeholder="RG" data-toggle="tooltip" data-placement="bottom" title="RG">
						</div>
						<label class="col-sm-2 control-label">CEP:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="cep" required placeholder="CEP" data-toggle="tooltip" data-placement="bottom" title="CEP">
						</div>
				</div>
				<!-- dados do registro -->
				<h4 class="page-header">Dados  do Registro de Nascimento</h4>
				<div class="form-group">
					<label class=" col-sm-2 control-label"> Nº do Registro</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="n_registro" required placeholder="N° do registro" data-toggle="tooltip" data-placement="bottom" title="Nº do Registro">
					</div>
					<label class=" col-sm-2 control-label"> Nº do Livro</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="n_livro" required placeholder="N° do livro" data-toggle="tooltip" data-placement="bottom" title="Nº do Livro">
					</div>
					<label class=" col-sm-2 control-label"> Folha(s)</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" name="folha" required placeholder="Folha(s)" data-toggle="tooltip" data-placement="bottom" title="Folha(s)">
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-2 control-label">Cartório:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="cartorio" required placeholder="Nome do Cartório" data-toggle="tooltip" data-placement="bottom" title="Nome do Cartório">
					</div>
				</div>
				
				<div class="form-group has-feedback">
						<label class="col-sm-2 control-label">Cidade:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="cidade_cartorio" required placeholder="Cidade" data-toggle="tooltip" data-placement="bottom" title="Cidade">
						</div>
						<label class="col-sm-2 control-label">Estado:</label>
						<div class="col-sm-2">
								<select class="form-control placeholder" name="estado_cartorio" required id="s2_country" data-toggle="tooltip" data-placement="bottom" title="Estado">
									<option value="">Selecione</option>
									<?php 
									$sql_estado = mysqli_query($conn, "SELECT * from estados ORDER BY id_estado");
									while($dados_estados = mysqli_fetch_assoc($sql_estado)){
									?>
									<option value="<?php echo $dados_estados['id_estado']; ?>"><?php echo utf8_encode($dados_estados['sigla'].' - '.$dados_estados['nome']); ?></option>
									<?php } ?>
								</select>
						</div>
						<label class="col-sm-2 control-label">Data: </label>
						<div class="col-sm-2">
							<input type="text" id="input_date" class="form-control" name="data_registro" required placeholder="Data" data-toggle="tooltip" data-placement="bottom" title="Data">
							<span class="fa fa-calendar txt-default form-control-feedback"></span>
						</div>
				</div>
				
				<!-- dados academico -->
				<h4 class="page-header">Dados Acadêmicos</h4>
				<div class="form-group">
					<label class="col-sm-2 control-label">Instituição:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="instituicao" required placeholder="Nome da escola" data-toggle="tooltip" data-placement="bottom" title="Nome da Escola">
					</div>
				</div>
			
				<div class="form-group">
						<label class="col-sm-2 control-label">Ano/Série:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="serie" required placeholder="Ano/Série" data-toggle="tooltip" data-placement="bottom" title="Ano/Série">
						</div>
						<label class="col-sm-2 control-label">Turma:</label>
						<div class="col-sm-2">
							<select class="form-control" name="turma" data-toggle="tooltip" data-placement="bottom" title="Turma">
								<option value="">Selecione</option>
									<?php 
									$sql_turma = mysqli_query($conn, "SELECT * from turma ORDER BY id");
									while($dados_turma = mysqli_fetch_assoc($sql_turma)){
									?>
									<option value="<?php echo $dados_turma['id']; ?>"><?php echo utf8_encode($dados_turma['nome']); ?></option>
								<?php } ?>
							</select>
						</div>
						<label class="col-sm-2 control-label">Turno:</label>
						<div class="col-sm-2">
							<select class="form-control" name="turno" data-toggle="tooltip" data-placement="bottom" title="Turno">
								<option value="">Selecione</option>
									<?php 
									$sql_turno = mysqli_query($conn, "SELECT * from turno ORDER BY id");
									while($dados_turno = mysqli_fetch_assoc($sql_turno)){
									?>
									<option value="<?php echo $dados_turno['id']; ?>"><?php echo utf8_encode($dados_turno['turno']); ?></option>
								<?php } ?>
							</select>
						</div>
				</div>
				<div class="form-group">
					<label class="col-sm-2 control-label">Situação do Aluno: </label>
					<div class="col-sm-10">
							<?php 
								$sql_situacao = mysqli_query($conn, "SELECT * FROM situacao_aluno ORDER BY id");
								while($dados_st = mysqli_fetch_assoc($sql_situacao)){ ?>
							<div class="radio-inline">
							<label>
								<input type="radio" required name="st_aluno" value="<?php echo $dados_st['id']; ?>"> <?php echo utf8_encode($dados_st['situacao']); ?>
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<?php } ?>
					</div>
				</div>
					
				<!-- dados para contato -->
				<h4 class="page-header">Dados para Contato</h4>
				<div class="form-group">
						<label class="col-sm-2 control-label">Telefone Fixo:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="telefone_fixo"  placeholder="Telefone Fixo" data-toggle="tooltip" data-placement="bottom" title="Telefone Fixo">
						</div>
						<label class="col-sm-2 control-label">Telefone celular:</label>
						<div class="col-sm-2">
							<input type="text" class="form-control" name="telefone_celular" required placeholder="Telefone Celular" data-toggle="tooltip" data-placement="bottom" title="Telefone Celular">
						</div>
						<label class="col-sm-1 control-label">E-mail:</label>
						<div class="col-sm-3">
							<input type="email" class="form-control" name="e-mail" required placeholder="e-mail" data-toggle="tooltip" data-placement="bottom" title="E-mail">
						</div>
					</div>
								
				<!-- Botões -->
				<h4 class="page-header"></h4>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-3">
							<button type="cancel" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancelar Requerimento
							</button>
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Confirmar Matrícula
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- fim do formulario -->

<script type="text/javascript">
// Run Select2 plugin on elements
function DemoSelect2(){
	$('#s2_with_tag').select2({placeholder: "Select OS"});
	$('#s2_country').select2();
}
// Run timepicker
function DemoTimePicker(){
	$('#input_time').timepicker({setDate: new Date()});
}
$(document).ready(function() {
	// Create Wysiwig editor for textare
	TinyMCEStart('#wysiwig_simple', null);
	TinyMCEStart('#wysiwig_full', 'extreme');
	// Add slider for change test input length
	FormLayoutExampleInputLength($( ".slider-style" ));
	// Initialize datepicker
	$('#input_date').datepicker({setDate: new Date()});
	// Load Timepicker plugin
	LoadTimePickerScript(DemoTimePicker);
	// Add tooltip to form-controls
	$('.form-control').tooltip();
	LoadSelect2Script(DemoSelect2);
	// Load example of form validation
	LoadBootstrapValidatorScript(DemoFormValidator);
	// Add drag-n-drop feature to boxes
	WinMove();
});
</script>
