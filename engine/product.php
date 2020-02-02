<?php

    $id = $_GET['id'] ?? "1";
    $path = '../public/img/full/';

    include_once "products.php";
?>
    <?php while($product = mysqli_fetch_assoc($products)):?>
    <?php if($product['id_product'] == $id) : ?>
        <html>
            <body>
                <a href="../public/homework4.php">Назад к каталогу</a>
                <p>Код товара: <?=$product['id_product']?></p>
                <p>Название товара: <?=$product['product_name']?></p>
                <p>Описание: <?=$product['description']?></p>
                <p>Рейтинг: <?=$product['counter']?></p>
                <form name="review" action="review.php" method="get">
                    <button type="submit" name="id" value=<?=$id?>>Отзыв</button>
                </form>
                <img src="<?=$path.$product['img']?>" alt="<?=$product['product_name']?>" style="width:500px">
            </body>
        </html>
        <?php endif;?>
    <?php endwhile; ?>