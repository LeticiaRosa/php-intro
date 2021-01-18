<?php
//Deve vir antes de qualquer codigo!
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Formulário de Inscrição</title>
    <meta name="author" content = "">
    <meta name="description" content="">
    <meta name="viewport" content="width-device-width, initial-scale=1">
</head>
<body>
<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php 
    //isset verifica se a variavel de sessão foi iniciada!
        $mensagem_sucesso = isset($_SESSION['mensagem-de-sucesso']) ? $_SESSION['mensagem-de-sucesso'] : '';
       if(!empty ($mensagem_sucesso)){
           echo $mensagem_sucesso;
       }
       $mensagem_erro = isset($_SESSION['mensagem-de-erro']) ? $_SESSION['mensagem-de-erro'] : '';
       if(!empty ($mensagem_erro)){
           echo $mensagem_erro;
       }
    ?>
    <p>Seu nome: <input type="text" name="nome"/></p>
    <p>Sua idade: <input type="text" name="idade"/></p>
    <p><input type="submit" value="Enviar dados do competidor"/></p>
</form>

</body>

</html>