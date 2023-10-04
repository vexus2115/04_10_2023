<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź podzielność</title>
</head>
<body>
    <form method="POST">
        <label for="liczba1">Podaj pierwszą liczbę:</label>
        <input type="text" name="liczba1" id="liczba1">
        <label for="liczba2">Podaj drugą liczbę:</label>
        <input type="text" name="liczba2" id="liczba2">
        <input type="submit" value="Sprawdź">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $liczba1 = $_POST["liczba1"];
        $liczba2 = $_POST["liczba2"];
        
        // Sprawdź, czy podane wartości są liczbami całkowitymi
        if (!is_numeric($liczba1) || !is_numeric($liczba2)) {
            echo "Wprowadź obie liczby całkowite.";
        } else {
            $liczba1 = intval($liczba1);
            $liczba2 = intval($liczba2);
            
            // Sprawdź, czy liczba pierwsza jest podzielna przez drugą
            if ($liczba2 == 0) {
                echo "Nie można dzielić przez zero.";
            } elseif ($liczba1 % $liczba2 == 0) {
                echo "$liczba1 jest podzielna przez $liczba2 bez reszty.";
            } else {
                echo "$liczba1 nie jest podzielna przez $liczba2 bez reszty.";
            }
        }
    }
    ?>
</body>
</html>

