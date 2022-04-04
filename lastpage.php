<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

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
                <a class="text-white btn btn-info">Welcome <strong><?php echo $_SESSION['username']; ?></strong> </a>
            </ul>
            <ul class="navbar-nav mx-1 mb-2 mb-lg-0">
                  <a href="login.php" class="btn btn-danger">Logout</a>
            </ul>                 
            </div>
        </div>
    </nav>

    <div class="container">
    <div class="text-center">
    <br>

    <div class="alert alert-danger">
      <strong><h2><p class="center text-danger">Out Of Time</p> </h2> </strong>
    </div>     
    </div>
    <!---วิดีโอ-->
    <iframe width="750" height="600" src="https://www.youtube.com/embed/XtNHIbpgT84" 
    frameborder="0" allowfullscreen>
    </iframe>
    <!---รูปภาพ-->
    <img src="Picture/c3.jpg" width="500" height="600" alt="" class="float-end">
  
  <div style="text-align:center;width:100%;">
    <h1>CONCERT : CLASH AWAKE CONCERT</h1>
    <p class="text-info">Leo Presents “CLASH AWAKE CONCERT” ปลุกทุกความสุข ฟื้นทุกความทรงจำ</p>
    <a href="#" class="btn btn-danger disabled">Be Over</a>
    <hr>  
</div>
    </div>


    <!-- หน้าตรงกลาง -->
    <nav>
<ul class="pagination justify-content-center">
    <li class="page-item">
        <a href="index.php" class="page-link">Home page</a>
    </li>
    <li class="page-item">
        <a href="twopage.php" class="page-link">2</a>
    </li>
    <li class="page-item active">
      <a href="lastpage.php" class="page-link">Last page</a>
  </li>
</ul>
</nav>
<br>

</body>
</html>