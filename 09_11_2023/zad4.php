<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liczby naturalne i ich pierwiastki kwadratowe</title>
</head>
<body>
    <h1> liczby naturalne i ich pierwiastki kwadratowe </h1>
    <h2> kod z petlą for </h2>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        $sqrt = sqrt($i);
        echo "liczba: $i, pierwiastek kwadratowy : $sqrt <br>";
        $i++;
    }
    ?>
    <h2>kod z petla while </h2>
    <?php
    while ($i <= 10) {
        $sqrt = sqrt($i);
        echo "liczba: $i, pierwiastek kwadratowy : $sqrt <br>";
        $i++;
    }
    ?>
    <h2>kod z petla do while </h2>
    <?php
    $i = 1;
    do {
        $sqrt = sqrt($i);
        echo "liczba: $i, pierwiastek kwadratowy : $sqrt <br>";
        $i++;
    } while ($i <= 10);
    ?>
</body>
</html>