<?php 
include_once __DIR__ . '/classi/Computer.php';
include_once __DIR__ . '/classi/Aspirapolveri.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <h1>php-oop-2</h1></header>
    <main>
    <!-- classe padre -->
    <section></section>
    <!-- classe figlio 1 -->
    <section>
    <?php
    $computer = new Computer('Macbook pro','apple','Laptop','1499€', 'M1');
    ?>
    <h2>CATEGORIA COMPUTER</h2>
    <p>prodotto: <?php echo $computer->printname(); ?></p>
    <p>genere: <?php echo $computer->printgen() ?></p>
    <p>prezzo: <?php echo $computer->printprice()?></p>
    <p>processore: <?php echo $computer->printproc() ?></p>
    </section>
    <!-- classe figlio 2 -->
    <?php
    $aspirapolveri = new Aspirapolveri('v11','Dyson','Senza filo','699€',);
    $aspirapolveri->setpower('300W');
    ?>
    <h2>CATEGORIA Aspirapolveri</h2>
    <p>prodotto: <?php echo $aspirapolveri->printname(); ?></p>
    <p>genere: <?php echo $aspirapolveri->printgen() ?></p>
    <p>prezzo: <?php echo $aspirapolveri->printprice()?></p>
    <p>potenza: <?php echo $aspirapolveri->getpower() ?></p>
    </main>
</body>
</html>