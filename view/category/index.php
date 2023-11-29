<a href="?controllerAdmin=category&action=createCategory">
    Thêm danh mục tại đây
</a>

<table border="1" width="100%">
    <tr>
        <td>#</td>
        <td>Tên danh mục</td>
        <td>Xóa</td>
        <td>Sửa</td>
    </tr>
    <?php foreach ($arr as $each) { ?>
        <tr>
            <td><?php echo $each->getIdCategory() ?></td>
            <td><?php echo $each->getNameCategory() ?></td>
            <td>
                <a href="?controllerAdmin=category&action=deleteCategory&id_category=<?php echo $each->getIdCategory() ?>">
                    Xóa
                </a>
            </td>
            <td>
                <a href="?controllerAdmin=category&action=editCategory&id_category=<?php echo $each->getIdCategory() ?>">
                    Sửa
                </a>
            </td>
        </tr>
    <?php } ?>
</table>