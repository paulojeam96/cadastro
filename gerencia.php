<html>
<head>

	<meta charset="UTF-8">
</head>
</html>
 <?php
 	$operacao = $_POST["operacao"];
 	if (strcmp($operacao, "inclusao") == 0 ) {
            $produto=$produto+1;
 		// realiza a inclusao do produto
 		echo "Produto incluído";
 	}
 	
 	if (strcmp($operacao, "exclusao") == 0 ) {  
            $produto=$produto-1;
            echo "Produto excluído";
 	}
        
       if (strcmp($operacao, "atualizar") == 0 ) {
            $produto=$produto-1;
            echo "Produto atualizado";
	}
 ?>
