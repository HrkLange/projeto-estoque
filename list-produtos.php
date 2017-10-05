<?php
    header('Content-Type: text/html; charset=UTF-8');

    $con = new PDO("mysql:host=localhost;dbname=estoque","root",null);

    $data = $con->query('SELECT * FROM produtos LEFT JOIN categoria ON cat_id = prod_cat_id')->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['result' => $data]);