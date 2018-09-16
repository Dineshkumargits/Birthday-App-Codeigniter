<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Page</title>
    <script type="text/javascript">
      $("#ajaxlogin").submit(function(e){
        var data = $(this).serialize();
        $.ajax({
          url:'<?=base_url('authentications/login')?>',
          data:data,
          type:post,
          success.function(response){
            if(response==1){
              alert('Login Successfully');
            }else {
              alert('Failed Login');
            }
          }
        })
        e.preventDefault();
      });
    </script>
  </head>
  <body>
    <center><form class="login" action="#" method="post" id="ajaxlogin"><br><br>
      <center><input type="text" name="name" placeholder="Enter Username/Email"><br><br><br>
      <input type="password" name="password" placeholder="Enter Password"><br><br>
      <button type="submit" name="login">Login</button><br>
      <a href="<?=base_url('authentications/view_register')?>">Don't have Account</a>
    </form></center>
  </body>
</html>
