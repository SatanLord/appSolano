<h2 align="center">Listado de usuarios</h2>


<a class="" href="<?php echo APP_URL; ?>users/add"><h4 align="center">Añadir</h4></a>
<table class="table-responsive" align="center" border="2">

	<tr class="active" >
		<th>ID</th>
		<th>Username</th>	
		<th>Rol</th>
		<th>Action</th>
	</tr>
<?php foreach ($users as $user ): ?>
    <tr class="success">
		<td><?php echo $user['id']; ?></td>
		<td><?php echo $user['username']; ?></td>	
		<td><?php echo $user['rol']; ?></td>
		<td>
		    <a href="<?php echo APP_URL; ?>users/edit/<?php echo $user["id"]; ?>">Edit  </a>

		    <a href="<?php echo APP_URL; ?>users/delete/<?php echo $user['id']; ?>">Delete</a>
			
		</td>
	</tr>
<?php endforeach; ?>

</table>


