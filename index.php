<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <?php
    include "nav.php";
    ?>
    <div class="container mt-3">
        <h1>Liste des produits</h1>
        <div class="row">
            <?php
            for ($i = 0; $i < 4; $i++) {
            ?>
                <div class="col-3">
                    <div class="card">
                        <img src="https://picsum.photos/100/100" class="img-fluid" alt="La photo du produit">
                        <div class="card-body">
                            <h1 class="card-title">Azus I7 1To</h1>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facilis, excepturi.</p>
                            <a href="#" class="btn btn-success btn-sm">Détail</a>
                            <a href="#" class="btn btn-primary btn-sm">
                                <i class="fas fa-shopping-cart"></i>Ajouter</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php
        include "footer.php"
        ?>

</body>

</html>