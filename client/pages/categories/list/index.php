<?php
    include('./client/controllers/users/get_user.php');

    $usersFound = get_users_controller(null);
?>

<table>
    <tr>
        <th>ID</th>
        <th>USER</th>
        <th>EMAIL</th>
        <th>PASS</th>
    </tr>
    
    <?php 
        if(!empty($usersFound)) {
            foreach ($usersFound as $user) {
    ?>
        <tr>
            <td><?php echo $user["id"] ?></td>
            <td><?php echo $user["user"] ?></td>
            <td><?php echo $user["email"] ?></td>
            <td><?php echo $user["pass"] ?></td>
            <td>
                <a href="?page=deletar_user&id=<?php echo $user["id"] ?>">Deletar</a>
            </td>
            <td>
                <a href="?page=alterar_user&id=<?php echo $user["id"] ?>">Alterar</a>
            </td>
        </tr>
    <?php 
            }
        }
    ?>
</table>