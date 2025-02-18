<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    
  
    <?php include("./includes/header.php") ?>
  </head>
  <body class="login-background">
    <?php include("./includes/navbar.php") ?>

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-4 mx-auto">
            <!-- login form  -->
            
            <div class="card login-background">
                <h6 class="card-title text-center">Login</h6>
                <hr>
                <!-- login form code  -->
                <form class="p-2">
                    
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="enter the email" aria-describedby="emailHelp">
                      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1"  placeholder="enter your password" name="password">
                    </div>

                    

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  <!-- registration form code ends -->
            </div>
        </div>
    </div>
</div>




















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>