<?php
    echo 'Hello World From Hiren ';
    echo '<br>';
    echo 'hehehehe';

$conn = new mysqli('db', 'root', 'password', 'dockertest1');
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