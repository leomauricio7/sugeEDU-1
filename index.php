<?php include_once('./includes/conexao.php');?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/icon.png">

    <title>SugeEDU | Sistema Unificado de Gerenciameno Escolar Educacional</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="css/cover.css" rel="stylesheet">
    <script src="js/ie-emulation-modes-warning.js"></script>
	<script src="js/jquery.js"></script>
	<style>
	.alert{
		font-family: helvetica;
		font-size: 12px;
		color: #f5f5f5;
		margin-bottom: 5px;
	}
	
</style>
  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand"><img src="img/icon2.png" class="img-responsive" width="150px"></h3>
              <nav>
                <ul class="nav masthead-nav">
                  <li class="active"><a href="index.php?action=home">Inicio</a></li>
                  <li><a href="#">Quem Somos</a></li>
                  <li><a href="#">Autentificar Documento</a></li>
                  <li><a href="index.php?action=login">Login</a></li>
                </ul>
              </nav>
            </div>
          </div>

          <div class="inner cover">
            <?php 
					if($_GET){
						$pagina = $_GET["action"];
						$pag["home"] =  "home.php";
						$pag["login"] =  "login.php";
					  
						if(!empty($pagina)){
						  if(file_exists($pag[$pagina])){ 
							include $pag[$pagina];
						  }else{
							include "home.php";
						  }
						}else{
							include "home.php";
						}
					}else{
						include "home.php";
					}

				?>
          </div>

          <div class="mastfoot">
            <div class="inner">
              <p>&copy 2017 Desenvolvimento: <a href="#">SugeEDU</a><br>Todos os Direitos Resevados.</p>
            </div>
          </div>

        </div>

      </div>

    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
				$('#estado').change(function(){	
				 var id_estado = form_login.estado.value; 
				 var intervalo = window.setInterval(function() {
					document.getElementById('carregando_cidades').style.display = 'block';
					}, 50);
					$('#cidade').load('loadcidades.php?estado='+id_estado);
					window.setTimeout(function() {
						clearInterval(intervalo);
						document.getElementById('carregando_cidades').style.display = 'none';
					}, 1000);
				 
				});
			});
	</script>
	
		<script type="text/javascript">
			$(document).ready(function(){
				$('#cidade').change(function(){	
					var id_cidade = form_login.cidade.value; 				
					var intervalo = window.setInterval(function() {
					document.getElementById('carregando_escolas').style.display = 'block';
					}, 3000);
					$('#instituicao').load('loadescolas.php?cidade='+id_cidade);
					window.setTimeout(function() {
						clearInterval(intervalo);
						document.getElementById('carregando_escolas').style.display = 'none';
					}, 2000);	 
				});
			});
	</script>
  </body>
</html>
