<?php 
//Evitando ataques XSS (Cross Site Scripting)
//Segurança com tmlspecialchars

if(!empty($_POST['user']) && !empty($_POST['password'])){
    $login = htmlspecialchars($_POST['user']);
    $password = htmlspecialchars($_POST['password']);
    echo "Usuário: $login | Senha: $password";
}else{
    echo "Dados vazios ou inválidos!";
}

?>