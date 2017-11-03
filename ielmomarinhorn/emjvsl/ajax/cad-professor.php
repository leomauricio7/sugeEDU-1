<?php include '../conexao.php'; ?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Docente</a></li>
			<li><a href="#">Cadastro Professor(a)</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-tasks"></i>
					<span>Cadastro de Professor(a)</span>
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
				<form class="form-horizontal" role="form" method="post" action="./includes/cad-professor.php">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nome:</label>
						<div class="col-sm-4">
							<input type="text" name="nome" class="form-control" placeholder="Digite o nome do professor(a)" data-toggle="tooltip" data-placement="bottom" title="Nome do professor">
						</div>
						<label class="col-sm-2 control-label">Foto:</label>
						<div class="col-sm-4">
							<input type="file" name="foto" class="form-control" data-toggle="tooltip" data-placement="bottom" title="Foto do Perfil">
						</div>
					</div> 
					
					<div class="form-group has-feedback">
						<label class="col-sm-2 control-label">Data de Nascimento: </label>
						<div class="col-sm-4">
							<input type="text" id="input_date" class="form-control" name="data_nascimento" required placeholder="Data Nascimento" data-toggle="tooltip" data-placement="bottom" title="Data de Nascimento" >
							<span class="fa fa-calendar txt-default form-control-feedback"></span>
						</div>
						
						<label class="col-sm-2 control-label">Cor:</label>
						<div class="col-sm-4">
								<select class="form-control" name="cor" required " data-toggle="tooltip" data-placement="bottom" title="Cor">
									<option value="">Selecione sua cor</option>
									<?php 
									$sql_cor = mysqli_query($conn, "SELECT * from aux_cor ORDER BY id");
									while($dados_cor = mysqli_fetch_assoc($sql_cor)){
									?>
									<option value="<?php echo $dados_cor['id']; ?>"><?php echo utf8_encode($dados_cor['cor']); ?></option>
									<?php } ?>
								</select>
						</div>
					</div>
					
					<div class="form-group">
						
						
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
				
				<!-- dados academico -->
				<h4 class="page-header">Dados Acadêmicos</h4>
				<div class="form-group">
					<label class="col-sm-2 control-label">Instituição:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" disabled="disabled" name="instituicao"  placeholder="Nome da escola" value="Escola Municipal João Vitor da Silva Lima" data-toggle="tooltip" data-placement="bottom" title="Nome da Escola">
					</div>
				</div>
			
				<div class="form-group">
				
						<label class="col-sm-2 control-label">Disciplina:</label>
						<div class="col-sm-4">
							<select class="form-control" name="disciplina" data-toggle="tooltip" data-placement="bottom" title="Disciplina">
								<option value="">Selecione</option>
								<?php 
									$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
									while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
									?>
									<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
									<?php } ?>
							</select>
						</div>
						<label class="col-sm-2 control-label">Turno:</label>
						<div class="col-sm-4">
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
							<input type="email" class="form-control" name="email" required placeholder="e-mail" data-toggle="tooltip" data-placement="bottom" title="E-mail">
						</div>
					</div>
								
				<!-- Botões -->
				<h4 class="page-header"></h4>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-3">
							<button type="cancel" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancelar Cadastro
							</button>
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Confirmar Cadastro
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
