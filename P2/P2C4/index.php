<?php
    
    $recipes = [
        [
            'title' => 'Cassoulet',
            'recipe' => 'Etape 1 : des flageolets !',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => true,
        ],
        [
            'title' => 'Couscous',
            'recipe' => 'Etape 1 : de la semoule',
            'author' => 'mickael.andrieu@exemple.com',
            'is_enabled' => false,
        ],
        [
            'title' => 'Escalope milanais',
            'recipe' => 'Etape 1 : prenez une belle escalope',
            'author' => 'mathieu.nebra@exemple.com',
            'is_enabled' => true,
        ],
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Affichage des recettes</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Affichage des recettes</h1>
        <!-- Boucles sur les recettes -->
        <?php foreach ($recipes as $recipe) : ?>
            <?php if (array_key_exists('is_enabled', $recipe) && $recipe['is_enabled'] === true) : ?>
                <h1><?php echo $recipe['title']; ?></h1>
                <div><?php echo $recipe['recipe']; ?></div>
                <i><?php echo $recipe['author']; ?></i>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</body>
</html>