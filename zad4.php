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
        
        // Sprawdź, czy podana wartość jest liczbą
        if (!is_numeric($liczba)) {
            echo "To nie jest liczba.";
        } else {
            $liczba = floatval($liczba);
            
            // Sprawdź, czy liczba jest mniejsza, równa lub większa od zera
            if ($liczba < 0) {
                echo "Liczba $liczba jest mniejsza od zera.";
            } elseif ($liczba == 0) {
                echo "Liczba $liczba jest równa zero.";
            } else {
                echo "Liczba $liczba jest większa od zera.";
            }
        }
    }
    ?>
</body>
</html>