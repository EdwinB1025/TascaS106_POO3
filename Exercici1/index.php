<?php
session_start();

function createYears(): string
{
    $options = "";
    for ($i = 0; $i <= 120; $i++) {
        $value = $i . " años";
        $options .= '<option value = "' . $i . '">' . $value . '</option>' . "\n";
    }

    return $options;
}

function getResult(): ?string
{
    if (isset($_SESSION['result'])) {
        return isset($_SESSION['result']);
    } else {
        return null;
    }
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <form action="getResult.php" method="post">
            <h3 style="font-weight: bold;">Consultar Datos</h3>
            <label for="name">Nombre:</label>
            <input type="text" id="name" name="name">
            <label for="age">Edad:</label>
            <input list="years" id="age" name="age">
            <button type="submit">Ver datos</button>
            <datalist id="years">
                <?php
                echo createYears();
                ?>
            </datalist>
        </form>
    </div>
    <div class="result">

        <?php
        echo getResult();
        ?>
    </div>

</body>

</html>