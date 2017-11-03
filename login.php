
<?php 
$sql_estados = mysqli_query($con, "SELECT * FROM estados ORDER BY nome");
 ?>
<div class="row">
	<div class="col-md-offset-2 col-md-8">
		<ul class="nav nav-tabs" role="tablist">
		  <li role="presentation" class="active">
			<a href="#tab_estado" aria-controls="estado" role="tab" data-toggle="tab">Selecione seu Estado</a>
		  </li>
		  <li role="presentation">
			<a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a>
		  </li>
		</ul>
	
		<!-- form estado, cidade, instituição -->
			 <div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="tab_estado">
						<form name="form_login"  method="" action="">
							<h2 class="form-signin-heading">Selecione os Dados</h2>
							<img src="img/icon2.png" class="img-responsive center-block" width="200px">
							<div class="form-group input-group input-group-md">
								<span class="input-group-addon"><i class="fa fa-location-arrow" aria-hidden="true"></i></span>
								<select class="form-control" name="estado" id="estado" required>
									<option value="">Selecione o estado</option>
									    <?php while($reg = mysqli_fetch_assoc($sql_estados)): ?>
											<option value="<?php echo $reg['id_estado']; ?>"><?php echo utf8_encode($reg['nome']); ?></option>
										<?php endwhile; ?>
								</select>
							</div>
							<span id="carregando_cidades" class="alert" style="display: none;"><img src="img/load.gif" width="50">Aguarde, carregando cidades...</span>
							<div class="form-group input-group input-group-md">	
								<span class="input-group-addon"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
								<select class="form-control" name="cidade" id="cidade" required>						
									<option value="">Selecione o estado primeiro</option>				
								</select>
							</div>	
							<span id="carregando_escolas" class="alert" style="display: none;"><img src="img/load.gif" width="50">Aguarde, carregando escolas...</span>
							<div class="form-group input-group input-group-md">	
								<span class="input-group-addon"><i class="fa fa-bank" aria-hidden="true"></i></span>
								<select class="form-control" name="instituicao" id="instituicao" required>
									<option value="">Selecione a cidade primeiro</option>	
								</select>
							</div>
							<button class="btn btn-md btn-primary btn-block" type="submit">Proximo</button>
						  </form>
					</div>				
		<!-- form login -->
				<div role="tabpanel" class="tab-pane" id="login">
					<form class="form-horizontal" method="post" action="">
						<h2 class="form-signin-heading">Acesso Restrito</h2>
						<img src="img/icon2.png" class="img-responsive center-block" width="200px">
						<div class="form-group input-group input-group-md">
							<span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
							<input type="text" name="login" id="login" class="form-control" placeholder="Digite seu login" required autofocus>
						</div>
						<div class="form-group input-group input-group-md">	
							<span class="input-group-addon"><i class="fa fa-key" aria-hidden="true"></i></span>
							<input type="password" name="senha" id="senha" class="form-control" placeholder="Digite sua senha" required>
						</div></br>
						<button class="btn btn-md btn-primary btn-block" type="submit">Acessar</button>
					  </form>
				</div>
		</div>		  
	</div>
</div>

