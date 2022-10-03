<?php
    include_once('./server/modules/movie/useCase/createMovie/index.php');
    include_once("client\header.php");
    include_once("client\pages\home\styles.css");
    $movies = select_all_movies();
	

?>
<br>
<h1>HOME</h1>
<a href='?page=create_movie' >Cadastrar filme</a>

<table>
	<thead>
		<tr>
            <th>ID</th>
			<th>User</th>
			<th>Email</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php foreach ($movies as $movie) { ?>
   
		<tr>
            <td><?php echo $movie->id; ?></td>
			<td><?php echo $movie->name; ?></td>
			<td><?php echo $movie->genre; ?></td>
			<td><?php echo $movie->age_restric; ?></td>
			<td><?php echo $movie->release_date; ?></td>
			<td>
				<a href="?page=movie?edit=<?php echo $movie->id; ?>" class="edit_btn" type="submit" >Edit</a>
			</td>
			<td>
			<form method="post">
       			<input type="submit" name="button<?php echo $movie->id; ?>" value="delete"class="del_btn"/>
			</form>
			</td>
		</tr>
		
	<?php 

        if(isset($_POST["button"])) {
            echo "This is Button.$movie->id that is selected";
        }
} ?>

</table>

<form>