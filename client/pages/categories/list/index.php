<?php
    include('./client/controllers/categories/get_category.php');

    $categoriesFound = get_category_controller(null);
?>

<br>
<a href="?page=criar_category">Criar Categoria</a>
<br><br>

<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
    </tr>
    
    <?php 
        if(!empty($categoriesFound)) {
            foreach ($categoriesFound as $category) {
    ?>
        <tr>
            <td><?php echo $category["categoryId"] ?></td>
            <td><?php echo $category["name"] ?></td>
            <td><?php echo $category["description"] ?></td>
            <td>
                <a href="?page=deletar_category&id=<?php echo $category["categoryId"] ?>">Deletar</a>
            </td>
            <td>
                <a href="?page=alterar_category&id=<?php echo $category["categoryId"] ?>">Alterar</a>
            </td>
        </tr>
    <?php 
            }
        }
    ?>
</table>