<?php

$_POST = array(
    'prod_nome' => 'Produto 1',
    'prod_marca' => 'Marca do Produto',
    'prod_cat_id' => '1',
    'prod_qtd' => '25'
);

if($_POST)
{
    $con = new PDO("mysql:host=localhost;dbname=estoque","root",null);

    $data = $con->query("
      INSERT INTO produtos 
        (prod_nome, prod_marca, prod_cat_id, prod_qtd)
      VALUES 
        ('{$_POST['prod_nome']}','{$_POST['prod_marca']}','{$_POST['prod_cat_id']}', '{$_POST['prod_qtd']}');
    ");

    $id = $con->lastInsertId();
    echo json_encode([
        "result" => [
            'prod_id' => $id,
            'prod_nome' => $_POST['prod_nome'],
            'prod_marca' => $_POST['prod_marca'],
            'prod_cat_id' => $_POST['prod_cat_id'],
            'prod_qtd' => $_POST['prod_qtd'],
        ]
    ]);
}

?>