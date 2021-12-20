<?php

require_once("config.php");

$sql = new Sql();

$posts = $sql->select("SELECT * FROM posts");

echo json_encode($posts);

?>