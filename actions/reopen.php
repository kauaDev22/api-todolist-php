<?php
// filepath: /opt/lampp/htdocs/api-todolist/src/actions/reopen.php
if (isset($_GET['reabrir'])) {
    $id = filter_input(INPUT_GET, 'reabrir', FILTER_VALIDATE_INT);
    $query = "UPDATE tarefas SET concluida=0 WHERE id=:id";
    $stm = $con->prepare($query);
    $stm->bindParam('id', $id);
    $stm->execute();

}
?>