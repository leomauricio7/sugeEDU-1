<div class="row">
	<div class="col-md-4">
	<?php if(!isset($_GET['edit'])){?>
		<form class="form-horizontal" name="form" method="post" action="send/cad-disciplina.php">
			<fieldset>
				<legend>Cadastro Disciplina</legend>
				<div class="form-group">
					<label>Nome </label>
					<input type="text" name="nome" class="form-control" autofocus required/>
				</div>
				<div class="form-group">
					<button class="btn btn-primary"><i class="fa fa-save"></i> Cadastrar Disciplina</button>
				</div>
				</fieldset>
			</form>
			<?php }else{ 
			$id = $_GET['edit'];
			$consulta_disciplina = mysqli_query($con, "SELECT * FROM disciplina WHERE id = '$id' LIMIT 1");
			$dados_edit = mysqli_fetch_assoc($consulta_disciplina);
			?>
			<form class="form-horizontal" name="form" method="post" action="send/edit-disciplina.php">
				<fieldset>
				<legend><?php echo $dados_edit['nome'].' - '.$dados_edit['id'];?> </legend>
				<div class="form-group">
					<label>Nome </label>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<input type="text" name="nome" value="<?php echo $dados_edit['nome']; ?>" class="form-control" autofocus required/>
				</div>
				<div class="form-group">
					<button class="btn btn-warning"><i class="fa fa-save"></i> Salvar Alterações</button>
				</div>
			</fieldset>
		</form>
			<?php } ?>
	</div>
	<div class="col-md-8">
		<fieldset>
			<legend class="col-md-9">Disciplinas Cadastradas</legend>
			<div class="col-md-3 btn-group">
			<button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa fa-tasks"></i> Exportar <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu">
				<li><a href="#" onClick ="$('#table').tableExport({type:'excel',escape:'false'});"><i class="fa fa-file-excel-o"></i> XLS</a></li>
				<li><a href="#" onClick ="$('#table').tableExport({type:'doc',escape:'false'});"><i class="fa fa-file-word-o"></i> WORD</a></li>
				<li><a href="#" onClick ="$('#table').tableExport({type:'pdf',escape:'false'});"><i class="fa fa-file-pdf-o"></i> PDF</a></li>
			  </ul>
			</div>
			<div class="col-md-12 table-responsive">
               <table id="table" class="table table-hover table-striped">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Disciplina</th>
                          <th></th>
                        </tr>
                  </thead>
                  <tbody>                 						
         				<?php 
						$sql_disciplina = mysqli_query($con, "SELECT * FROM disciplina ORDER BY id DESC");
						while($dados = mysqli_fetch_assoc($sql_disciplina)){ ?>
						<tr>
            				<td><?php echo $dados["id"]; ?></td>
            				<td><?php echo $dados["nome"]; ?></td>
							<td>  
								<a href="index.php?pagina=disciplina&edit=<?php echo $dados['id']; ?>" class="btn btn-xs btn-info" title="Editar">
									<i class="fa fa-edit"></i> Editar
								</a>
								<a href="send/remove-disciplina.php?id=<?php echo $dados['id'];?>" class="btn btn-xs btn-danger" title="Excluir">
									<i class="fa fa-trash"></i> Excluir 
								</a>
                            </td>
            			</tr>	
						<?php } ?>
            		</tbody>			  
				</table>
			</div><!-- /.table-resposive -->
		</fieldset>
	</div>
</div>