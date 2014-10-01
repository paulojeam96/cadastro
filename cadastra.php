<!DOCTYPE html>
<html>
    <head>
        <title>Desenvovelndo Websites com PHP</title>
        <meta charset="UTF-8">
    </head>
    <?php $username = $_POST['username']; if(strlen($username)<6 OR empty($username))
    {echo " Verifique se o campo do Username esta preenchido, ou se ele tem menos de 6 caracteres.<br/>";}?>                  
    <?php $senha = $_POST['senha']; if (strlen($senha)<5 OR empty($senha)) 
    {echo " Verifique se o campo Senha esta preenchido, ou se a senha tem menos de 5 digitos.<br/>";}?>
    
    <body>
        
        <p align="center"><big><big><strong>
		Cadastramento - Confirmação</strong></big></big>
	</p> 
        
        <section align="center">
            <form method="POST" action="cadastro.php"> 
                
                <p>Nome: <?php echo $_POST['nome']; ?></p> 
                <p>Username: <?php echo $_POST['username']; ?> </p>
                
                </br> </br> <?php include 'cadastro.php';?>
        </section>
            
        
            
    </body>
    
    
</html>
