<h2 align="center">Listado de cuentas</h2>
<a href="<?php echo APP_URL; ?>accounts/add"><h4 align="center">Añadir</h4></a>

<table class="table-responsive" align="center" border="1" >
	<tr>
		<th >Id</th>
<th >usuario</th>
<th >nombre</th>
<th >acción</th>
		

	</tr>
<?php foreach ($accounts as $account ): ?>
    <tr>
		<td><?php echo $account['id']; ?></td>
		<td><?php echo $account['user_id']; ?></td>
		<td><?php echo $account['name']; ?></td>	
		
		<td>
		   <a href="<?php echo APP_URL; ?>accounts/edit/<?php echo $account["id"]; ?>">Edit</a>
		    <a href="<?php echo APP_URL; ?>accounts/delete/?id=<?php echo $account['id']; ?>">Delete</a>
		<?php endforeach; ?>
		</td>
		
	
</tr>
</table>