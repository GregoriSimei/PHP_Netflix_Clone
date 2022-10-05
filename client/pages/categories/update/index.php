<?php
    include("./client/controllers/categories/get_category.php");
    include("./client/controllers/categories/update_category.php");
    include("./client/helpers/alert.php");

    $id = $_GET['id'];
    $categoryFound = null;

    if(isset($id)) {
        $categoryFound = get_category_controller($id);
    }

    if($categoryFound != null) {

?>
    <form method="post" name="category_teste">
        <label>Name</label>
        <input type="text" name="name" placeholder="<?php echo $categoryFound["name"] ?>"/>

        <label>Description</label>
        <input type="text" name="description" placeholder="<?php echo $categoryFound["description"] ?>"/>

        <input value="Atualizar" type="submit"/>
    </form>
<?php 
    }
?>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $description = $_POST["description"];

        if (
            !empty($name) &&
            !empty($description)
        ) {
            $categoryToUpdate = new Category();
            $categoryToUpdate->categoryId = $id;
            $categoryToUpdate->name = $name;
            $categoryToUpdate->description = $description;
            
            $categoryCreated = update_category_controller($categoryToUpdate);

            if(!$categoryCreated) {
                alert_box("Categoria não existe !");
            }
            else {
                alert_box("Categoria alterada com sucesso !");
            }
        }
        else {
            alert_box("Preencha os campos corretamente !");
        }
    
    }
?>