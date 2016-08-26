<form action="<?php echo APP_URL; ?>accounts/edit" method="POST">
<input type="hidden" name="id" value="<?php echo $account['id']; ?>">
<p  align="center"><label for="name">id: <?php echo $account["id"]; ?></label>
<p  align="center"><label for="name">user_id: <?php echo $account["user_id"]; ?></label>


<p  align="center"><label for="name">Nombre de tarjeta nueva:</label> 
<input type="text" name="new_name"></p>


<p  align="center"><input type="submit" value="update"  ></p>


</form>

