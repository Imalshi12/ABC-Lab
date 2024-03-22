<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>
    <title>ABC Laboratory</title>
   
  <link rel="icon" type="image/x-icon" href="images/microscope.png">
</head>
<body>
    

<div class="container">
         <div class="box form-box">
         <img src="images/account.png" width="70px" height="70px" alt="">
           
        <header><center>Login as Admin</center></header>
                                        
             <form method="post" action="func3.php">
             <label>Username: </label>                      
             <div class="field input">  <input type="text" class="form-control" placeholder="User Name " name="username1" onkeydown="return alphaOnly(event);" required/></div>
             <div class="field input"><label>Password: </label></div>
             <div class="field input">  <input type="password" class="form-control" placeholder="Password " name="password2" required/></div>
             <div class="field input"> <input type="submit" class="btnRegister" name="adsub" value="Login"/></div>
                  </form>
                   </div>
                  </div>
 </body>
</html>