<?php
include "conexao.php";

$name = $_POST['nome'];

if ($name) {
    pg_query("INSERT INTO users(name) VALUES ('$name')");
    header("location: index.php");
}
?>

<form method="POST">
    <label>Nome: <input name="nome" /></label>
    <button>Enviar</button>
</form>