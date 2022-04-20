<?php 
    // function ตรวจสอบว่า เข้าสู่ระบบริยัง? ถ้ายังไม่เข้าให้ แสดงหน้า Login
    session_start();
    if (!isset($_SESSION['username'])) {    //ตรวจสอบว่า ได้เข้าสู่ระบบริยัง?
        $_SESSION['msg'] = "You must log in first"; //ถ้ายังให้แสดงข้อความ
        header('location: even.php'); //ให้ไปหน้า even.php ก่อน 
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }
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
                <a class="text-white btn btn-info">Welcome <strong><?php echo $_SESSION['username']; ?></strong> </a>
            </ul>
            <ul class="navbar-nav mx-1 mb-2 mb-lg-0">
                  <a href="login.php" class="btn btn-danger">Logout</a>
            </ul>                 
            </div>
        </div>
    </nav>


    <div class="homecontent">
        <!--  notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'] )) : ?>  
        <!-- <p class="Text-Center">Do you have to buy a ticket? <a href="even.php" style="color: blue;">Home Page</a></p> -->
        <?php endif ?>       
    </div>

     
    <div class="container">
      <div class="text-center">
      <br>

      <div class="alert alert-danger">
        <strong><h2><p class="center text-dark">THE CONCERT recommends :  TREASURE 1ST-CONCERT  </p> </h2> </strong>
      </div>     
      </div>

      <!---รูปภาพ--->
      <img src="Picture/c7.jpg" width="450" height="600" alt="" class="float-start">
     &#160; &#160; &#160; 
      <!---วิดีโอ--->
      <iframe width="800" height="600" src="https://www.youtube.com/embed/cUIBOPt3hX0" title="YouTube video player" 
        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
         allowfullscreen></iframe>

        <div style="text-align:center;width:100%;">
      <h1><p class="text-primary">CONCERT : TREASURE 1ST-CONCERT </p></h1>
      <p class="text-primary"> 🔔ขายบัตรตั้งแต่วัน 2022.04.15 เวลา 10.00 น. </p>
            <p class="text-primary"> ▶ ประกาศเปิดจำหน่ายบัตร
            - จองตั๋วออนไลน์: 2022.04.17 เป็นต้นไป  </p>
            <p class="text-primary"> ▶ วันที่ & สถานที่แสดง : วันที่ 2022.04.21 เวลา 23.00 น. & โอลิมปิกพาร์ค โอลิมปิกฮอลล์ </p>

      <a href="zone.php" class="btn btn-danger">!...BUY NOW...!</a>
      <br>  
         </div>
    </div>
    <br> 
    <!---หน้าที่ใช้งาน--->
    <nav>
      <ul class="pagination justify-content-center">
          <li class="page-item active">
              <a href="index.php" class="page-link">Home page</a>
          </li>
          <li class="page-item">
              <a href="twopage.php" class="page-link">2</a>
          </li>
          <li class="page-item">
              <a href="lastpage.php" class="page-link">Last page</a>
          </li>
      </ul>
      <br>
  </nav>
    <hr>
      <div class="text-center">
  <p class="text-danger">  แจ้งปัญหาได้ที่ FB: The Concert App หรือ Gmail: TheConcert@TheConcert.com  </p>
  <br></div>


</body>
</html>
