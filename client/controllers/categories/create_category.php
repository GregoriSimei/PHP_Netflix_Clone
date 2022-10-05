<?php
include_once('./server/modules/categories/model/category.php');
include('./server/modules/categories/useCase/createUser/index.php');

function create_category_controller(Category $category) {
    return add_category($category);
}

?>