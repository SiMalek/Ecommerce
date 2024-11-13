<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../connexion.php";
    $sql = "insert into produit values(NULL,'cable type c',20,10,'ababababa','https://picsum.photos/200/200',1)";
    $connexion = new connexion();
    $pdo = $connexion->getConnexion();
    #envoi de la requet
    $res = $pdo->exec($sql);
    if ($res) {
        echo "insertion reussite";
    } else {
        echo "insertion echoue";
    }

    ?>
</body>

</html>