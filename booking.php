<?php
    session_start();
    include('server.php'); 
    //เรียกใช้งานไฟล์เชื่อมต่อฐานข้อมูล
    require_once 'condb.php';
    //query
    $query = "SELECT * FROM tbl_table WHERE id=$_GET[id]";
    $result = mysqli_query($condb, $query);
    $row = mysqli_fetch_array($result);
    //print_r($row);
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!--- Bootstrap 5 --->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <title>แสดงข้อมูลโต๊ะเพื่อทำการจอง</title>
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
          <h4 align="center" style="color: red;">กรุณากรอกข้อมูลเกี่ยวกับการจองที่นั่ง</h4>
          <br>
          
          <p class="text-primary"> ▶ วันที่ & สถานที่แสดง : วันที่ 2022.04.21 เวลา 23.00 น. & โอลิมปิกพาร์ค โอลิมปิกฮอลล์ </p>

          <div class="row">
            <div class="col-sm-12 col-md-12">
              <div class="alert alert-warning" role="alert">
                <center><font color="red"> <b> บันทึกการเลือกที่นั่ง * จำกัด 1 การจองต่อ 1 ที่นั่ง </b></font> </center>
              </div>
              <hr>
                <div style="margin-left: 20px;">
                  <form action="save_booking.php" method="post">
                    <div class="form-group row">
                      <label class="col-sm-2 ">เลขที่นั่ง</label>
                      <div class="col-sm-4">
                        <input type="text" name="table_name" class="form-control" disabled value="<?php echo $row['table_name'];?>">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 ">ผู้จอง</label>
                      <div class="col-sm-7">
                        <input type="text" name="booking_name" class="form-control" required placeholder="ชื่อผู้จอง" minlength="5">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 ">วันที่</label>
                      <div class="col-sm-5">
                        <!-- //ลบ min mix จะสามารถเลือก Y-m-d ได้ -->
                        <input type="date" name="booking_date" class="form-control" required value="<?php echo date('Y-m-d');?>" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d');?>">
                      </div>
                      <label class="col-sm-1 ">เวลา</label>
                      <div class="col-sm-3">
                        <input type="time" name="booking_time" class="form-control" required placeholder="เวลา">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 ">เบอร์โทร</label>
                      <div class="col-sm-7">
                        <input type="text" name="booking_phone" class="form-control" required placeholder="เบอร์โทร" minlength="10" maxlength="10">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 ">ราคา</label>
                      <div class="col-sm-3">
                        <input type="text" name="booking_staff" class="form-control" readonly value="1,999 Baht.">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 "></label>
                      <div class="col-sm-10">
                       <input type="hidden" name="table_id" value="<?php echo $_GET['id'];?>">
                       <button type="submit" class="btn btn-success">บันทึกการจอง</button>
                       
                       <a href="zone.php" class="text-light btn btn-warning">กลับสู่หน้าจองตั๋วบัตร</a>
                       <br>
                      </div>
                    </div>
                  </form>
                  </div>
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