<?php
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Zadanie 1 w PHP</title>
</head>

<body>      
      <h2>Enter Username and Password</h2> 
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
            
               if ($_POST['username'] == 'test' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'test';
                  
                  echo 'You have entered valid use name and password';
                  sleep(2);
                  header('Location: tekst.html');
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>      
      
         <form  method = "post">
            <h4 class = ><?php echo $msg; ?></h4>
            <input type = "text" name = "username" placeholder = "username = test" required autofocus>
            <br>
            <input type = "password" name = "password" placeholder = "password = 1234" required>
            <br>
            <button type = "submit" 
               name = "login">Login</button>
         </form>        
      
   </body>
</html>