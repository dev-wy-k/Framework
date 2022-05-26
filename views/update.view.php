<?php require "views/partials/header.php" ?>

<h1>Update Name</h1>
<form action="/update" method="post">
    <input type="hidden" name="id" value="<?= $user[0]->id ?>">
    <input type="text" name="name" value="<?= $user[0]->name ?>">
    <button type="submit">Submit</button>
</form>

<?php require "views/partials/footer.php" ?>
