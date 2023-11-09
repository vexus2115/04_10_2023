<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wyswietlanie liczb podzielnych przez 5</title>
</head>
<body>
    <h1>Liczby podzielne przez 5 </h1>
    <h2>kod aplikacji z petla for </h2>
    <?php
    for ($i = 100; $i <= 125; $i+= 5) {
        echo $i . "<br>";
    }
    ?>
    <h2>Kod z petlą while </h2>
    <?php 
    $i=100;
    while ($i <= 125) {
        echo $i ."<br>";
        $i+= 5;
    }
    ?>
    <h2>kod z petlą do while </h2>
    <?php
    $i= 100;
    do {
        echo $i ."<br>";
        $i+=5;
    } while ($i <= 125);
    ?>
</body>
</html>