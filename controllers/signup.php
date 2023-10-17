<?php   

    include('database.php');

    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $model = new Usuario();
        $data = $model->login($email);

        if ($data) {
            header("Location: /register");
        } else {
            $usuario = $model->save($nome, $email, $senha);
            header("Location: /dashboard?nome=$nome");
        }
    } else {
        header('Location: /');
    }
?>