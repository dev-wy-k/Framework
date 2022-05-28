<?php require "views/partials/header.php" ?>
    <h1>Tasks</h1>
    <?php foreach($tasks as $task) : ?>
        <li><?= $task->description ?></li>
    <?php endforeach ; ?>
<?php require "views/partials/footer.php" ?>