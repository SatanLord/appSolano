<form action="<?php echo APP_URL; ?>categories/edit" method="POST">
<input type="hidden" name="id" value="<?php echo $category['id']; ?>">
<p  align="center"><label for="name">id: <?php echo $category['id']; ?></label></p>
<p align="center"><label for="name">Nombre de categoria nueva:</label> 
<input type="text" name="new_name"></p>




</form>

