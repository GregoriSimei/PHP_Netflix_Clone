<?php
    include_once("./server/modules/categories/model/category.php");
    include_once('./server/modules/categories/repository/category_repository.php');

    function updateCategory(Category $category) {
        $categoryFound = find_by_id($category->categoryId);

        if($categoryFound != null) {
            return update($category);
        } else {
            return null;
        }
    }
?>