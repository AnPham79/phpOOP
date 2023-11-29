<form action="?controllerAdmin=product&action=storeProduct" method="POST">
    Name
    <br>
    <input type="text" name="name_product">
    <br>
    Photo
    <br>
    <input type="text" name="photo_product">
    <br>
    Price
    <br>
    <input type="text" name="price_product">
    <br>
    Description
    <br>
    <input type="text" name="description_product">
    <br>
    Danh mục
    <br>
    <select name="FK_id_category">
        <?php foreach($arr as $each) { ?>
            <option value="<?php echo $each->getIdCategory() ?>"><?php echo $each->getNameCategory() ?></option> 
        <?php } ?>
    </select>
    <br>
    <button type="submit">Thêm sản phẩm</button>
</form>