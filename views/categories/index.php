<h2 align="center">Categorias</h2>


<a href="<?php echo APP_URL; ?>categories/add"><h4>Añadir</h4></a>
<table class="table-responsive" align="center" border="1">
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th >Action</th>	
		
	</tr>
<?php foreach ($categories as $category ): ?>
    <tr>
		<td><?php echo $category['id']; ?></td>
		<td><?php echo $category['name']; ?></td>
		<td>
		   <a href="<?php echo APP_URL; ?>categories/edit/<?php echo $category["id"]; ?>">Edit</a>
		   <a href="<?php echo APP_URL; ?>categories/delete/?id=<?php echo $category["id"]; ?>">Delete</a>
		</td></tr><
<?php endforeach; ?>
</table>


