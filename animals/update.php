<?php
include("../db.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj zwierzę</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

    <?php
    $query = "select * from zwierzęta where id ={$_SESSION['idZwierzęta']}";
    $result = mysqli_query($conn, $query);
    $zwierze = mysqli_fetch_assoc($result);
    $komunikat = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['btnZapisz'])) {
            $imie = $_POST['Imię'];
            $gatunek = $_POST['Gatunek'];
            $rasa = $_POST['Rasa'];
            $plec = $_POST['Płeć'];
            $waga = $_POST['Waga'];
            $wiek = $_POST['Wiek'];
            $stanZdrowia = $_POST['StanZdrowia'];
            $status = $_POST['Status'];
            if (empty($imie) || empty($gatunek) || empty($rasa) || empty($plec) || empty($waga) || empty($wiek) || empty($stanZdrowia) || empty($status)) {
                echo "<p style='color:red'>Wypełnij wszystkie pola</p>";
            } else {
                $edycja = "UPDATE zwierzęta SET Imię = '$imie', Gatunek = '$gatunek', Rasa = '$rasa', Płeć = '$plec', Waga = $waga, wiek = $wiek, StanZdrowia = '$stanZdrowia', Status = '$status' where ID = {$_SESSION['idZwierzęta']}";
                mysqli_query($conn, $edycja);
                $komunikat = "Dane zostały zapisane";
                $result = mysqli_query($conn, $query);
                $zwierze = mysqli_fetch_assoc($result);
            }
        }
    }

    ?>

    <form method="post">
        <input type="hidden" name="idZwierzęta" value="<?php echo $zwierze['ID']; ?>">
        <label>Imię:</label>
        <input type="text" name="Imię" value="<?php echo $zwierze['Imię']; ?>"><br>

        <label>Gatunek:</label>
        <input type="text" name="Gatunek" value="<?php echo $zwierze['Gatunek']; ?>"><br>

        <label>Rasa:</label>
        <input type="text" name="Rasa" value="<?php echo $zwierze['Rasa']; ?>"><br>

        <label>Płeć:</label>
        <input type="text" name="Płeć" value="<?php echo $zwierze['Płeć']; ?>"><br>

        <label>Waga:</label>
        <input type="text" name="Waga" value="<?php echo $zwierze['Waga']; ?>"><br>

        <label>Wiek:</label>
        <input type="text" name="Wiek" value="<?php echo $zwierze['Wiek']; ?>"><br>


        <label>Stan Zdrowia:</label>
        <input type="text" name="StanZdrowia" value="<?php echo $zwierze['StanZdrowia']; ?>"><br>

        <label>Status:</label>
        <input type="text" name="Status" value="<?php echo $zwierze['Status']; ?>"><br>

        <button type="submit" class="btn btn-success" name="btnZapisz">Zapisz zmiany</button>
        <a href="../index.php"><button type="button" class="btn btn-primary">Anuluj</button></a>
    </form>
    <?php echo "<p style='color:green'>{$komunikat}</p>" ?>

</body>

</html>