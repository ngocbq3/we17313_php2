<?php include_once "header.php" ?>
<article>
    <form action="?ctr=add-product" method="post" enctype="multipart/form-data">
        <input type="text" name="ten_hh" placeholder="Tên hàng hóa" id="">
        <br>
        <input type="number" name="don_gia" placeholder="đơn giá" id="">
        <br>
        <input type="file" name="hinh" id="">
        <br>
        <button type="submit" name="add_product">Add</button>
    </form>
</article>
<?php include_once "footer.php" ?>