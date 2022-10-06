<?php 
    if(isset($_GET["page"])) {
        if(
            $_GET["page"] != "login" &&
            $_GET["page"] != "registration"
        ) {
?>
<div>
    <a href="?page=user_list">Usuários</a>
    <a href="?page=film_list">Filmes</a>
    <a href="?page=category_list">Categorias</a>
</div>
<?php 
        }
    }
?>