<form action="?controllerAdmin=category&action=updateCategory" method="POST">
    <input type="hidden" name="id_category" 
    value="<?php echo $each->getIdCategory() ?>">
    <br>
    Danh mục
    <br>
    <input type="text" name="name_category" 
    value="<?php echo $each->getNameCategory() ?>">
    <br>
    <button type="submit">Sửa dang mục</button>
</form>