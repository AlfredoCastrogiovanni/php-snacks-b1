<?php
    require_once __DIR__ . '/models/Pokemon.php';
    require_once __DIR__ . '/models/Category.php';

    $Pokemon1 = new Pokemon('pino', 'maschio', 3, 1.20,20 );

    $Pokemons = [$Pokemon1, $Pokemon1, $Pokemon1 ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Boostrap CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Pokedex</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <?php foreach($Pokemons as $pokemon) { ?>
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"><?php $pokemon->getname(); ?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">level: <?php echo $pokemon->level; ?></h6>
                            <p class="card-text">Genre: <?php $pokemon->getGenre(); ?></p>
                            <p class="card-text">Weight: <?php $pokemon->getWeight(); ?></p>
                            <p class="card-text">Height: <?php echo $pokemon->height; ?></p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>