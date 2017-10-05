<?php

    if($_POST && $_POST['cat_nome'])
    {
        $con = new PDO("mysql:host=localhost;dbname=estoque","root",null);

        $data = $con->query("INSERT INTO `categoria` (`cat_nome`) VALUES ('{$_POST['cat_nome']}');");
         $id = $con->lastInsertId();
         echo json_encode([
             "result" => [
                "cat_id" => $id,
                "cat_nome" => $_POST['cat_nome']
            ]
         ]);
    }

?>