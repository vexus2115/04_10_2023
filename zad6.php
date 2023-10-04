<!DOCTYPE html>
<html>
<head>
    <title>Oblicz dni w lutym</title>
</head>
<body>
    <form method="POST">
        <label for="rok">Podaj rok:</label>
        <input type="text" name="rok" id="rok">
        <input type="submit" value="Oblicz">
    </form>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rok = $_POST["rok"];
        
        // Sprawdź, czy podana wartość jest liczbą całkowitą
        if (!is_numeric($rok)) {
            echo "To nie jest liczba całkowita.";
        } else {
            $rok = intval($rok);
            
            // Sprawdź, czy rok jest przestępny
            if (($rok % 4 == 0 && $rok % 100 != 0) || ($rok % 400 == 0)) {
                echo "Rok $rok jest przestępny, więc luty ma 29 dni.";
            } else {
                echo "Rok $rok nie jest przestępny, więc luty ma 28 dni.";
            }
        }
    }
    ?>
</body>
</html>
