<?php
include('./connect/connect.php');
session_start();
if (!isset($_SESSION['nick_name'])) {
  header('location:./index.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  header('location:./index.php');
}
$student_id = $_SESSION['student_id'];

$sql = "SELECT * FROM dpst04 WHERE student_id = '$student_id' ";
$m4 = mysqli_query($conn, $sql);

$sql1 = "SELECT * FROM dpst05 WHERE student_id = '$student_id' ";
$m5 = mysqli_query($conn, $sql1);

if (mysqli_num_rows($m4) == 1) {
  $row = mysqli_fetch_array($m4);
  $heart = $row['heart'];
}
if (mysqli_num_rows($m5) == 1) {
  $row = mysqli_fetch_array($m5);
  $heart = $row['heart'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>|| DPST SOMTOB MISSIONS ||</title>

  <?php include('./component/css.php') ?>
</head>

<body>

  <div class="container mt-5">
    <h2>สวัสดี <span style="color:#0d6efd"><?php echo $_SESSION['nick_name'] ?></span></h2>

    <a href="<?php echo $_SESSION['facebook'] ?>" target="_blank" class="btn btn-outline-primary"><i class="fab fa-facebook-f  " style="color:#0d6efd"></i></a>







    <a style="font-size:20px; margin-left:15px;color:

<?php


if (mysqli_num_rows($m4) == 1) {
  echo "#d63384";
} else if (mysqli_num_rows($m5) == 1) {
  echo "#ffc107";
}

?>



;text-decoration:none" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ขณะนี้คุณมีหัวใจ <?php echo $heart ?> ดวง" href="">


      <i class="fa fa-heart" style="color:

        <?php



        if (mysqli_num_rows($m4) == 1) {
          echo "#d63384";
        } else if (mysqli_num_rows($m5) == 1) {
          echo "#ffc107";
        }

        ?>
    
   
    
    
    "></i> <?php echo $heart ?>
    </a>

    <div class="row">
      <?php
      include('./component/menu.php');
      ?>

      <div class="col-xl-9 col-md-9">

        <div class="container">
          <h2 align="">จัดอันดับ</h2>
          <hr>
          <div class="row">


          <?php
          $sql = "SELECT * FROM dpst04 ORDER BY heart DESC";
          $query = mysqli_query($conn, $sql);
          $i = 0;
          ?>

          <?php while ($row = mysqli_fetch_array($query)) {
            $i++;
          ?>
            <?php if ($i == 1) { ?>
            <div class="col-xl-4 col-lg-4 col-md-6"></div>
              <div class="col-xl-4 col-lg-4 col-md-6 mb-3" style="margin:0 auto">

                <div class="card">
                  <img src="" class="card-img-top">
                  <div class="card-body">
                    <h5 align="center" class="card-title">น้อง <?php echo $row['nick_name'] ?></h5>
                    <p align="center" class="card-text"><?php echo $row['first_name'] . " " . $row['last_name'] ?></p>
                    <p align="center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ได้รับหัวใจ <?php echo $row['heart'] ?> ดวง"> <i class="fa fa-heart" style="color:#d63384"></i> <?php echo $row['heart'] ?>
                    </p>
                  </div>
                  <p align="center" class="mb-3"><a href="detail.php?id=<?php echo $row['student_id'] ?>" class="btn btn-primary">รายละเอียด</a></p>

                </div>
              </div>
            <div class="col-xl-4 col-lg-4 col-md-6"></div>


            <?php } ?>
            
              <?php if ($i > 1 && $i < 8) { ?>
                
                  <div class="col-xl-4 col-lg-4 col-md-6 mb-3">

                    <div class="card">
                      <img src="" class="card-img-top">
                      <div class="card-body">
                        <h5 align="center" class="card-title">น้อง <?php echo $row['nick_name'] ?></h5>
                        <p align="center" class="card-text"><?php echo $row['first_name'] . " " . $row['last_name'] ?></p>
                        <p align="center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ได้รับหัวใจ <?php echo $row['heart'] ?> ดวง"> <i class="fa fa-heart" style="color:#d63384"></i> <?php echo $row['heart'] ?>
                        </p>
                      </div>
                      <p align="center" class="mb-3"><a href="detail.php?id=<?php echo $row['student_id'] ?>" class="btn btn-primary">รายละเอียด</a></p>

                    </div>
                  </div>

              <?php } ?>
          <?php } ?>
            </div>
              
        </div>
      </div>

    </div>

  </div>


  <?php include('./component/js.php') ?>



</body>

</html>