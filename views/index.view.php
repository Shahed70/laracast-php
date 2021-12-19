<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($allTodos as $todo) : ?>
            <li>
                <?php if ($todo->completed) : ?>
                    <strike><?php echo $todo->title ?> </strike>
                <?php else : ?>
                    <?php echo $todo->title ?>
                <?php endif ?>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>