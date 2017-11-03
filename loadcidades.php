<?php
$conn = mysqli_connect('localhost', 'root', '2010', 'sugeedu') or die('Erro ao conectar com o servidor');
 
$id_estado = $_GET['estado'];
 
$rs = mysqli_query($conn, "SELECT * FROM cidades WHERE (id_estado = '$id_estado') AND (id_situacao = 1) ORDER BY nome");
$n = mysqli_num_rows($rs);
if($n == 0){
	echo utf8_encode("<option value=''>NENHUMA CIDADE CADASTRADA NO SISTEMA</option>");
}else{ 
	echo utf8_encode("<option value=''>SELECIONE A CIDADE</option>");
	while($reg = mysqli_fetch_object($rs)){
		echo utf8_encode("<option value='$reg->id_cidade'>$reg->nome</option>");
	}
}
 
?>