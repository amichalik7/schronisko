<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schronisko dla zwierząt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $_SESSION["idZwierzęta"] = (int) $_POST["idZwierzęta"];
        if (isset($_POST["btnEdytuj"])) {
            echo '<meta http-equiv="refresh" content="0;url=animals/update.php">';
    }}
    ?>
    <nav>
    <button class="btn btn-primary" type="button" id="btnZwierzeta">Zwierzęta</button>
    <button class="btn btn-primary" type="button" id="btnPersonel">Personel</button>
    <button class="btn btn-primary" type="button" id="btnLeczenie">Leczenie</button>
    <button class="btn btn-primary" type="button" id="btnAdopcje">Adopcje</button>
    </nav>
<div id="tresc">
<h1>Witaj w schronisku dla zwierząt</h1>
</div>

<script src="scripts.js"></script>
</body>

</html>