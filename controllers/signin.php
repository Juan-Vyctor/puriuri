<?php   

    include('database.php');

    if (isset($_POST['email'], $_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $data = (new Usuario())->login($email);

        if (password_verify($senha, $data['usu_senha'])) {
            $nome = $_SESSION['nome'];
            header("Location: /dashboard?nome=$nome");
        } else {
            header("Location: /login");
        }
    } else {
        header("Location: /");
    }
?>