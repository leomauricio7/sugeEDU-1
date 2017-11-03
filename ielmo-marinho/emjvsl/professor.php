<div class="row">
	<div class="col-md-12">
	<?php if(!isset($_GET['edit'])){?>
		<form class="form-horizontal" name="form" method="post" action="send/cad-professor.php" enctype="multipart/form-data">
			<fieldset>
				<legend>Cadastro Professor (a)</legend>
				<div class="col-md-6 form-group">
					<label>Nome </label>
					<input type="text" placeholder="Digite seu nome" name="nome" class="form-control" autofocus required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Foto do Perfil </label>
					<input type="file" name="foto" class="form-control">
				</div>
				<div class="col-md-6 form-group">
					<label>CPF </label>
					<input type="text" name="cpf" placeholder="xxx.xxx.xxx-xx" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>RG </label>
					<input type="text" name="rg" placeholder="xxx.xxx.xx" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Data de Nascimento</label>
					<input type="date" name="data_nascimento" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>CEP</label>
					<input type="text" name="cep" placeholder="xxxxx-xxx" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Sexo </label><br>
					<input type="radio" value="1" name="sexo" required> Masculino
					<input type="radio" value="2" name="sexo" required> Feminino
					<input type="radio" value="3" name="sexo" required> Outro
				</div>
				<div class="col-md-6 form-group">
					<label>Cor </label>
					<select name="cor" class="form-control" required>
						<option value="">Selecione</option>
						<?php $sql_cor = mysqli_query($con, "SELECT * FROM aux_cor");
						while($dados_cor = mysqli_fetch_assoc($sql_cor)){?>
						<option value="<?php echo $dados_cor['id']; ?>"><?php echo $dados_cor['cor']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-md-6 form-group">
					<label>Disciplina </label>
					<select name="disciplina" class="form-control" required>
						<option value="">Selecione</option>
						<?php $sql_disciplina = mysqli_query($con, "SELECT * FROM disciplina");
						while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){?>
						<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo $dados_disciplina['nome']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-md-6 form-group">
					<label>Turno </label>
					<select name="turno" class="form-control" required>
						<option value="">Selecione</option>
						<?php $sql_turno = mysqli_query($con, "SELECT * FROM turno");
						while($dados_turno = mysqli_fetch_assoc($sql_turno)){?>
						<option value="<?php echo $dados_turno['id']; ?>"><?php echo $dados_turno['turno']; ?></option>
						<?php } ?>
					</select>
				</div>
				<div class="col-md-6 form-group">
					<label>Telefone Celular</label>
					<input type="text" name="celular" placeholder="(xx)xxxx-xxxx" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Telefone Fixo</label>
					<input type="text" name="fixo" placeholder="(xx)xxxx-xxxx" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>E-mail</label>
					<input type="email" name="email" placeholder="sugeedu@info.com" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Data do Cadastro</label>
					<input type="text" name="data_cadastro" readonly="readonly" value="<?php echo date('d/m/Y'); ?>" class="form-control" required/>
				</div>
				<div class="col-md-12 form-group">
					<button class="btn btn-primary"><i class="fa fa-save"></i> Finalizar Cadastro</button>
				</div>
				</fieldset>
			</form>
			<?php }else{ 
			$id = $_GET['edit'];
			$consulta_professor = mysqli_query($con, "SELECT * FROM professor WHERE matricula = '$id' LIMIT 1");
			$dados_edit = mysqli_fetch_assoc($consulta_professor);
			?>
		<form class="form-horizontal" name="form" method="post" action="send/edit-professor.php" enctype="multipart/form-data">
			<fieldset>
				<legend><?php echo $dados_edit['nome'].' ['.$dados_edit['matricula'].']';?></legend>
				<div class="col-md-6 form-group">
					<label>Nome </label>
					<input type="hidden" value="<?php echo $id; ?>" name="id" >
					<input type="text" value="<?php echo $dados_edit['nome']; ?>" name="nome" class="form-control" autofocus required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Foto do Perfil </label>
					<input type="file" name="foto" class="form-control">
				</div>
				<div class="col-md-6 form-group">
					<label>CPF </label>
					<input type="text" name="cpf" value="<?php echo $dados_edit['cpf']; ?>" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>RG </label>
					<input type="text" name="rg" value="<?php echo $dados_edit['rg']; ?>" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Data de Nascimento</label>
					<input type="date" name="data_nascimento" value="<?php echo $dados_edit['data_nascimento']; ?>" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>CEP</label>
					<input type="text" name="cep" value="<?php echo $dados_edit['cep']; ?>" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Sexo </label><br>
					<?php if($dados_edit['sexo'] == 1){ ?>
						<input type="radio" value="1" checked name="sexo" required> Masculino
						<input type="radio" value="2" name="sexo" required> Feminino
						<input type="radio" value="3" name="sexo" required> Outro
					<?php }elseif($dados_edit['sexo'] == 2){ ?>
						<input type="radio" value="1" name="sexo" required> Masculino
						<input type="radio" value="2" checked name="sexo" required> Feminino
						<input type="radio" value="3" name="sexo" required> Outro
					<?php }elseif($dados_edit['sexo'] == 3){ ?>
						<input type="radio" value="1" name="sexo" required> Masculino
						<input type="radio" value="2" name="sexo" required> Feminino
						<input type="radio" value="3" checked name="sexo" required> Outro
					<?php } ?>
				</div>
				<div class="col-md-6 form-group">
					<label>Cor </label>
					<select name="cor" class="form-control" required>
						<option value="">Selecione</option>
						<?php $sql_cor = mysqli_query($con, "SELECT * FROM aux_cor");
						while($dados_cor = mysqli_fetch_assoc($sql_cor)){
						if($dados_edit['cor'] == $dados_cor['id']){ ?>
						<option value="<?php echo $dados_cor['id']; ?>" selected><?php echo $dados_cor['cor']; ?></option>
						<?php }else{ ?>
						<option value="<?php echo $dados_cor['id']; ?>"><?php echo $dados_cor['cor']; ?></option>
						<?php } } ?>
					</select>
				</div>
				<div class="col-md-6 form-group">
					<label>Disciplina </label>
					<select name="disciplina" class="form-control" required>
						<option value="">Selecione</option>
						<?php $sql_disciplina = mysqli_query($con, "SELECT * FROM disciplina");
						while($dados_disciplina = mysqli_fetch_assoc($sql_disciplina)){
						if($dados_edit['id_disciplina'] == $dados_disciplina['id']){ ?>
						<option value="<?php echo $dados_disciplina['id']; ?>" selected><?php echo $dados_disciplina['nome']; ?></option>
						<?php }else{ ?>
						<option value="<?php echo $dados_disciplina['id']; ?>"><?php echo $dados_disciplina['nome']; ?></option>
						<?php } } ?>
					</select>
				</div>
				<div class="col-md-6 form-group">
					<label>Turno </label>
					<select name="turno" class="form-control" required>
						<option value="">Selecione</option>
						<?php $sql_turno = mysqli_query($con, "SELECT * FROM turno");
						while($dados_turno = mysqli_fetch_assoc($sql_turno)){
						if($dados_edit['id_turno'] == $dados_turno['id']){?>
						<option value="<?php echo $dados_turno['id']; ?>" selected><?php echo $dados_turno['turno']; ?></option>
						<?php }else{ ?>
						<option value="<?php echo $dados_turno['id']; ?>"><?php echo $dados_turno['turno']; ?></option>
						<?php } } ?>
					</select>
				</div>
				<div class="col-md-6 form-group">
					<label>Telefone Celular</label>
					<input type="text" name="celular" value="<?php echo $dados_edit['telefone_celular']; ?>" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Telefone Fixo</label>
					<input type="text" name="fixo" value="<?php echo $dados_edit['telefone_fixo']; ?>" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>E-mail</label>
					<input type="email" name="email" value="<?php echo $dados_edit['email']; ?>" class="form-control" required/>
				</div>
				<div class="col-md-6 form-group">
					<label>Data do Cadastro</label>
					<input type="text" name="data_cadastro" readonly="readonly" value="<?php echo inverteData($dados_edit['data_cadastro']); ?>" class="form-control" required/>
				</div>
				<div class="col-md-12 form-group">
					<button class="btn btn-warning"><i class="fa fa-save"></i> Salvar Alterações</button>
				</div>
				</fieldset>
			</form>
			<?php } ?>
	</div>
	<div class="col-md-12">
		<fieldset>
			<legend>Professores Cadastrados</legend>
			<div class="table-responsive">
               <table id="table" class="table table-hover table-striped">
                  <thead>
                      <tr>
                          <th>Matrícula</th>
                          <th>Nome</th>
                          <th>Disciplina</th>
                          <th>Turno</th>
                          <th></th>
                        </tr>
                  </thead>
                  <tbody>                 						
         				<?php 
						$sql_professor = mysqli_query($con, "SELECT * FROM professor ORDER BY matricula DESC");
						while($dados = mysqli_fetch_assoc($sql_professor)){ 
						$id_disciplina = $dados['id_disciplina'];
						$consulta_disciplina = mysqli_query($con, "SELECT * FROM disciplina WHERE id = '$id_disciplina' LIMIT 1");
						$result_disciplina = mysqli_fetch_assoc($consulta_disciplina);
						$disciplina = $result_disciplina['nome'];
						$id_turno = $dados['id_turno'];
						$consulta_turno = mysqli_query($con, "SELECT * FROM turno WHERE id = '$id_turno' LIMIT 1");
						$result_turno = mysqli_fetch_assoc($consulta_turno);
						$turno = $result_turno['turno'];
						?>
						<tr>
            				<td><?php echo $dados["matricula"]; ?></td>
            				<td><?php echo $dados["nome"]; ?></td>
            				<td><?php echo $disciplina; ?></td>
            				<td><?php echo $turno; ?></td>
							<td>  
								<a href="index.php?pagina=detalhes professor&id=<?php echo $dados['matricula']; ?>" class="btn btn-xs btn-success" title="Detalhar">
									<i class="fa fa-info"></i> Detalhar
								</a>
								<a href="index.php?pagina=professor&edit=<?php echo $dados['matricula']; ?>" class="btn btn-xs btn-info" title="Editar">
									<i class="fa fa-edit"></i>
								</a>
								<a href="send/remove-professor.php?id=<?php echo $dados['matricula'];?>" class="btn btn-xs btn-danger" title="Excluir">
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