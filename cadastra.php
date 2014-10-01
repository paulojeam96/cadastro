<!DOCTYPE html>
<html>
    <head>
        <title>Desenvovelndo Websites com PHP</title>
        <meta charset="UTF-8">
    </head>
    
    <body>
        
        <p align="center"><big><big><strong>
		Cadastramento - Confirmação</strong></big></big>
	</p> 
        
        <section align="center">
            <form method="POST" action="cadastro.php"> 
                <?php
                    echo $_POST['nome'];
                    echo $_POST['username'];
                ?>
                    </br> </br> <?php include 'cadastro.php';?>
        </section>
            
        
            
    </body>
    
    
    
</html>
