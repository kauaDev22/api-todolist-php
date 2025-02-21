<?php
// filepath: /opt/lampp/htdocs/api-todolist/src/db.php
try {
    $con = new PDO('mysql:host=localhost;dbname=tarefas', 'root', '');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}
?>