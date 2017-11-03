<?php
$conn = mysqli_connect('localhost', 'root', '2010', 'sugeedu') or die('Erro ao conectar com o servidor');
 
$id_cidade = $_GET['cidade'];
 
$rsi = mysqli_query($conn, "SELECT * FROM escolas WHERE id_cidade = '$id_cidade' ORDER BY nome");
 $n = mysqli_num_rows($rsi);
if($n == 0){
	echo utf8_encode("<option value=''>NENHUMA ESCOLA CADASTRADA</option>");
}else{
	echo utf8_encode("<option value=''>SELECIONE A ESCOLA</option>");
	while($regi = mysqli_fetch_object($rsi)){
		echo utf8_encode("<option value='$regi->id_instituicao'>$regi->nome</option>");
	}
}
 
?>