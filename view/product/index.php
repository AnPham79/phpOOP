<a href="?controllerAdmin=product&action=createProduct">
    Thêm
</a>

<table border="1" width="100%">
    <thead>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Photo</td>
            <td>FK category</td>
            <td>Price</td>
            <td>Desciption</td>
            <td>Delete</td>
            <td>edit</td>
        </tr>
    </thead>
    <tbody>
        <?php foreach($arr as $each) { ?>
            <tr>
                <td>
                    <?php echo $each->getIdProduct()?>
                </td>
                <td>
                    <?php echo $each->getNameProduct()?>
                </td>
                <td>
                    <img src="<?php echo $each->getPhotoProduct()?>" alt="" style="height:200px;">
                </td>
                <td>
                    <?php echo $each->getFKcategoryProduct() ?>
                </td>
                <td>
                    <?php echo $each->getPriceProduct()?>
                </td>
                <td>
                    <?php echo $each->getDescriptionProduct()?>
                </td>
                <td>
                    <a href="?controllerAdmin=product&action=deleteProduct&id_product=<?php echo $each->getIdProduct() ?>">
                        Xóa
                    </a>
                </td>
                <td>
                    <a href="?controllerAdmin=product&action=editProduct&id_product=<?php echo $each->getIdProduct() ?>">
                        Sửa
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>