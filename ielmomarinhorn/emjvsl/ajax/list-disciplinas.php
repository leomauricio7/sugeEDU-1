<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Disciplina</a></li>
			<li><a href="#">Consultar Disciplinas</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-tasks"></i>
					<span>Disciplinas Cadastradas</span>
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
							<th>ID</th>
							<th>Disciplina</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
					<?php 
						include("../conexao.php");
						$sql = mysqli_query($conn, "SELECT * FROM disciplina");
						$total = mysqli_num_rows($sql);
					
						while($dados =  mysqli_fetch_assoc($sql)){ ?> 
						<tr>
							<td>00<?php echo $dados['id'];?></td>
							<td><?php echo utf8_encode($dados['nome']); ?></td>
							<td>
								<button class="btn btn-xs btn-info">Visualizar</button>
								<a class="btn btn-xs btn-warning" onclick="history.go(0)" href="#ajax/edit-disciplina.php?id=<?php echo $dados['id']; ?>">Editar</a>
								<a href="./includes/remove-disciplina.php?id=<?php echo $dados['id']; ?>" class="btn btn-xs btn-danger">Excluir</a>
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
