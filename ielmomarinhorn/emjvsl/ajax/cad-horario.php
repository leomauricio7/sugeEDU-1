<?php include '../conexao.php'; ?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Horário</a></li>
			<li><a href="#">Cadastro Horário</a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-tasks"></i>
					<span>Cadastro de Horário</span>
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
				<form class="form-horizontal" role="form" method="post" action="./includes/cad-horario.php">
					<div class="form-group">
						<label class="col-sm-2 control-label">Turma: </label>
						<div class="col-sm-10">
							<select class="form-control" required name="turma" data-toggle="tooltip" data-placement="bottom" title="Turno">
							<option value="">Selecione</option>
								<?php 
									$sql_turma = mysqli_query($conn, "SELECT * from turma ORDER BY id");
									while($dados_turma = mysqli_fetch_assoc($sql_turma)){
									?>
									<option value="<?php echo $dados_turma['id']; ?>"><?php echo utf8_encode($dados_turma['nome']); ?></option>
								<?php } ?>
							</select>
						</div> 
					</div> 
					
					<div class="form-group">
						<label class="col-sm-2 control-label">Turno: </label>
						<div class="col-sm-2">
							<select class="form-control" required name="turno" data-toggle="tooltip" data-placement="bottom" title="Turno">
							<option value="">Selecione</option>
								<?php 
									$sql_turno = mysqli_query($conn, "SELECT * from turno ORDER BY id");
									while($dados_turno = mysqli_fetch_assoc($sql_turno)){
									?>
									<option value="<?php echo $dados_turno['id']; ?>"><?php echo utf8_encode($dados_turno['turno']); ?></option>
								<?php } ?>
							</select>
						</div>
						<label class="col-sm-2 control-label">Periodo </label>
						<div class="col-sm-4">
							<select class="form-control" required name="periodo" data-toggle="tooltip" data-placement="bottom" title="Periodo">
								<option value="">Selecione</option>
								
								        <option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
										<option value="2020">2020</option>
										<option value="2021">2021</option>
										<option value="2022">2022</option>
							</select>
						</div>
					</div>
					<div class="row">
					<div class="col-md-2">
					<h6 align="center">Horário</h6>
					    <!-- 1° Horario-->
						<div class="form-group">
                          <label for="h1" class="col-sm-1 control-label">1°</label>
                           <div class="col-sm-9"> 
                            <input name="h1" id="h1" type="time" class="form-control" placeholder="" autofocus required />
                          </div>
                        </div><!--Form-Group-->
						<!-- 2° Horario-->
						<div class="form-group">
                          <label for="h2" class="col-sm-1 control-label">2°</label>
                           <div class="col-sm-9"> 
                            <input name="h2" id="h2" type="time" class="form-control" placeholder=""  required />
                          </div>
                        </div><!--Form-Group-->
						<!-- 3° Horario-->
						<div class="form-group">
                          <label for="h3" class="col-sm-1 control-label">3°</label>
                           <div class="col-sm-9"> 
                            <input name="h3" id="h3" type="time" class="form-control" placeholder=""  required />
                          </div>
                        </div><!--Form-Group-->
						<!-- 4° Horario-->
						<div class="form-group">
                          <label for="h4" class="col-sm-1 control-label">4°</label>
                           <div class="col-sm-9"> 
                            <input name="h4" id="h4" type="time" class="form-control" placeholder=""  required />
                          </div>
                        </div><!--Form-Group-->
						<!-- 5° Horario-->
						<div class="form-group">
                          <label for="h5" class="col-sm-1 control-label">5°</label>
                           <div class="col-sm-9"> 
                            <input name="h5" id="h5" type="time" class="form-control" placeholder="" required />
                          </div>
                        </div><!--Form-Group-->
						
					</div>
					
					<div class="col-md-2">
						<h6 align="center">Segunda</h6>
							<!--1° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="s1" id="s1" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
		
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--2° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="s2" id="s2" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--3° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="s3" id="s3" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--4° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="s4" id="s4" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--5° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="s5" id="s5" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
					</div>
					
					<div class="col-md-2">
					
						<h6 align="center">Terça</h6>
							<!--1° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="t1" id="t1" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
		
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--2° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="t2" id="s2" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--3° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="t3" id="t3" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--4° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="t4" id="t4" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--5° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="t5" id="t5" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
					</div>
					
					<div class="col-md-2">
						<h6 align="center">Quarta</h6>
							<!--1° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="qua1" id="qua1" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
		
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--2° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="qua2" id="qua2" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--3° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="qua3" id="qua3" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--4° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="qua4" id="qua4" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--5° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="qua5" id="qua5" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
					
					</div>
					
					<div class="col-md-2">
					<h6 align="center">Quinta</h6>
							<!--1° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="quin1" id="quin1" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
		
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--2° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="quin2" id="quin2" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--3° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="quin3" id="quin3" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--4° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="quin4" id="quin4" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--5° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="quin5" id="quin5" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
					
					</div>
					
					<div class="col-md-2">
					<h6 align="center">Sexta</h6>
							<!--1° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="sex1" id="sex1" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
		
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--2° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="sex2" id="sex2" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--3° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="sex3" id="sex3" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--4° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="sex4" id="sex4" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
							<!--5° horario -->
							<div class="form-group">
										<div class="col-sm-12">
										  <select name="sex5" id="sex5" class="form-control" required>
											<option style="color:#eee; ">Selecione</option>
											<?php 
											$sql_disciplina = mysqli_query($conn, "SELECT * from disciplina ORDER BY id");
											while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
											?>
											<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo utf8_encode($dados_disciplina['nome']); ?></option>
											<?php } ?>
										  </select>
										</div>
							</div><!--Form-Group-->
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
