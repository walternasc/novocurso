<?php

include 'conexao.php';

$id = $_GET['id'];

pg_query("DELETE FROM users WHERE id = $id");

header("location: index.php");