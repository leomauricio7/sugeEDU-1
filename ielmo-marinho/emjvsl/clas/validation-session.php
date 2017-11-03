<?php
if(!isset($_SESSION['num_usuario'])){
	$_SESSION['erro'] = "Área Restrita! Efetue o Login!";
		unset ($_SESSION['num_usuario']);
		echo '<script>location.href="../"</script>';
}
?>