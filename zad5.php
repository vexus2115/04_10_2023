<!DOCTYPE html>
<html>
<head>
    <title>Sprawdź wiek</title>
</head>
<body>
    <form method="POST">
        <label for="wiek">Podaj swój wiek:</label>
        <input type="text" name="wiek" id="wiek">
        <input type="submit" value="Sprawdź">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $wiek = $_POST["wiek"];
        
        // Sprawdź, czy podana wartość jest liczbą całkowitą
        if (!is_numeric($wiek)) {
            echo "To nie jest liczba całkowita.";
        } else {
            $wiek = intval($wiek);
            
            // Sprawdź wiek i wyświetl odpowiednią informację
            if ($wiek < 11) {
                echo "Masz mniej niż 11 lat, jesteś dzieckiem.";
            } elseif ($wiek >= 11 && $wiek <= 17) {
                echo "Masz między 11 a 17 lat, jesteś nastolatkiem.";
            } else {
                echo "Masz 18 lat lub więcej, jesteś dorosły.";
            }
        }
    }
    ?>
</body>
</html>