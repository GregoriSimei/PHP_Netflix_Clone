<?php
    include("./client/controllers/categories/create_category.php");
    include("./client/helpers/alert.php");
?>
    
    <form method="post" name="category_teste">
        <label>Name</label>
        <input type="text" name="name" placeholder="nome"/>

        <label>Description</label>
        <input type="text" name="description" placeholder="descricao"/>

        <input value="criar" type="submit"/>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $description = $_POST["description"];

        if (
            !empty($name) &&
            !empty($description)
        ) {
            $categoryToCreate = new Category();
            $categoryToCreate->categoryId = null;
            $categoryToCreate->name = $name;
            $categoryToCreate->description = $description;
            
            $categoryCreated = create_category_controller($categoryToCreate);

            alert_box("Categoria criada com sucesso !");
        }
        else {
            alert_box("Preencha os campos corretamente !");
        }
    
    }
?>