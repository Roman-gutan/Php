<?php

include 'classroom-data.php';


?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Osztálynapló</title>
</head>
<body>

    <h1>Osztálynapló</h1>

    <select id="country">

        <option value="">
            Válassz osztályt
        </option>

        <?php foreach ((DATA['classes']) as $class): ?>

            <option value="<?= $class ?>">
                <?= $class ?>
            </option>

        <?php endforeach; ?>

        <?php
            
        ?>

    </select>
    <br>

    <script src="app.js"></script>

</body>
</html>