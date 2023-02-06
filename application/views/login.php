<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>S
</head>
<body>
    <div class="content_login">
        <h1>Login</h1>
        <form action="<?php echo base_url('login/check')?>" method="post">
            <div><input type="text" name="email" placeholder="Email"></div>
            <div><input type="text" name="mdp" placeholder="Password"></div>
            <div><input type="submit" value="Valider"></div>
        </form>
        
        
    </div>
    
    
</body>
</html>