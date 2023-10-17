<?php

class Usuario {
    public function save($nome, $email, $senha){
        global $pdo;

        $sql = 'INSERT INTO tb_usuarios (usu_nome, usu_email, usu_senha)
        VALUES (:nome, :email, :senha)';

        $sql = $pdo->prepare($sql);
        $sql->bindvalue("nome", $nome);
        $sql->bindvalue("email", $email);
        $sql->bindvalue("senha", password_hash($senha, PASSWORD_ARGON2I));
        $dado = $sql->execute();

        $_SESSION['nome'] = $nome;
        return $dado;
    }

    public function login($email){
        global $pdo;

        $sql = 'SELECT * FROM tb_usuarios WHERE usu_email = :email';
        $sql = $pdo->prepare($sql);
        $sql->bindvalue("email", $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $dado = $sql->fetch();
            $_SESSION['nome'] = $dado['usu_nome'];
            return $dado;
        }
    }
}

?>