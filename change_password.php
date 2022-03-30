<?php
    session_start();
    include('server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password Page</title>
    
    <!-- Connection with bootstrap5-->
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
                <a href="index.php" class="text-white btn btn-info">Home</a>
            </ul>
            <ul class="navbar-nav mx-1 mb-2 mb-lg-0">
                  <a href="login.php" class="btn btn-danger">Login</a>
              </ul>                 
          </div>
        </div>
    </nav>
    
    <div class="header">
        <h2>Change Password</h2>
    </div>
    <!-- ดึงข้อมูลจากไฟล์ reset_db.php มาทำงาน-->
    <form action="change_password_db.php" method="post">
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- จบการทำงาน ของ function if-->
        <div class="input-group">
            <label for="username">Username</label>
            <input type="username" name="username">
        </div>
        <div class="input-group">
            <label for="password_1">Old Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">New Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <label for="password_3">Confirm New Password</label>
            <input type="password" name="password_3">
        </div>

            <button type="submit" name="change_password_user" class="" >Change Password</button>
            <button type="reset" name="reset" >Cancel</button>
        </div>
        <p>Not yet a member? <a href="login.php">Sign in</a></p>
    </form>

</body>
</html>