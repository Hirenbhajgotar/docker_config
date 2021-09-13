<?php
    echo 'Hello World From Hiren ';
    echo '<br>';
    echo 'hehehehe';

// docker_db1 -> is a phpmyadmin database
// dockertest1 -> is a adminer database

$conn = new mysqli('db', 'root', 'password', 'docker_db1');
$sql = "SELECT * FROM docker_table1";

if($res = $conn->query($sql)) {
    while($data = $res->fetch_object()) {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        // exit;
    }
}

?>