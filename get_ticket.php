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
        <div class="alert alert-warning">
          <strong><h2><p class="center text-secondary"> Ticket </p> </h2> </strong>
        </div>     
        </div>
          <!---ให้รูปภาพอยู่ตรงกลาง--->
          <div style="text-align:center;width:100%;">
            <a href="#" class="text-white btn btn-danger"><img src="Picture/ticket02.jpg" alt=""></a>
            <br> 
            <div>
              <h1> Ticket Concert </h1>
              <p class="text-danger"> Please take pictures as evidence. </p>
              <p class="text-danger">**หมายเหตุ รหัสตรวจสอบสถานะการจัดส่ง TH012345678910**</p>    
          </div>
          </div>


<nav>
<ul class="pagination justify-content-center">
    <li class="page-item">
        <a href="index.php" class="page-link">กลับหน้าหลัก</a>
    </li>
    <li class="page-item ">
        <a href="zone.php" class="page-link">กลับสู่หน้าจองตั๋วบัตร</a>
    </li>
    <li class="page-item">
      <a href="login.php" class="page-link"> ออกจากระบบ </a>
  </li>
</ul>
</nav>
<br> 


</body>
</html>