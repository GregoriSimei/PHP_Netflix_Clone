<?php
    include('./client/controllers/films/get_film.php');

    $filmsFound = get_films_controller(null);
?>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Year</th>
        <th>Duration</th>
        <th>Rating</th>
        <th>Description</th>
        <th>Category</th>
    </tr>
    
    <?php 
        if(!empty($filmsFound)) {
            foreach ($filmsFound as $film) {
    ?>
        <tr>
            <td><?php echo $film["id"] ?></td>
            <td><?php echo $film["name"] ?></td>
            <td><?php echo $film["year"] ?></td>
            <td><?php echo $film["duration"] ?></td>
            <td><?php echo $film["rating"] ?></td>
            <td><?php echo $film["description"] ?></td>
            <td><?php echo $film["categoryId"] ?></td>
            <td>
                <a href="?page=deletar_film&id=<?php echo $film["id"] ?>">Deletar</a>
            </td>
            <td>
                <a href="?page=alterar_film&id=<?php echo $film["id"] ?>">Alterar</a>
            </td>
        </tr>
    <?php 
            }
        }
    ?>
</table>

<div>
            <a href='?page=include_film'>Criar filme</a>
        </div>