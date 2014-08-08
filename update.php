<?php
include 'conexao.php';

$id = $_POST['id'];
$name = $_POST['nome'];
if ($id and $name) {
    pg_query("UPDATE users SET name='$name' WHERE id = $id");
    header("location: index.php");
}
?>

<form method="POST">
    <input type="hidden" name="id" value="<?= $_GET['id']; ?>" />
    <label>Name: <input name="nome" value="<?= $_GET['name']; ?>" /></label>
    <button>Enviar</button>
</form
