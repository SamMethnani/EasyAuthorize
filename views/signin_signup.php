<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Login - EasyAuthorize</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link href="template/css/signin_signup.css" rel="stylesheet" type="text/css" />
    

</head>
<body>
<div class="container login-container">
<a href="?core=user&action=signin_signup_user">admin</a>
            <div class="row">
                  
                <div class="col-md-6 login-form-1">
                    <h3>Sign up</h3>
                    <form  action="?core=client&action=sign_up" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name *" name="Name" value="" />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Last Name *" name="LastName" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" name="password" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm your Password *"name="password2" value="" />
                        </div>
                        <div class="form-group radio">
                            <label><input type="radio" name="role" value="Individual" checked> Individual </label>
                            &nbsp &nbsp 
                             <label><input type="radio" name="role" value="Organization"> Organization </label>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="CIN/Passeport N°/Organization N° *" name="unique_id" value="" />
                        </div>         
                        <div class="form-group">
                            <label for="Country">From: *</label>
                            <select class="form-control countrypicker" data-default="Tunisia" name="Country" data-flag="false"></select>
                        </div>
                          
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Submit" />
                        </div>

                      
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Sign in</h3>
                    <form action="?core=client&action=sign_in"  method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="CIN/Passeport N°/Organization N° *" name="unique_id" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" name="password" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forgot Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
<script type="text/javascript">
</script>

<script src="template/js/countrypicker.min.js"></script>

</body>
</html>
