<?php
    $diretorio = 'nome_diretorio';
    percorreDir( $diretorio );
    
    function percorreDir( $caminho ){
     // Verifica se é um  diretório válido
     if( is_dir($caminho) ){
        $arquivos = scandir($caminho);
	foreach( $arquivos as $arquivo ){
	    if( $arquivo != '.' && $arquivo != '..' ){
		if( is_dir($caminho.'/'.$arquivo) ){
		    percorreDir( $caminho.'/'.$arquivo );
		}else{
		   echo '--Diretório: '.$caminho.'/'.$arquivo.'<br />';
		}
	     }
	}
     }else{
	echo 'Não encontrado: '.$caminho;
     }
    }
?>
