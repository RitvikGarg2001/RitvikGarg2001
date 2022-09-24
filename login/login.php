<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="script.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<section>
<div class="container">
    <div class="user signinBx">
        <div class="imgBx"><img src="img1.jpeg" alt="">
</div>
        <div class="formBx">
            
            <form action="validation.php" method="post">
               <h2>login form</h2>
                <div class="form-group">
                    
                    <input type="text" name="user" class="form-control" placeholder="Username">

                </div>
                <div class="form-group">
                    
                    <input type="Password" name="password" class="form-control" placeholder="Password">

                </div>   
                <button type="submit" class="btn btn-primary".> Login </button> 
                <p class="signup">
                    Don't have an account?
                    <a href="#" onclick="toggleForm();">Sign Up.</a></p>
            </form>

        </div>
</div>
<div class="user signupBx">
        <div class="formBx">
            
            <form action="registration.php" method="post">
            <h2>signup form</h2>
                <div class="form-group">
                    
                    <input type="text" name="user" class="form-control" placeholder="Username">

                </div>
                <div class="form-group">
                    
                    <input type="email" name="email" class="form-control" placeholder="Email">

                </div>
                <div class="form-group">
                    
                    <input type="Password" name="password" class="form-control" placeholder="Password">

                </div>   
                <button type="submit" class="btn btn-primary".> signup </button> 
                <p class="signup">
                    Already have an account?
                    <a href="#" onclick="toggleForm();">Sign In.</a>
</p>
            </form>

        </div>
        <div class="imgBx"><img src="img3.jpeg" alt="">
</div>
        

    

</div>
</section>
    
</body>
</html>