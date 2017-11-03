<?php	
	setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	date_default_timezone_set('America/Sao_Paulo');  
	function inverteData($data){
			if(count(explode("/",$data)) > 1){
				return implode("-",array_reverse(explode("/",$data)));
			}elseif(count(explode("-",$data)) > 1){
        return implode("/",array_reverse(explode("-",$data)));
			}
		}
?>