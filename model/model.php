<?php
require 'model/connectDb.php';
require 'model/Object.php';
?>

<?php
class productModel
{
    private string $table = 'product';
    public function getAllProduct()
    {
        $connect = (new Connect())->connectdb();

        $sql = "SELECT $this->table.*,
        category.name_category as FK_id_category 
        FROM 
        $this->table 
        AS 
        $this->table
        JOIN
        category 
        ON 
        category.id_category = $this->table.FK_id_category";

        $result = mysqli_query($connect, $sql);

        $arr = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $object = new productObject();
            $object->setIdProduct($row['id_product']);
            $object->setNameProduct($row['name_product']);
            $object->setPhotoProduct($row['photo_product']);
            $object->setPriceProduct($row['price_product']);
            $object->setDescriptionProduct($row['description_product']);
            $object->setFKcategoryProduct($row['FK_id_category']);

            $arr[] = $object;
        }

        mysqli_close($connect);

        return $arr;
    }

    public function createProduct($name_product, $photo_product, $price_product, $description_product, $FK_id_category)
    {
        $connect = (new Connect())->connectdb();

        $object = new productObject($name_product, $photo_product, $price_product, $description_product, $FK_id_category);
        $object->setNameProduct($name_product);
        $object->setPhotoProduct($photo_product);
        $object->setPriceProduct($price_product);
        $object->setDescriptionProduct($description_product);
        $object->setFKcategoryProduct($FK_id_category);

        $sql = "INSERT INTO $this->table(name_product, photo_product, price_product, description_product, FK_id_category)
        VALUES 
        ('$name_product', '$photo_product', '$price_product', '$description_product', '$FK_id_category')";

        mysqli_query($connect, $sql);

        mysqli_close($connect);
    }

    public function findProduct($id_product)
    {
        $connect = (new Connect())->connectdb();

        $sql = "SELECT * FROM $this->table
        WHERE 
        id_product = '$id_product'";

        $result = mysqli_query($connect, $sql);

        $row = mysqli_fetch_array($result);

        $object = new productObject();
        $object->setIdProduct($row['id_product']);
        $object->setNameProduct($row['name_product']);
        $object->setPhotoProduct($row['photo_product']);
        $object->setPriceProduct($row['price_product']);
        $object->setDescriptionProduct($row['description_product']);
        $object->setFKcategoryProduct($row['FK_id_category']);

        mysqli_close($connect);

        return $object;
    }

    public function updateProduct($id_product, $FK_id_category, $name_product, $photo_product, $price_product, $description_product)
    {
        $connect = (new Connect())->connectdb();

        $sql = "UPDATE $this->table
        SET 
        name_product = '$name_product',
        photo_product = '$photo_product',
        price_product = '$price_product',
        description_product = '$description_product',
        FK_id_category = '$FK_id_category'
        WHERE 
        id_product = $id_product";

        mysqli_query($connect, $sql);

        $connect->close();
    }



    public function deleteProduct($id_product)
    {
        $connect = (new Connect())->connectdb();

        $object = new productObject($id_product);
        $object->setIdProduct($id_product);

        $sql = "DELETE FROM $this->table
        WHERE 
        id_product = '$id_product'";

        mysqli_query($connect, $sql);
    }
}

class categoryModel
{
    public function getAllCategory()
    {
        $connect = (new Connect())->connectdb();

        $sql = "SELECT * FROM category";

        $result = mysqli_query($connect, $sql);

        $arr = [];

        while ($row = mysqli_fetch_assoc($result)) {
            $object = new categoryObject();
            $object->setIdCategory($row['id_category']);
            $object->setNameCategory($row['name_category']);

            $arr[] = $object;
        }

        mysqli_close($connect);

        return $arr;
    }

    public function createCategory($name_category)
    {
        $connect = (new Connect())->connectdb();

        $sql = "INSERT INTO category(name_category)
        VALUES('$name_category')";

        $object = new categoryObject();
        $object->setNameCategory($name_category);

        mysqli_query($connect, $sql);

        mysqli_close($connect);
    }

    public function findCategory($id_category)
    {
        $connect = (new Connect())->connectdb();

        $sql = "SELECT * FROM category
        WHERE 
        id_category = '$id_category'";

        $result = mysqli_query($connect, $sql);

        $row = mysqli_fetch_array($result);

        $object = new categoryObject();
        $object->setIdCategory($row['id_category']);
        $object->setNameCategory($row['name_category']);

        mysqli_close($connect);

        return $object;
    }

    public function updateCategory($id_category, $name_category)
    {
        $connect = (new Connect())->connectdb();

        $sql = "UPDATE category
        SET 
        name_category = '$name_category' 
        WHERE 
        id_category = '$id_category'";

        $object = new categoryObject();
        $object->setIdCategory($id_category);
        $object->setNameCategory($name_category);

        mysqli_query($connect, $sql);

        mysqli_close($connect);

        return $object;
    }

    public function deleteCategory($id_category)
    {
        $connect = (new Connect())->connectdb();

        $sql = "DELETE FROM category 
        WHERE 
        id_category = '$id_category'";

        $object = new categoryObject();
        $object->setIdCategory($id_category);

        mysqli_query($connect, $sql);

        mysqli_close($connect);

        return $object;
    }
}
