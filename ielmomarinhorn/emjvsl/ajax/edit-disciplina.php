<?php 
include '../conexao.php'; 
$id  = $_GET['id'];
$sql = mysqli_query($conn, "SELECT * FROM disciplina WHERE id ='$id' LIMIT 1");
$dados = mysqli_fetch_assoc($sql);
?>
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Disciplina</a></li>
			<li><a href="#">Alteração Disciplina - 00<?php echo $dados['id']; ?></a></li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-tasks"></i>
					<span>Alteração Disciplina</span>
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
				<form class="form-horizontal" role="form" method="post" action="./includes/edit-disciplina.php">
					<div class="form-group">
						<label class="col-sm-2 control-label">Nome da Disciplina:</label>
						<div class="col-sm-8">
							<input type="hidden" name="id" value="<?php echo $id; ?>">
							<input type="text" name="nome" minlength="4" maxlength="50" class="form-control"
							value="<?php echo utf8_encode($dados['nome']); ?>"
							required placeholder="Digite o nome da disciplina" data-toggle="tooltip" data-placement="bottom" title="disciplina">
						</div> 
					</div> 
				<!-- Botões -->
				<h4 class="page-header"></h4>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-3">
							<button type="cancel" type="resert" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o txt-danger"></i></span>
								Cancelar Alteração
							</button>
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Confirmar Alteração
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- fim do formulario -->
