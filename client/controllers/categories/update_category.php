<?php
    include_once('./server/modules/categories/model/category.php');
    include('./server/modules/categories/useCase/updateCategory/index.php');

    function update_category_controller(Category $category) {
        $categoryUpdated = updateCategory($category);

        return $categoryUpdated;
    }
?>