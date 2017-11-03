<?php include 'conexao.php'; session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>SugeEdu | Sistema Unificado de gerenciamento Escolar Educacional</title>
		<meta name="description" content="Sistema Unificado de Gerenciamento Escolar Educacional">
		<meta name="author" content="SugeEdu">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="img/icon.png" rel="icon">
		<link href="plugins/bootstrap/bootstrap.css" rel="stylesheet">
		<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
		<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="plugins/fancybox/jquery.fancybox.css" rel="stylesheet">
		<link href="plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
		<link href="plugins/xcharts/xcharts.min.css" rel="stylesheet">
		<link href="plugins/select2/select2.css" rel="stylesheet">
		<link href="plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">
		<link href="css/style_v1.css" rel="stylesheet">
		<link href="plugins/chartist/chartist.min.css" rel="stylesheet">
		<script src="sweetalert/dist/sweetalert.min.js"></script>
		<link rel="stylesheet" type="text/css" href="sweetalert/dist/sweetalert.css">
		<style>
		#breadcrumb{ background:#182731;}
		.msg:hover{ color:#ccc; cursor:pointer; zoom: 120%;}
		.panel-menu .dropdown-menu{ background: rgb(24, 39, 49);}
		</style>
		
		<script type="text/javascript">
			function erro(){
			<?php  $erro = $_SESSION['erro']; ?>
			swal("Atenção!","<?php echo $erro; ?>", "warning");		
			}
		</script>
		<script type="text/javascript">
			function ok(){
			<?php $ok = $_SESSION['ok']; ?>	
			swal("Solicitação concluida!", "<?php echo $ok; ?>", "success");		
			}
		</script>
	</head>
<body
	<?php if(!(empty($_SESSION['erro']))){?>
			onload="erro();"
			<?php unset ($_SESSION['erro']); ?>
	<?php }elseif(!(empty($_SESSION['ok']))){?>
			onload="ok();"
			<?php unset ($_SESSION['ok']); ?>
	<?php } ?>
>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar navbar-inverse">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="index.php"><img src="img/icon.png" width="120px"></a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<div id="search">
							<input type="text" placeholder="Pesquisar no sistema"/>
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
								<a href="index.php" class="modal-link">
									<i class="fa fa-bell"></i>
									<span class="badge"></span>
								</a>
							</li>
							<li class="hidden-xs">
								<a class="ajax-link" href="ajax/calendar.html">
									<i class="fa fa-calendar"></i>
									<span class="badge"></span>
								</a>
							</li>
							<li class="hidden-xs">
								<a href="ajax/page_messages.html" class="ajax-link">
									<i class="fa fa-envelope"></i>
									<span class="badge"></span>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="img/user.jpg" class="img-circle" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Bem Vindo,</span>
										<span>Leonardo Maurício</span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">
											<i class="fa fa-user"></i>
											<span>Perfil</span>
										</a>
									</li>
									<li>
										<a href="ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span>Mensagens</span>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="fa fa-cog"></i>
											<span>Configurações</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-power-off"></i>
											<span>Sair</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="ajax/dashboard.html" class="ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Home</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-users"></i>
						<span class="hidden-xs">alunos</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/list-aluno.php">Consultar Alunos</a></li>
						<li><a class="ajax-link" href="ajax/requerimento-matricula.php">Requerimento de Matrícula</a></li>
						<li><a class="ajax-link" href="ajax/">Renovação de Matrícula</a></li>
						<li><a class="ajax-link" href="ajax/pesquisa-aluno.php">Pesquisa avançada</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-user"></i>
						 <span class="hidden-xs">Professores</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/list-professor.php">Listar Professor</a></li>
						<li><a class="ajax-link" href="ajax/cad-professor.php">Cadastrar Professor</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list-alt"></i>
						 <span class="hidden-xs">Turmas</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/list-turmas.php">Listar Turmas</a></li>
						<li><a class="ajax-link" href="ajax/cad-turma.php">Cadastrar Turmas</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-folder-open"></i>
						 <span class="hidden-xs">Disciplinas</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/list-disciplinas.php">Listar Disciplinas</a></li>
						<li><a class="ajax-link" href="ajax/cad-disciplina.php">Cadastrar Disciplinas</a></li>

					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-cogs"></i>
						 <span class="hidden-xs">Ferramentas</span>
					</a>
					<ul class="dropdown-menu">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">
								<span class="hidden-xs">Declaração </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Declaração de Vinculo</a></li>
								<li><a href="#">Declaração de Matrícula</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">
								<span class="hidden-xs">Boletim </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Consultar Boletim</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">
								<span class="hidden-xs">Histórico </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Emitir Histórico</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">
								<span class="hidden-xs">Turmas Virtuais </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Listar Turmas Virtuais</a></li>
								<li><a href="#">Adicionar Turma Virtual</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">
								<span class="hidden-xs">Horários </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Consultar Horários</a></li>
								<li><a a class="ajax-link" href="ajax/cad-horario.php">Adicionar Horário</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle">
								<span class="hidden-xs">Usuários </span>
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Consultar</a></li>
								<li><a href="#">Cadastrar Usuários</a></li>
							</ul>
						</li>
					</ul>
				</li>
				 <li>
					<a class="ajax-link" href="ajax/calendar.html">
						 <i class="fa fa-calendar"></i>
						 <span class="hidden-xs">Calendario Acadêmico</span>
					</a>
				 </li>
				
						
				
			</ul>
		</div>
		<!--Start Content-->
		<div id="content" class="col-xs-12 col-sm-10">
			<div id="about">
			</div>
			<div class="preloader">
				<img src="img/devoops_getdata.gif" class="devoops-getdata" alt="preloader"/>
			</div>
			<div id="ajax-content"></div>
		</div>
		<!--End Content-->
	</div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<script src="plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>
<script src="plugins/tinymce/tinymce.min.js"></script>
<script src="plugins/tinymce/jquery.tinymce.min.js"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="js/devoops.js"></script>
</body>
</html>
