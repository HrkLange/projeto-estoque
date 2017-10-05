<?php

    $con = new PDO("mysql:host=localhost;dbname=estoque","root",null);

    $data = $con->query('SELECT * FROM categoria')->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode(['result' => $data]);