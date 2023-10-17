<?php   

    include('database.php');

    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        header("Location: /dashboard?nome=$nome");
    } else {
        header('Location: /');
    }
?>