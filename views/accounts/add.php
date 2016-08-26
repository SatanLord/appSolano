<h2>Add Accounts</h2>

<form action="<?php echo APP_URL; ?>accounts/add" method="POST">
<p><label for="name">Name: </label>
<input type="text" name="name"></p>
<p>
<select name="user_id" >
	 <?php 
	 foreach ($users as $user): ?>
       <option value="<?php echo $user["id"]; ?>"> <?php echo $user["username"]; ?></option>
	 	<?php endforeach; ?>
</select></p>

<p><input type="submit" value="Save"></p>

</form>	