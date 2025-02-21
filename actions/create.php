<?php
// filepath: /opt/lampp/htdocs/api-todolist/src/actions/add.php
if (isset($_POST['tarefa'])) {
    $tarefa = filter_input(INPUT_POST, 'tarefa', FILTER_SANITIZE_SPECIAL_CHARS);
    if (!empty($tarefa)) {
        $query = "INSERT INTO tarefas (descricao, concluida) VALUES (:descricao, 0)";
        $stm = $con->prepare($query);
        $stm->bindParam('descricao', $tarefa);
        $stm->execute();
    }

    header('Location: index.php');
    exit();
    
}
?>