<?php
    include_once("class/Produto.php");
    $p = new Produto();

    $p->excluirProduto($_GET["pid"]);
    echo "usuario excluído";
?>

<a href="formusuario.php">Voltar</a>