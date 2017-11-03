<div class="row">
	<div class="col-md-4">
	<?php if(!isset($_GET['edit'])){?>
		<form class="form-horizontal" name="form" method="post" action="send/cad-turma.php">
			<fieldset>
				<legend>Cadastro Turma</legend>
				<div class="form-group">
					<label>Nome </label>
					<input type="text" name="nome" class="form-control" autofocus required/>
				</div>
				<div class="form-group">
					<label>Turno </label>
					<select name="turno" class="form-control" required>
						<option value="">Selecione</option>
						<?php $sql_turno = mysqli_query($con, "SELECT * FROM turno"); 
							while($dados_turno = mysqli_fetch_assoc($sql_turno)){?>
						<option value="<?php echo $dados_turno['id']; ?>"><?php echo $dados_turno['turno']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Sala </label>
					<input type="text" name="sala" class="form-control" autofocus required/>
				</div>
				<div class="form-group">
					<button class="btn btn-primary"><i class="fa fa-save"></i> Cadastrar Turma</button>
				</div>
				</fieldset>
			</form>
			<?php }else{ 
			$id = $_GET['edit'];
			$consulta_turma = mysqli_query($con, "SELECT * FROM turma WHERE id = '$id' LIMIT 1");
			$dados_edit = mysqli_fetch_assoc($consulta_turma);
			?>
			<form class="form-horizontal" name="form" method="post" action="send/edit-turma.php">
				<fieldset>
				<legend><?php echo $dados_edit['nome'].' - '.$dados_edit['id'];?> </legend>
				<div class="form-group">
					<label>Nome </label>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
						<input type="text" name="nome" value="<?php echo $dados_edit['nome']; ?>" class="form-control" autofocus required/>
				</div>
				<div class="form-group">
					<label>Turno </label>
					<select name="turno" class="form-control" required>
						<option value="">Selecione</option>
						<?php $sql_turno = mysqli_query($con, "SELECT * FROM turno"); 
							while($dados_turno = mysqli_fetch_assoc($sql_turno)){
							if($dados_turno['id'] == $dados_edit['turno']){
							?>
						<option value="<?php echo $dados_turno['id']; ?>" selected><?php echo $dados_turno['turno']; ?></option>
						<?php }else{ ?>
						<option value="<?php echo $dados_turno['id']; ?>"><?php echo $dados_turno['turno']; ?></option>
						<?php } } ?>
					</select>
				</div>
				<div class="form-group">
					<label>Sala </label>
					<input type="text" name="sala" value="<?php echo $dados_edit['sala']; ?>" class="form-control" autofocus required/>
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
			<legend>Turmas Cadastradas</legend>
			<div class="table-responsive">
               <table id="table" class="table table-hover table-striped">
                  <thead>
                      <tr>
                          <th>ID</th>
                          <th>Turma</th>
                          <th>Turno</th>
                          <th>Sala</th>
                          <th>Alunos</th>
                          <th></th>
                        </tr>
                  </thead>
                  <tbody>                 						
         				<?php 
						$sql_turma = mysqli_query($con, "SELECT * FROM turma ORDER BY id DESC");
						while($dados = mysqli_fetch_assoc($sql_turma)){ ?>
						<?php
							$id_turno = $dados["turno"];
							$sql_turno = mysqli_query($con, "SELECT *FROM turno WHERE id = '$id_turno' LIMIT 1");
							$result_turno = mysqli_fetch_assoc($sql_turno);
							$turno = $result_turno["turno"];
						?>
						<tr>
            				<td><?php echo $dados["id"]; ?></td>
            				<td><?php echo $dados["nome"]; ?></td>
            				<td><?php echo $turno; ?></td>
							<td><?php echo $dados["sala"]; ?></td>
            				<td>0</td>
							<td>  
								<a href="#" class="btn btn-xs btn-primary">
									<i class="fa fa-info"></i> Acessar
								</a>
								<a href="index.php?pagina=turma&edit=<?php echo $dados['id']; ?>" class="btn btn-xs btn-warning" title="Editar">
									<i class="fa fa-edit"></i>
								</a>
								<a href="send/remove-turma.php?id=<?php echo $dados['id'];?>" class="btn btn-xs btn-danger" title="Excluir">
									<i class="fa fa-trash"></i>
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