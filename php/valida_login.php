<?php

// Variavel que verificar se a autenticação foi realizada
$usuario_autenticado = false;

//   Usuários do sistema
$usuarios_app = array(
    array('email' => 'cristiano@adm.com', 'senha' => '123456'),
    array('email' => 'aline@user.com', 'senha' => '12345'),
);

/*
echo '<pre>';
print_r($usuarios_app);
echo '</pre>';
*/

foreach($usuarios_app as $user) {
    
    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
    }
    
}

if($usuario_autenticado) {
    echo 'Usuário autenticado';
} else {
    header('Location: ../index.php?login=erro');
    // echo 'Erro na autenticação do usuário';
}

/*

print_r($_POST);

echo '<br />';

echo $_POST['email'];
echo '<br />';
echo $_POST['senha'];
echo '<br />';

*/
?>