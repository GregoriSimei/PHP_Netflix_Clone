<?php
    include_once('./server/modules/categories/repository/category_repository.php');

    function add_category(Category $category) {
        return create($category);
    }
?>