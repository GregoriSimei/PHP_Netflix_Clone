<?php
    include("./client/controllers/categories/get_category.php");
    include("./client/controllers/categories/delete_category.php");

    $id = $_GET['id'];
    $categoryFound = null;

    if(isset($id)) {
        $categoryFound = get_category_controller($id);
    }

    if($categoryFound != null) {

?>
    <h1>Categoria excluida</h1>
    <b>Nome: </b> <?php echo $categoryFound["name"] ?>
    <b>Descrição: </b> <?php echo $categoryFound["description"] ?>
<?php 
        delete_category_controller($id);
    }
?>