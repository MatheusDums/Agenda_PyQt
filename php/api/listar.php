<?php
require_once '../config/index.php';
require_once '../config/resposta.php';
require_once '../config/conector.php';

$listar = $pdo->query('SELECT * FROM tb_python_api');
$dados = $listar->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($dados);