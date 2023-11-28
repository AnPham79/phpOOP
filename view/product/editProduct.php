<form action="?controllerAdmin=product&action=updateProduct" method="POST">
    <input type="hidden" name="id_product" 
    value="<?php echo $each->getIdProduct() ?>">
    <br>
    Name
    <br>
    <input type="text" name="name_product" 
    value="<?php echo $each->getNameProduct() ?>">
    <br>
    Photo
    <br>
    <input type="text" name="photo_product" 
    value="<?php echo $each->getPhotoProduct() ?>">
    <br>
    Price
    <br>
    <input type="text" name="price_product" 
    value="<?php echo $each->getPriceProduct() ?>">
    <br>
    Description
    <br>
    <input type="text" name="description_product" 
    value="<?php echo $each->getDescriptionProduct() ?>">
    <br>
    <button type="submit">Sửa sản phẩm</button>
</form>