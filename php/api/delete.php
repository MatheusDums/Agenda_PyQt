<?php
require_once '../config/index.php';
require_once '../config/resposta.php';
require_once '../config/dados.php';
require_once '../config/conector.php';


$dados = file_get_contents("php://input");
$dados_log = json_decode($dados, true);

$id_remover = $dados_log['id'];
$indice_remover = null;

foreach($data as $indice => $elemento) {
    if (isset($elemento['id']) && $elemento['id'] == $id_remover ) {
        $indice_remover = $indice;
        break;
    }
}

if($indice_remover !== null) {
    unset($data[$indice_remover]);
}

    file_put_contents('../config/dados.php', '<?php $data = ' .  var_export($data, true) . ';');
        
    echo "Elemento Id $id_remover removido com sucesso!";
?>