        <html>
        <head>
            <title>ABC Laboratory</title>
            <link rel="icon" type="image/x-icon" href="images/microscope.png">

        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
         
        <script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('cpassword').value) {
    document.getElementById('message').style.color = '#5dd05d';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = '#f55252';
    document.getElementById('message').innerHTML = 'Password fields doesnot match';
  }
}

function alphaOnly(event) {
  var key = event.keyCode;
  return ((key >= 65 && key <= 90) || key == 8 || key == 32);
};

function checklen()
{
    var pass1 = document.getElementById("password");  
    if(pass1.value.length<6){  
        alert("Password must be at least 6 characters long. Try again!");  
        return false;  
  }  
}

</script>

        </head>
        <body>
            

        <div class="container">
        
         <div class="title">Create new account</div>
                <form method="post" action="func2.php">
                    <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" class="form-control"  placeholder="Enter Your First Name" name="fname"  onkeydown="return alphaOnly(event);" required/>
                    </div>

                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" class="form-control" placeholder="Enter Your Last Name" name="lname" onkeydown="return alphaOnly(event);" required/>
                   </div>

                   <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" class="form-control" placeholder="Enter Your Email" name="email"  />
                    </div>
                    
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="tel"  name="contact" class="form-control" placeholder="Enter Your Phone Number"  />
                        </div>

                        <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" class="form-control" placeholder="Enter Your Password" id="password" name="password" onkeyup='check();' required/>
                        </div>

                        <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" class="form-control"  id="cpassword" placeholder="Confirm Yor Password" name="cpassword"  onkeyup='check();' required/><span id='message'></span>
                          </div>
          </div> 
                                            <div class="gender-details">
                                         
                                               <div class="category">
                                                
                                                    <input type="radio" name="gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                           
                                    </div>

                                             
       <div class="button">
            <input type="submit" class="btnRegister" name="patsub1" onclick="return checklen();" value="Register"/> 
    
            </div>
            <div class="text">  Already have an account? <a href="index1.php">Login Now</a></div>
        </form>
    </div>
    </div>                             
                            
                         
   
                                    
        <!--
        


                                    <div class="tab-pane fade show" id="admin" role="tabpanel" aria-labelledby="profile-tab">
                                        <h3  class="register-heading">Login as Admin</h3>
                                        <form method="post" action="func3.php">
                                        <div class="row register-form">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="User Name *" name="username1" onkeydown="return alphaOnly(event);" required/>
                                                </div>
                                                


                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password *" name="password2" required/>
                                                </div>
                                                
                                                <input type="submit" class="btnRegister" name="adsub" value="Login"/>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>   -->
            </body>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        </html>

        