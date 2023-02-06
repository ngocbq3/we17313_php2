<?php

function indexProduct()
{
    $products = getData("Select * From hang_hoa ORDER By ma_hh DESC");
    include_once "views/product.php";
}

function addProduct()
{
    include_once "views/addProduct.php";
}

function storeProduct()
{
    if (isset($_POST['add_product'])) {
        $ten_hh = $_POST['ten_hh'];
        $don_gia = $_POST['don_gia'];
        $hinh = $_FILES['hinh']['name'];

        move_uploaded_file($_FILES['hinh']['tmp_name'], 'images/' . $hinh);

        $sql = "INSERT INTO hang_hoa(ten_hh, don_gia, hinh, ma_loai) Values('$ten_hh', '$don_gia', '$hinh', 1000)";

        exeQuery($sql);
        header("location:?ctr=product");
        die;
    }
}
