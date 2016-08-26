<form action="<?php echo APP_URL; ?>users/add" method="POST">
  <p align="center">
    <label for="username">Username:</label>
    <input type="text" name="username">
  </p>
  <p align="center">
    <label for="password">Password: </label>
    <input type="password" name="password" >
  </p>
    <p align="center">
    <label for="rol">Rol: </label>
    <input type="text" name="rol">
  </p>

  <p align="center"><input type="submit" value="save" name="add"></p>
</form>
