<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register Page</title>
  </head>
  <body>
    <center><form class="register" action="<?=base_url('authentications/register')?>" method="post">
      <input type="text" name="username" placeholder="Enter Username" required><br><br>
      <input type="email" name="email" placeholder="Enter Email" required><br><br>
      <input type="password" name="password" placeholder="Enter Password" required><br><br>
      <button type="submit" name="register">Register</button><br><br>
      <a href="<?=base_url('authentications/')?>">Already have Account</a>
    </form></center>
  </body>
</html>
