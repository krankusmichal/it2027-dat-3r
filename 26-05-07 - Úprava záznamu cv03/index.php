<?php require('db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přehled knih</title>
</head>
<body>
    <h2>Přehled knih</h2>
    <?php 
    $sql = "SELECT * FROM knihy";
    $vysledek = $conn->query($sql);
    ?>
    <table border="1">
        <tr>
            <th>Název knihy</th>
            <th>Autor</th>
            <th>Úprava záznamu</th>
        </tr>
        <?php while ($radek = $vysledek->fetch_assoc()):?>
            <tr>
                <td><?= $radek['nazev'];?></td>
                <td><?= $radek['autor'];?></td>
                <td><a href="upravit.php?uprava=<?= $radek['id'];?>">Upravit</a></td>
            </tr>
        <?php endwhile;?>
    </table>
</body>
</html>