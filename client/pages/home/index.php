<?php
    include_once('./server/modules/user/useCase/createUser/index.php');
    include_once("client\header.php");
    include_once("client\pages\home\styles.css");
    $users = select_all_users();

?>
<br>
<h1>HOME</h1>

<table>
	<thead>
		<tr>
            <th>ID</th>
			<th>User</th>
			<th>Email</th>
			<th colspan="2">Action</th>
		</tr>
	</thead>
	
	<?php foreach ($users as $user) { ?>
   
		<tr>
            <td><?php echo $user->id; ?></td>
			<td><?php echo $user->user; ?></td>
			<td><?php echo $user->email; ?></td>
			<td>
				<a href="client\pages\user_account\index.php?edit=<?php echo $user->id; ?>" class="edit_btn" >Edit</a>
			</td>
			<td>
				<a href="server.php?del=<?php echo $user->id; ?>" class="del_btn">Delete</a>
			</td>
		</tr>
	<?php } ?>
</table>

<form>
