<?php
// filepath: /opt/lampp/htdocs/api-todolist/src/actions/update.php
if (isset($_GET['concluir'])) {
    $id = filter_input(INPUT_GET, 'concluir', FILTER_VALIDATE_INT);
    $query = "UPDATE tarefas SET concluida=1 WHERE id=:id";
    $stm = $con->prepare($query);
    $stm->bindParam('id', $id);
    $stm->execute();

   
}
?>