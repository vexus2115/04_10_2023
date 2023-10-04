<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź liczbę</title>
</head>
<body>
    <form method="POST">
        <label for="liczba">Podaj liczbę:</label>
        <input type="text" name="liczba" id="liczba">
        <input type="submit" value="Sprawdź">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liczba = $_POST["liczba"];
        
        // Sprawdź, czy podana liczba jest liczbą całkowitą
        if (!is_numeric($liczba)) {
            echo "To nie jest liczba całkowita.";
        } else {
            $liczba = intval($liczba);
            
            // Sprawdź, czy liczba jest parzysta czy nieparzysta
            if ($liczba % 2 == 0) {
                echo "Liczba $liczba jest liczbą parzystą.";
            } else {
                echo "Liczba $liczba jest liczbą nieparzystą.";
            }
        }
    }
    ?>
</body>
</html>
