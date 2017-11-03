<?php
 include '../conexao.php'; 
 $id = $_GET['id'];
 $sql = mysqli_query($conn, "SELECT * FROM turma WHERE id = '$id' LIMIT 1");
 $dados = mysqli_fetch_assoc($sql);

?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Turma</a></li>
			<li><a href="#">Alteração Turma - <?php echo $dados['id']; ?></a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-tasks"></i>
					<span>Alteração Turma - <?php echo $dados['id']; ?></span>
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
				<h4 class="page-header">Dados</h4>
				<form class="form-horizontal" role="form" method="post" action="./includes/edit-turma.php">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nome: </label>
						<div class="col-sm-10">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<input type="text" name="nome" minlength="4" maxlength="20" class="form-control" 
							value="<?php echo utf8_encode($dados['nome']); ?>"
							required placeholder="Digite o nome da turma" data-toggle="tooltip" data-placement="bottom" title="Turma">
						</div> 
					</div> 
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Sala: </label>
						<div class="col-sm-2">
							<input type="text" name="sala" minlength="1" maxlength="4" class="form-control" 
							value="<?php echo $dados['sala']; ?>"
							required placeholder="Informe a sala" data-toggle="tooltip" data-placement="left" title="Sala">
						</div>
						<label class="col-sm-2 control-label">Turno: </label>
						<div class="col-sm-4">
							<select class="form-control" required name="turno" data-toggle="tooltip" data-placement="bottom" title="Turno">
								<option value="">Selecione</option>
								<?php 
									$sql_turno = mysqli_query($conn, "SELECT * from turno ORDER BY id");
									while($dados_turno = mysqli_fetch_assoc($sql_turno)){
										if($dados['turno'] == $dados_turno['id']){
									?>
									<option value="<?php echo $dados_turno['id']; ?>" selected><?php echo utf8_encode($dados_turno['turno']); ?></option>
										<?php }else{ ?>
									<option value="<?php echo $dados_turno['id']; ?>"><?php echo utf8_encode($dados_turno['turno']); ?></option>
									<?php } }?>
							</select>
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
