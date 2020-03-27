<?php
$mysqli = new mysqli("host", "user", "password", "database");

$id = $_GET["id"];

$result = $mysqli->query("SELECT descricao AS msg FROM localizacao WHERE id = $id");

$response = $result->fetch_assoc();

date_default_timezone_set("America/Sao_Paulo");

echo $response["msg"] . ' ' . date("H:i:s");