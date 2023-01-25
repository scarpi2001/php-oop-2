<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cani e gatti shop</title>

    <?php
    require_once("models/product.php");
    require_once("db.php");
    ?>
</head>

<body>
    <?php
    foreach ($products as $product) {

        echo $product->getFullProducts();
    }
    ?>
</body>

</html>