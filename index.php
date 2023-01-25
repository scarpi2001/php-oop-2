<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.scss">
    <title>cani e gatti shop</title>

    <?php
    require_once("models/product.php");
    require_once("models/toy.php");
    require_once("models/kennels.php");
    require_once("models/food.php");
    require_once("db.php");
    ?>
</head>

<body>
    <div id="card_container">
        <?php
        foreach ($products as $product) {

            echo "<div class=card>" . $product->getFullProducts() . "</div>";
        }
        ?>
    </div>

</body>

</html>