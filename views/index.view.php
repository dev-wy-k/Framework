<?php require "views/partials/header.php" ?>

    <h1>Usernames</h1>
    <?php foreach($users as $user) : ?>
        <h3>
            <?= $user->name ; ?> 
        </h3>
        <a href="/update?id=<?= $user->id ; ?>">update</a>
        <form action="/delete" method="post">
            <input type="hidden" name="id" value="<?= $user->id ; ?>">
            <button>Delete</button>
        </form>
        
    <?php endforeach ; ?>
   
    <h1>Submit Your Name</h1>

    <form action="/names" method="post">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </form>
<?php require "views/partials/footer.php" ?>
