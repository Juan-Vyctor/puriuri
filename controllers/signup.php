<?php   

    include('database.php');

    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $nome = $_POST['nome']; $email = $_POST['email']; $senha = $_POST['senha'];

        $sql = sprintf("INSERT INTO tb_usuarios (usu_nome, usu_email, usu_senha) VALUES ('%s', '%s', '%s')",
        $myqsli->real_escape_string($nome), $myqsli->real_escape_string($email), $myqsli->real_escape_string($senha));
        $result = $myqsli->query($sql);

        // if ($result) {
        //     if ($result->num_rows > 0) {
        //         $_SESSION['email'] = $email;
        //         header('Location: /dashboard');
        //     }
        // }
    } else {
        // header('Location: /');
    }
?>