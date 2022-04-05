 <!DOCTYPE html>

 <?php
 include 'connection.php';
 if(isset($_POST['signup_btn'])){
     $username=mysqli_real_escape_string($con,$_POST['username'] );
     $email=mysqli_real_escape_string($con,$_POST['email'] );
     $password=mysqli_real_escape_string($con,$_POST['password'] );
     $c_password=mysqli_real_escape_string($con,$_POST['c_password'] );
 }

 ?>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>
     <div class='signup'>
         <form action=''method='POST'>
             <input type='text' name="username" placeholder="username" required=''>
             <br><br>
             <input type='text' name="email" placeholder="email">
             <br><br>
             <input type='password' name="password" placeholder="password">
             <br><br>
             <input type='password' name="c_password" placeholder="confirm password">
             <br><br>
             <input type='submit' name="signup_btn" value='signup'>
             <br><br>
         </form>
</div>
 </body>
 </html>