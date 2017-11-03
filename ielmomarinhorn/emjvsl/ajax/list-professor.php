<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<a href="#" class="show-sidebar">
			<i class="fa fa-bars"></i>
		</a>
		<ol class="breadcrumb pull-left">
			<li><a href="index.php">Home</a></li>
			<li><a href="#">Docentes</a></li>
			<li><a href="#">Consultar Professores</a></li>
		</ol>
	</div>
</div>

<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-tasks"></i>
					<span>Professores Cadastrados</span>
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
							<th>Matrícula</th>
							<th>Nome</th>
							<th>Disciplina</th>
							<th>Turno</th>
							<th>Situacao</th>
							<th>Opções</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>20141174010675</td>
							<td>Leonardo Maurício</td>
							<td>Matemática</td>
							<td>Matutino</td>
							<td>ativo</td>
							<td>
								<button class="btn btn-xs btn-info">Visualizar</button>
								<button class="btn btn-xs btn-warning">Editar</button>
								<button class="btn btn-xs btn-danger">Excluir</button>
							</td>
						</tr>
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
