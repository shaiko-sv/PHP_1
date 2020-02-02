<?php
    include '../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="app">
    <header>
        <div class="logo">E-shop</div>
        <div class="cart">
            <filter-el></filter-el>
            <cart ref="cart"></cart>
        </div>
    </header>
    <main>
        <products ref="products"></products>
        <error ref="error"></error>
    </main>
</div>
    <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js" integrity="sha384-0pzryjIRos8mFBWMzSSZApWtPl/5++eIfzYmTgBBmXYdhvxPc+XcFEk+zJwDgWbP" crossorigin="anonymous"></script>
    <!-- development version, includes helpful console warnings -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="js/ErrorComponent.js"></script>
    <script src="js/CartComponent.js"></script>
    <script src="js/ProductsComponent.js"></script>
    <script src="js/FilterComponent.js"></script>
    <script src="js/main.js"></script>
</body>
</html>