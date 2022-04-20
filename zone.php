<?php
  session_start();
  include('server.php'); 
  //เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
  require_once 'condb.php';
  //query
  $query = "SELECT * FROM tbl_table ORDER BY id ASC";
  $result = mysqli_query($condb, $query); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

  <link rel="stylesheet" href="Zone_style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <!--- Bootstrap 5 --->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
  <title>Booking Tickets</title>
  <style type="text/css">
    .devbanban{
    background-color: #ffffff;
    }
    </style>

</head>
<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-danger">
    <div class="container-fluid">
      <!-- Logo navbar 'mx-3 = ระยะห่าง', 'text-white = สีข้อความ' --> 
      <a class="navbar-brand mx-3 text-white" href="index.php">THE CONCERT</a>

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
          <a href="index.php?logout='0'" class="btn btn-danger">Logout</a>
        </ul>                 
      </div>
    </div>
  </nav>

<tbody style="background-color: #330000;">
    <div class="container">
      <div class="row">
        <div class="col-sm-2 col-md-2"></div>
        <div class="col-12 col-sm-11 col-md-7 devbanban" style="margin-top: 50px;">
          <br>
          <h4 align="center" style="color: red;">กรุณาเลือกที่นั่งของคุณตามต้องการ</h4>
          <br>
          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="alert alert-warning" role="alert" >
                <center><h2>STAGE</h2></center>
              </div>
              <hr>
              <div class="row" style="margin-bottom: 20px;">
                <?php foreach ($result as  $row) {
                  if($row['table_status']==0){ //ว่าง
                    echo '<div class="col-2 col-md-2 col-sm-2" style="margin: 5px;">';
                  echo '<a href="booking.php?id='.$row["id"].'&act=booking"class="btn btn-success" target="_blank">'.$row['table_name'].'</a></div>';
                    }else{ //ถูกจอง
                      echo '<div class="col-2 col-md-2 col-sm-2" style="margin: 5px;">';
                    echo '<a href="#" class="btn btn-secondary disabled" target="_blank">'.$row['table_name'].'</a></div>';
                      }
                    } ?>
                  </div>
                  <p>*เขียว = ว่าง, เทา = ไม่ว่าง</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <br>
</tbody>
</body>
</html>
