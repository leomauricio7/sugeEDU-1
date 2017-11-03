<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="
			fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Turmas</a></li>
			<li><a href="#">Consultar Turmas</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-tasks"></i>
					<span>Turmas Cadastradas</span>
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
			<div class="box-content no-padding">
				<table class="table table-bordered table-striped table-hover table-heading table-datatable" id="datatable-3">
					<thead>
						<tr>
							<th>Código</th>
							<th>Turma</th>
							<th>Turno</th>
							<th>Alunos</th>
							<th>Sala</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						include("../conexao.php");
						$sql = mysqli_query($conn, "SELECT * FROM turma");
						$total = mysqli_num_rows($sql);
					?>
					<?php while($dados =  mysqli_fetch_assoc($sql)){ 
						$id_turno = $dados['turno'];
						$busca_turno = mysqli_query($conn, "SELECT * FROM turno WHERE id = '$id_turno' LIMIT 1");
						$dados_turno = mysqli_fetch_assoc($busca_turno);
						$turno = $dados_turno['turno'];
					?>
						<tr>
							<td><?php echo $dados['id'];?></td>
							<td><?php echo utf8_encode($dados['nome']);?></td>
							<td><?php echo $turno;?></td>
							<td>0</td>
							<td><?php echo $dados['sala'];?></td>
							<td>
								<a class="btn btn-xs btn-info">Visualizar</a>
								<a class="btn btn-xs btn-warning" onclick="history.go(0)" href="#ajax/edit-turma.php?id=<?php echo $dados['id']; ?>">Editar</a>
								<a href="./includes/remove-turma.php?id=<?php echo $dados['id']; ?>" class="btn btn-xs btn-danger">Excluir</a>
							</td>
						</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
// Run Datables plugin and create 3 variants of settings
function AllTables(){
	TestTable1();
	TestTable2();
	TestTable3();
	LoadSelect2Script(MakeSelect2);
}
function MakeSelect2(){
	$('select').select2();
	$('.dataTables_filter').each(function(){
		$(this).find('label input[type=text]').attr('placeholder', 'Search');
	});
}
$(document).ready(function() {
	// Load Datatables and run plugin on tables 
	LoadDataTablesScripts(AllTables);
	// Add Drag-n-Drop feature
	WinMove();
});
</script>
