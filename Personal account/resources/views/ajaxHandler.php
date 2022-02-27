<?php
    $data = [
        "gender" => $_POST['gender'],
        "country" => $_POST['country'],
        "email" => $_POST['email'],
        "passportseries" => $_POST['passportseries'],
        "passportnumber" => $_POST['passportnumber'],
        "fullname" => $_POST['fullname'],
        "whoisstringsuedthepassport" => $_POST['whoisstringsuedthepassport'],
        "dateofissueofthepassport" => $_POST['dateofissueofthepassport'],
        "password" => $_POST['password'],
    ];

    $connection = new PDO('mysql:host=127.0.0.1;dbname=account', 'root', 'root');
    $sql = 'INSERT INTO users (gender, country, email, passportseries, passportnumber, fullname, whoisstringsuedthepassport,
    dateofissueofthepassport, password) VALUES (:gender, :country, :email, :passportseries, :passportnumber, :fullname, :whoisstringsuedthepassport,
    :dateofissueofthepassport, :password)';
    $statement = $connection->prepare($sql);
    $result = $statement->execute($data);
    var_dump($result);
?>