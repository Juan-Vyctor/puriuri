<?php   

    include('database.php');

    if (isset($_POST['email'], $_POST['senha'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        header("Location: /dashboard?nome=$nome");
    } else {
        header("Location: /");
    }
?>