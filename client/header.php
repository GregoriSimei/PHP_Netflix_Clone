<?php 
    if(isset($_GET["page"])) {
        if(
            $_GET["page"] != "login" &&
            $_GET["page"] != "registration"
        ) {
?>
<div>
    <a href="?page=user_list">Usuários</a>
    <a href="?page=films">Filmes</a>
    <a href="?page=categories">Categorias</a>
</div>
<?php 
        }
    }
?>