<?php

    $recipes = [
        [
            'title' => 'Cassoulet',
            'author' => 'mickael.andrieu@exemple.com',
        ],
        [
            'title' => 'Couscous',
            'author' => 'mickael.andrieu@exemple.com',
        ],
        [
            'title' => 'Escalope milanaise',
            'author' => 'mathieu.nebra@exemple.com',
        ],
        [
            'title' => 'Salade Romaine',
            'author' => 'laurene.castor@exemple.com',
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affiches des recettes</title>
</head>
<body>
    <ul>
        <?php for ($i = 0; $i <= 3; $i++) : ?>
            <li><?php echo $recipes[$i]['title']. '  ' .'(' .$recipes[$i]['author']. ')'; ?></li>
        <?php endfor; ?>
    </ul>
    </ul>
</body>
</html>