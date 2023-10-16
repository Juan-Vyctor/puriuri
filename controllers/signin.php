<?php   

    include('database.php');

    if (isset($_POST['email'], $_POST['senha'])) {
        $email = $_POST['email']; $senha = $_POST['senha'];

        $sql = sprintf("SELECT * FROM tb_usuarios WHERE usu_email ='%s' AND usu_senha='%s'",
        $myqsli->real_escape_string($email), $myqsli->real_escape_string($senha));
        $result = $myqsli->query($sql);

        // if ($result) {
        //     if ($result->num_rows > 0) {
        //         $_SESSION['email'] = $email;
        //         header('Location: /dashboard');
        //     }
        // }
    } else {
        // header("Location: /");
    }
?>