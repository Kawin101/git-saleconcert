<?php 

    // function ตรวจสอบว่า เข้าสู่ระบบริยัง? ถ้ายังไม่เข้าให้ แสดงหน้า Login
    session_start();

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
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

    <!-- 
    <div class="homeheader">
        <h2> All EVEN</h2>
    </div>
    -->

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
            
            <p class="Text-Center">Do you have to buy a ticket? <a href="home.php" style="color: blue;">Home Page</a></p>

        <?php endif ?>
        


        
        
            <!-- 
                // Link และ ตรวจสอบว่า login แล้วยัง ถ้า Login แล้ว จะทำการ Logi
            <p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
                // linke แสดง 'Welcome #ตามด้วยชื่อ username'
            <p>Welcome <strong><?php //echo $_SESSION['username']; ?></strong></p>
            -->
        

    </div>

</body>
</html>
