<?php
// filepath: /opt/lampp/htdocs/api-todolist/src/actions/delete.php
if (isset($_GET['excluir'])) {
    $id = filter_input(INPUT_GET, 'excluir', FILTER_VALIDATE_INT);
    $query = "DELETE FROM tarefas WHERE id=:id";
    $stm = $con->prepare($query);
    $stm->bindParam('id', $id);
    $stm->execute();

  
}
?>