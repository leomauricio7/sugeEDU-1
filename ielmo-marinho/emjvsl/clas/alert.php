<script>
	<?php 
	session_start();
	$msg = '';
	if(isset($_SESSION['erro'])){
		$msg = $_SESSION['erro'];
	}elseif(isset($_SESSION['ok'])){
		$msg = $_SESSION['ok'];
	}
	?>
	function alertSuccess(){
		swal({
		  title: "Atenção!",
		  type: "success",
		  text: "<?php echo $msg; ?>",
		  timer: 3000,
		  showConfirmButton: false
		});
	}
	function alertError(){
		swal({
		  title: "Atenção!",
		  type: "error",
		  text: "<?php echo $msg; ?>",
		  timer: 3000,
		  showConfirmButton: false
		});
	}
  </script>
  </head>
  <body 
	<?php if(!(empty($_SESSION['erro']))){?>
			onload="alertError()"
			<?php unset ($_SESSION['erro']); ?>
	<?php } ?>
	
	<?php if(!(empty($_SESSION['ok']))){?>
			onload="alertSuccess()"
			<?php unset ($_SESSION['ok']); ?>
	<?php } ?>
>