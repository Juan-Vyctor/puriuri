<?php   

    include('database.php');

    if (isset($_POST['nome'], $_POST['email'], $_POST['senha'])) {
        $nome = $myqsli->real_escape_string($_POST['nome']);
        $email = $myqsli->real_escape_string($_POST['email']);
        $senha = $myqsli->real_escape_string($_POST['senha']);

        $sql_code = "INSERT INTO tb_usuarios (usu_nome, usu_email, usu_senha) VALUES ('$nome', '$email', '$senha')";
        $sql_query = $mysqli->query($sql_code) or die("Pau no SQL: $mysqli->error");

        header("Location: /dashboard?nome=$nome");
    } else {
        header('Location: /');
    }
?>