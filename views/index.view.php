<?php require "views/partials/header.php" ?>

    <h1>Usernames</h1>
    <?php foreach($users as $user) : ?>
        <li><?= $user->name ; ?></li>
    <?php endforeach ; ?>
   
    <h1>Submit Your Name</h1>

    <form action="/names" method="post">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
<?php require "views/partials/footer.php" ?>
