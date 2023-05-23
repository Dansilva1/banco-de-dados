<?php

try{
$banco = new PDO('mysql:host=localhost;dbname=Login', 'root', '');
echo "conexão efetuada com sucesso!";
}catch(PDOException $err){
    echo "Falha";
}

    $validarlogin = $banco->prepare("SELECT * FROM tbUsuario WHERE nmLogin = :logi and dsSenha = :senha");
    $validarlogin->bindValue(":logi", $_POST['login']);
    $validarlogin->bindValue(":senha", ($_POST['senha']));
    $validarlogin->execute();

    if($validarlogin->rowCount() == 1)
    { echo "Bem vindo";
        
    } else {
        
        header('location:conexao.php');
    }