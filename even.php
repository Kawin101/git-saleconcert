<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Concert Page</title>

    <!--- Bootstrap 5 --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</head>
<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
           <!-- Logo navbar 'mx-3 = ระยะห่าง', 'text-white = สีข้อความ' --> 
          <a class="navbar-brand mx-3 text-white" href="#">THE CONCERT</a>

          <!-- navbar button mobile--> 
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>            
          </button>

            <!-- navbar manu--> 
          <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <a class="text-white"></a>
            </ul>
            <ul class="navbar-nav mx-1 mb-2 mb-lg-0">
                  <a href="login.php" class="btn btn-danger">Login</a>
              </ul>                 
          </div>
        </div>
      </nav>

      <br><br>
      <h2 class="text-center"><a class="text-danger">HOT</a></h2>
      <br>


    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <!-- การสร้าง Carousel -->
                <div class="carousel slide" id="slider1" data-bs-ride="carousel">
                        <ol class="carousel-indicators">
                            <button  data-bs-target="#slider1" data-bs-slide-to="0"></button>
                            <button  data-bs-target="#slider1" data-bs-slide-to="1"></button>
                            <button  class="active" data-bs-target="#slider1" data-bs-slide-to="2"></button>
                            <button  data-bs-target="#slider1" data-bs-slide-to="3"></button>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <img src="Picture/c6.jpg" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="Picture/c5.jpg" class="d-block w-100">
                            </div>
                            <div class="carousel-item active">
                                <img src="Picture/c4.jpg" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="Picture/c3.jpg" class="d-block w-100">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <!-- ควบคุมการ Slide ผ่านปุ่ม -->
                        <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slider1">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slider1">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                </div>
            </div>
        </div>
    </div>
    <br>
    <h2 class="text-center"><a href="login.php" class="btn btn-danger">BUY NOW</a></h2>
    <br>




    </nav>
</body>
</html>
