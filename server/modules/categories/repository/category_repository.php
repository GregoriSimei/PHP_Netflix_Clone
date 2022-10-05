<?php
    include_once(__DIR__."/../model/category.php");

    function create(Category $category) {
        include("./server/database/index.php");
        $sql = $pdo->prepare("INSERT INTO categories (name, description) VALUES (?,?)");
        $sql -> execute([$category->name, $category->description]);
    }

    function find_by_id(int $idCategory) {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM categories WHERE categoryId = "'.$idCategory.'" LIMIT 1');
        $categoryFound = $sql->fetch();
        return $categoryFound;
    }

    function find_all() {
        include("./server/database/index.php");
        $sql = $pdo->query('SELECT * FROM categories');
        $categoriesFound = $sql->fetchAll();
        return $categoriesFound;
    }

    function update(Category $category) {
        include("./server/database/index.php");
        $pdo->exec('UPDATE categories SET name="'.$category->name.'", description="'.$category->description.'" WHERE categoryId='.$category->categoryId);
        $categoryUpdated = find_by_id($category->id);
        return $categoryUpdated;
    }

    function remove(int $id) {
        include("./server/database/index.php");
        $pdo->exec('DELETE FROM categories WHERE categoryId = '.$id);
    }
?>