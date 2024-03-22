<!DOCTYPE html>
<html lang="en">
<title>ABC Laboratory</title>

  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href="images/microscope.png">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="stylelogin.css">
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>


    
  </head>

<body>

  <div class="container">
         <div class="box form-box">
         <img src="images/healthy.png" width="60px" height="60px" alt="">
      <header> <center>Login as Patient</center></header>
              <form class="form-group" method="POST" action="func.php">
                
                  <label>Email: </label>
                  <div class="field input"><input type="text" name="email" class="form-control" placeholder="Enter your email" required/></div>
                  <div class="field input"><label>Password: </label></div>
                  <div class="field input"><input type="password" class="form-control" name="password2" placeholder="Enter your password" required/></div>
                  <div class="field input">
                  <input type="submit" id="inputbtn" name="patsub" value="Login"></div>  
                <div class="link">  Don't have an account? <a href="index.php">Create new account</a></div>
                
              </form>
        
</div>
</div>
</div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>