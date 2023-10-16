<?php   

    include('database.php');

    if (isset($_POST['email'], $_POST['senha'])) {
        $email = $myqsli->real_escape_string($_POST['email']);
        $senha = $myqsli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM tb_usuarios WHERE usu_email = '$email' AND usu_senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Pau no SQL: $mysqli->error");

        $quantidade = $sql_query->num_rows;
        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();
            $nome = $usuario['nome'];
            $_SESSION['email'] = $email;
            header("Location: /dashboard?nome=$nome");
        }
    } else {
        header("Location: /");
    }
?>