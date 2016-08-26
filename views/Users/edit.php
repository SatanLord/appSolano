<!-- Vista para editar-->
<form action="<?php echo APP_URL; ?>users/edit" method="POST">
    <input type="hidden" name="id" value="<?php echo $user["id"]; ?>">
    <p align="center">
        <label for="username">Username</label>
        <input type="text" name="username" value="<?php echo $user["username"]; ?>">
    </p>
    <p align="center">
        <label for="new_password">Password</label>
        <input type="password" name="new_password">
    </p>
    <p align="center">
        <label for="rol">Rol</label>
        <input type="text" name="rol" value="<?php echo $user["rol"]; ?>">
    </p>
    
    <p align="center">
    <input   type="submit" value="save" name="edit">
    </p>
  
</form>
