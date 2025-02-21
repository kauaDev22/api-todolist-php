<?php
require 'config/db.php';
require 'actions/create.php';
require 'actions/delete.php';
require 'actions/update.php';
require 'actions/reopen.php';


$query = "SELECT id, descricao, concluida FROM tarefas";
$lista = $con->query($query)->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/api-todolist/src/css/style.css">
    <title>Lista de tarefas</title>
</head>
<body>
    <h1>Lista de Tarefas</h1>
    <form action="index.php" method="post">
      Nova tarefa: <input type="text" name="tarefa">
      <input type="submit" value="Adicionar">
    </form>

    <div class="lista">
        <ul>
            <?php foreach($lista as $item): ?>
                <li <?= $item['concluida']?' class="concluida"':''?> ><?=$item['descricao']?>
                <?php if(!$item['concluida']): ?>
                   <a href="?concluir=<?=$item['id']?>"><i class="fa-solid fa-check"></i></a>
                   <?php else:?>
                    <a href="?reabrir=<?=$item['id']?>"><i class="fa-regular fa-folder-open"></i></a>
                <?php endif; ?>
                    <a href="?excluir=<?=$item['id']?>"> <i class="fa-solid fa-trash-can"></i></a>
                </li>
            <?php endforeach; ?>    
        </ul>
    </div>
</body>
</html>
