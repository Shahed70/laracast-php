<?php require "partials/head.php" ?>
<ul>
    <?php foreach ($users as $user) : ?>

        <li><?= $user->name ?></li>
    <?php endforeach ?>
</ul>
<h2> Submit your name</h2>

<form action="/users" method="POST">
    <input type="text" name="name" id="">
    <button type="submit">Submit</button>
</form>

<?php require "partials/footer.php" ?>