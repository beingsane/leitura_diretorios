header('Content-Type: text/html; charset=utf-8');
  /**
	 * Script para retirar código indesejado.
	 */
	$root = ''; // Raiz do servidor
	
	$diretorio = $root.'autentica_m';
	
	recursivo( $diretorio );
	
	
	
	function recursivo( $caminho ){
		// Verifica se é um  diretório válido
		if( is_dir($caminho) ){
			$arquivos = scandir($caminho);
			foreach( $arquivos as $arquivo ){
				if( $arquivo != '.' && $arquivo != '..' ){
					if( is_dir($caminho.'/'.$arquivo) ){
						recursivo( $caminho.'/'.$arquivo );
					}else{
						echo '--Diretório: '.$caminho.'/'.$arquivo.'<br />';
					}
				}
			}
		}else{
			echo 'Não encontrado: '.$caminho;
		}
   }
