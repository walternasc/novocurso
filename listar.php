<?php
include 'conexao.php';

$res = pg_query("SELECT * from users order by id");
?>

<a href="inserir.php">Inserir</a>
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($row = pg_fetch_object($res)) : ?>
            <tr>
                <td><?= $row->id; ?></td>
                <td><?= $row->name; ?></td>
                <td><a href="update.php?id=<?= $row->id; ?>&name=<?= $row->name; ?>">Editar</a></td>
                <td><a href="deletar.php?id=<?= $row->id; ?>">Excluir</a></td>
            </tr>
        <?php endwhile; ?>
    </tbody>
</table>