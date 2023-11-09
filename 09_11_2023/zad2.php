<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wyświetlanie liczb naturalnych</title>
</head>
<body>
    <h1>liczby naturalne</h1>
    <ul>
        <?php 
        $start = 100;
        for ($i =0; $i < 10 ; $i++) {
            echo "<li>$start</li>";
            $start--;
        }
        ?>
    </ul>
</body>
</html>