<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ecommerce</title>

    <?php include("./includes/header.php") ?>
  </head>
  <body>
    <!-- nav bar start -->
    <?php include("./includes/navbar.php") ?>
    <!-- nav bar end -->

<!-- Section 1 -->
<div class="container-fluid section-1">
    <div class="row">
        <div class="col-sm-12 col-md-6 d-flex flex-column align-self-center">
            <h1 class="section-1-heading text-center text-white">
                welcome to Sameer's Ecommerce
            </h1>
            <a href="#Products" class="btn btn-outline-success mt-4">Explore our products</a>
        </div>
        <div class="col-sm-12 col-md-6">
          <dotlottie-player class="mx-auto" src="https://lottie.host/1e4fb3a8-8aa7-47e2-b633-10c9e83fac94/zzPVF5hRfi.json" background="transparent" speed="1" style="width: 400px; height: 300px;" loop autoplay></dotlottie-player>
        </div>
    </div>
</div>
<!-- Section 1 end -->
<hr>
<!-- Section 2-->
<div class="container">
    <div class="row">
        <h2 class="text-dark text-center">Categories</h2>
        <!-- categories card 1 -->
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <img src="./assets/images/cosemtics.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Cosmetics</h5>
                  <p class="card-text">
                  <ul>
                    <li>lipstick</li>
                    <li>cream</li>
                  </ul></p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>   
        </div>
        <!-- categories card 1 end -->

        <!-- categories card 2 -->
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <img src="./assets/images/electronics.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Electronics</h5>
                  <p class="card-text">
                  <ul>
                    <li>Mobiles</li>
                    <li>Tab</li>
                    <li>Laptop</li>
                    <li> Smart TV</li>
                  </ul>
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>   
        </div>
        <!-- categories card 2 end -->

        <!-- categories card 3 -->
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <img src="./assets/images/fashion.jpg" class="card-img-top" alt="..." width=250px height=237px>
                <div class="card-body">
                  <h5 class="card-title">Fashion</h5>
                  <p class="card-text">
                    <ul>
                      <li>Tshirt</li>
                      <li>Formal wear</li>
                      <li>Casual wear</li>
                      <li>Pants</li>
                    </ul>
                  </p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>   
        </div>
        <!-- categories card 3 end -->
    </div>
</div>
<!-- Section 2 end -->
<hr>
<!-- Section 3 -->
<div id="Products" class="container">
  <div class="row">
      <h2 class="text-dark text-center">Products</h2>
      <!-- products card 1 -->
      <div class="col-sm-12 col-md-4">
          <div class="card">
              <img src="" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>   
      </div>
      <!-- products card 1 end -->

      <!-- products card 2 -->
      <div class="col-sm-12 col-md-4">
          <div class="card">
              <img src="" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                </p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>   
      </div>
      <!-- products card 2 end -->

      <!-- products card 3 -->
      <div class="col-sm-12 col-md-4">
          <div class="card">
              <img src="..." class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>   
      </div>
      <!-- products card 3 end -->
<!-- Section 3 end -->
<hr>














    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 <!-- lottie script  -->
 <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"> 
 </script>
 <!-- custom js -->
 <script src="./assets/JS/main.js">
 </script>
 
  </body>
</html>