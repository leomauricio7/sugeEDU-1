<?php
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');
	include('clas/conexao.php');
	include('clas/invertdata.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../img/icon2.png">
    <title>sugeEDU - Sistema Unificado de Gerenciamento Escolar Educacional</title>
    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../../css/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="../../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="../../css/sticky-footer-navbar.css" rel="stylesheet">
	<script src="../../js/ie-emulation-modes-warning.js"></script>
	<!-- sweetalert -->
	<script src="../../sweetalert/dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../sweetalert/dist/sweetalert.css">
	<style>
		p > span{
			color: #337ab7;
			font-weight: none;
		}
		.navbar-default{
			  background-image: url('../../img/b3.jpg');
		}
		.navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
			color: #555;
			background-color: rgba(4, 4, 4, 0.43);
		}
		.alert-cinza{
			background-color: #eee;
		}
		.alert-branco{
			background-color: #fff;
		}
		.alert {
			padding: 5px;
			margin-bottom: 5px;
			border: 1px solid transparent;
			border-radius: 4px;
		}
	</style>
<?php include('clas/alert.php'); ?>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
	    <div class="row">
			<div class="container">
			<a class="navbar-brand" href="./index.php?pagina=home"><img src="../../img/icon2.png" width="100"></a>
			</div>
		</div>
        <div class="row" style="background-color:rgba(4, 4, 4, 0.43);">
			<div class="container">
				<div class="col-md-8 col-md-offset-2">
				<img src="../../img/logo-im.png" class="img-responsive center-block" width="200">
				<h5 align="center" style="color: #cac7c7;">
					<marquee slide scrolldelay="200" direction="left">Escola Municipal João Vitor da Silva Lima</marquee>
				</h5>
				</div>
			</div>
		</div>
	  <div class="container">
		<div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php?pagina=home"><i class="fa fa-home"></i> Home</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book"></i> Disciplina</a>
              <ul class="dropdown-menu">
                <li><a href="index.php?pagina=disciplina">Gerenciar Disciplinas</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-child"></i> Turma</a>
              <ul class="dropdown-menu">
                <li><a href="index.php?pagina=turma">Gerenciar Turmas</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-group"></i> Professor(a)</a>
              <ul class="dropdown-menu">
                <li><a href="index.php?pagina=professor">Gerenciar Professor (a)</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-graduation-cap"></i> Aluno(a)</a>
              <ul class="dropdown-menu">
                <li><a href="#">Consultar</a></li>
                <li><a href="#">Matricular</a></li>
                <li><a href="#">Renovação Matricula</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-clock-o"></i> Horário</a>
              <ul class="dropdown-menu">
                <li><a href="#">Consultar</a></li>
                <li><a href="#">Novo Horário</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-archive"></i> Turma Virtual</a>
              <ul class="dropdown-menu">
                <li><a href="#">Listar</a></li>
                <li><a href="#">Novo Turma</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-certificate"></i> Boletim</a>
              <ul class="dropdown-menu">
                <li><a href="#">Consultar</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-file"></i> Documentos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Declaração de Matrícula</a></li>
                <li><a href="#">Declaração de Vinculo</a></li>
                <li><a href="#">Histórico Parcial</a></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-calendar"></i> Calendário</a>
              <ul class="dropdown-menu">
                <li><a href="#">Gerenciar Calendário</a></li>
              </ul>
			</li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- Begin page content -->
    <div class="container">
	<ol class="breadcrumb">
	  <li><a href="index.php?pagina=home"><i class="fa fa-dashboard"></i> Início</a></li>
	  <li class="active"><?php echo ucfirst($_GET['pagina']); ?></li>
	</ol>
      <div class="row page-header">
		<div class="col-md-2">
			<img src="./documentos/img/professor/pp.jpg" class="img-responsive center-block img-circle" width="100">
		</div>
		<div class="col-md-10">
			<p style="font-size: 15px;">
				<span><i class="fa fa-user"></i> Seja bem vindo:</span> Leonardo Maurício<br>
				<span><i class="fa fa-institution"></i> Instituição: </span>Escola Minicipal João Vitor da Silva Lima<br>
				<span><i class="fa fa-calendar"></i> Data: </span><?php echo date('d/m/Y'); ?><br>
				<span><i class="fa fa-clock-o"></i> Horário: </span><?php echo date('H:i'); ?><br>
				<a href="#"><i class="fa fa-sign-in"></i> Logout</a>
			</p>
		</div>
      </div>
	<?php
		$pagina = $_GET["pagina"];
		$pag['home'] = "home.php";			  
		$pag['turma'] = "turma.php";			  
		$pag['disciplina'] = "disciplina.php";			  
		$pag['professor'] = "professor.php";			  
		$pag['detalhes professor'] = "view-professor.php";			  
		if(!empty($pagina)){
		  if(file_exists($pag[$pagina])){ 
			include $pag[$pagina];
		  }else{
			include "home.php";
		  }
		}else{
			include "home.php";
		}
	?><br>
   </div>
    <footer class="footer">
      <div class="container">
        <p class="text-muted">&copy <?php echo date('Y'); ?> Todos os Direitos Reservados.</p>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../../js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../js/ie10-viewport-bug-workaround.js"></script>
	<script type="text/javascript">
		jQuery('ul.nav li.dropdown').hover(function() {
			 jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn();
		 }, function() {
			 jQuery(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut();
		 });
   </script>
	<!-- Datatable -->
	<link rel="stylesheet" type="text/css" href="../../datatable/css/jquery.dataTables.css"/>
	<script type="text/javascript" src="../../datatable/js/datatables.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#table').DataTable( {
				"language": {
					"url": "../../datatable/language/pt-br.json"
				}
			});
		});
	</script>
	<!--  jspdf -->
	<script type="text/javascript" src="../../jspdf/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="../../jspdf/tableExport.js"></script>
	<script type="text/javascript" src="../../jspdf/jquery.base64.js"></script>
	<script type="text/javascript" src="../../jspdf/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="../../jspdf/jspdf/libs/base64.js"></script>
  </body>
</html>
