<?php
require_once "../config/config.php";

if($_GET['id']){
    $idProduct = (int)($_GET['id']);
}
$idCart = 1;

$sql = "SELECT * FROM cartItems WHERE id_cart=".$idCart." and id_product=".$idProduct;
    if(!mysqli_query($con, $sql)) {
        $sql = "INSERT INTO cartItems (id_cart, id_product) VALUES ('%s','%s')";
        $sql = sprintf($sql, mysqli_real_escape_string($con, $idCart),mysqli_real_escape_string($con, $idProduct));
        $result = mysqli_query($con, $sql);
        if(!$result){
            die(mysqli_error($con));
        }
        $response = [];
        $row = (object) array('result' => '1');
        $response[] = $row;
        echo json_encode($row);
        exit;
    } else {
    $sql = "UPDATE cartItems SET quantity = quantity + 1 WHERE id_cart=".$idCart." AND id_product=".$idProduct;
    $result = mysqli_query($con, $sql);
        if(!$result){
            die(mysqli_error($con));
        }
        $response = [];
        $row = (object) array('result' => '1');
        $response[] = $row;
        echo json_encode($row);
        exit;
    }
function product_new($con, $name, $description, $src, $small_src, $price){

    $sql = "INSERT INTO products (name, description, src, small_src, price) VALUES ('%s','%s','%s','%s','%s')";

    $sql = sprintf($sql, mysqli_real_escape_string($con, $name),mysqli_real_escape_string($con, $description),mysqli_real_escape_string($con, $src),mysqli_real_escape_string($con, $small_src),mysqli_real_escape_string($con, $price));

    $result = mysqli_query($con, $sql);

    if(!$result){
        die(mysqli_error($con));
    }

    return true;
}

function product_buy($con, $idCart=1, $idProduct){
    $sql = "SELECT * FROM cartItems WHERE id_cart=".$idCart." and id_product=".$idProduct;
    if(!mysqli_query($con, $sql)) {
        $sql = "INSERT INTO cartItems (id_cart, id_product) VALUES ('%s','%s')";
        $sql = sprintf($sql, mysqli_real_escape_string($con, $idCart),mysqli_real_escape_string($con, $idProduct));
        $result = mysqli_query($con, $sql);
        if(!$result){
            die(mysqli_error($con));
        }
        return true;
    }
    $sql = "UPDATE cartItems SET quantity = quantity + 1 WHERE id_cart=".$idCart." AND id_product=".$idProduct;
    $result = mysqli_query($con, $sql);
        if(!$result){
            die(mysqli_error($con));
        }
        return true;
}

function product_all($con){
    $sql = "SELECT * FROM products order by id desc";
    $result = mysqli_query($con, $sql);

    if(!$result)
        die(mysqli_error($con));

    $n = mysqli_num_rows($result);
    $products = array();

    for($i = 0; $i < $n; $i++){
        $row = mysqli_fetch_assoc($result);
        $products[] = $row;
    }

    return $products;
}

function product_get($con, $id){
    $sql = sprintf("SELECT * FROM products where id=%d",(int)$id);
    $result = mysqli_query($con, $sql);

    if(!$result)
        die(mysqli_error($con));

    $product = mysqli_fetch_assoc($result);

    return $product;
}

function product_delete($con, $id){
    $id = (int)$id;

    if($id == 0)
        return false;

    $sql = sprintf("DELETE FROM products where id='%d'", $id);
    $result = mysqli_query($con, $sql);

    if(!$result)
        die(mysqli_error($con));

    return mysqli_affected_rows($con);
}

function product_edit($con, $id, $name, $description, $src, $small_src, $price){
    $id = (int)$id;

    $sql = "UPDATE products SET name='%s',description='%s',src='%s',small_src='%s',price='%s' WHERE id='%d'";

    $sql = sprintf($sql, mysqli_real_escape_string($con, $name),mysqli_real_escape_string($con, $description),mysqli_real_escape_string($con, $src),mysqli_real_escape_string($con, $small_src),mysqli_real_escape_string($con, $price),$id);

    $result = mysqli_query($con, $sql);

    if(!$result)
        die(mysqli_error($con));

    return mysqli_affected_rows($con);
}