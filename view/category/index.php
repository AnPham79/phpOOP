<table border="1" width="100%">
    <tr>
        <td>#</td>
        <td>Tên danh mục</td>
        <td>Xóa</td>
        <td>Sửa</td>
    </tr>
    <?php foreach($arr as $each) { ?>
        <tr>
            <td><?php echo $each->getIdCategory() ?></td>
            <td><?php echo $each->getNameCategory() ?></td>
        </tr>   
    <?php } ?>
</table>