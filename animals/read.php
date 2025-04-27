<?php
session_start();
include("../db.php");
$query = "select * from zwierzęta";
$result = mysqli_query($conn, $query);

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zwierzęta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>

        <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "
        <div class='card' style='width: 18rem;'>
  <img src='https://via.placeholder.com/150' class='card-img-top' alt='Zwierzę'>
  <div class='card-body'>
    <h4 class='card-title'>{$row['Imię']}</h4>
    <p class='card-text'>Gatunek: {$row['Gatunek']}</p>
    <p class='card-text'>Rasa: {$row['Rasa']}</p>
    <p class='card-text'>Waga: {$row['Waga']}</p>
    <p class='card-text'>Wiek: {$row['Wiek']}</p>
    <p class='card-text'>Zdrowie: {$row['StanZdrowia']}</p>
    <p class='card-text'>Status: {$row['Status']}</p>
    <form method='post'>
        <input type='hidden' name='idZwierzęta' value='{$row['ID']}'>
        <button type='submit' name='btnEdytuj' class='btn btn-success'>Edytuj</button> 
    </form>
  </div>
</div>
";
        }
        ?>
    </>
</body>

</html>