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

    <a href="<?php echo $_SESSION['facebook'] ?>" target="_blank" class="btn btn-outline-primary"><i class="fab fa-facebook-f " style="color:#0d6efd"></i></a>




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

      <div class="col-xl-9 col-md-9 mt-5">

        <div class="container">



          <?php

          $student_id = $_GET['id'];

          $sql = "SELECT * FROM dpst04 WHERE student_id = '$student_id' ";
          $m4 = mysqli_query($conn, $sql);

          $sql1 = "SELECT * FROM dpst05 WHERE student_id = '$student_id' ";
          $m5 = mysqli_query($conn, $sql1);

          if (mysqli_num_rows($m4) == 1) {
            $row = mysqli_fetch_array($m4);
          } else if (mysqli_num_rows($m5) == 1) {
            $row = mysqli_fetch_array($m5);
          }

          ?>


          <div class="card">
            <img src="" class="card-img-top">
            <div class="card-body">
              <h5 align="center" class="card-title">
                <?php
                if (mysqli_num_rows($m4) == 1) {
                  echo "น้อง";
                } else if (mysqli_num_rows($m5) == 1) {
                  echo "พี่";
                }
                ?>


                <?php echo $row['nick_name'] ?>
              </h5>
              <p align="center" class="card-text"><?php echo $row['first_name'] . " " . $row['last_name'] ?></p>
              <p align="center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ได้รับหัวใจ <?php echo $row['heart'] ?> ดวง">
                <i class="fa fa-heart" style="color:
               <?php
                if (mysqli_num_rows($m4) == 1) {
                  echo "#d63384";
                } else if (mysqli_num_rows($m5) == 1) {
                  echo "#ffc107";
                }
                ?>
               
               "></i>
                <?php echo $row['heart'] ?>
              </p>
              



            </div>
          </div>


          <h5 class="mt-4">
            <?php
            if (mysqli_num_rows($m4) == 1) {
              echo "ประวัติการได้รับหัวใจ";
            } else if (mysqli_num_rows($m5) == 1) {
              echo "ประวัติการให้หัวใจ";
            }
            ?>
          </h5>
          <hr>


          <div class="row">

            <?php
            $sql = "SELECT * FROM heart WHERE s4_id = '$student_id' ";
            $query = mysqli_query($conn, $sql);
            $sql1 = "SELECT * FROM heart WHERE s5_id = '$student_id' ";
            $query1 = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($query) > 0) {
              while ($row = mysqli_fetch_array($query)) {
                $query2 = mysqli_query($conn, "SELECT * FROM dpst05 WHERE student_id = " . $row['s5_id']);
                $num = mysqli_num_rows($query2);

                while ($result = mysqli_fetch_array($query2)) {

            ?>

                  <div class="col-xl-4 col-md-6 mb-3">

                    <div class="card">
                      <img src="" class="card-img-top">
                      <div class="card-body">
                        <h5 align="center" class="card-title">พี่ <?php echo $result['nick_name'] ?></h5>
                        <p align="center" class="card-text">
                          <?php echo $result['first_name'] . " " . $result['last_name'] ?>
                          <br>
                          เลขที่ <?php echo $result['number'] ?>
                        </p>

                        <p style="color:#ffc107" align="center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ให้มา <?php echo $num ?> ดวง">
                          <i class="fa fa-heart" style="color:#ffc107"></i> x
                          <?php echo $num ?>
                        </p>


                      </div>
                      <p align="center" class="mb-3">

                        <a href="detail.php?id=<?php echo $result['student_id'] ?>" class="btn btn-primary">รายละเอียด</a>
                        <a href="<?php echo $result['facebook'] ?>" target="_blank" class="btn btn-outline-primary "><i class="fab fa-facebook-f " style="color:#0d6efd"></i></a>
                      </p>
                    </div>
                  </div>

                <?php } ?>

              <?php } ?>

            <?php } ?>



            <?php
            if (mysqli_num_rows($query1) > 0) {
              while ($row1 = mysqli_fetch_array($query1)) {
                $query3 = mysqli_query($conn, "SELECT * FROM dpst04 WHERE student_id = " . $row1['s4_id']);
                $num1 = mysqli_num_rows($query3);

                while ($result = mysqli_fetch_array($query3)) {

            ?>

                  <div class="col-xl-4 col-md-6 mb-3">

                    <div class="card">
                      <img src="" class="card-img-top">
                      <div class="card-body">
                        <h5 align="center" class="card-title">น้อง <?php echo $result['nick_name'] ?></h5>
                        <p align="center" class="card-text">
                          <?php echo $result['first_name'] . " " . $result['last_name'] ?>
                          <br>
                          เลขที่ <?php echo $result['number'] ?>
                        </p>

                        <p style="color:#d63384" align="center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ให้ไป <?php echo $num1 ?> ดวง">
                          <i class="fa fa-heart" style="color:#d63384"></i> x
                          <?php echo $num1 ?>
                        </p>


                      </div>
                      <p align="center" class="mb-3">

                        <a href="detail.php?id=<?php echo $result['student_id'] ?>" class="btn btn-primary">รายละเอียด</a>
                        <a href="<?php echo $result['facebook'] ?>" target="_blank" class="btn btn-outline-primary "><i class="fab fa-facebook-f " style="color:#0d6efd"></i></a>
                      </p>
                    </div>
                  </div>



                <?php } ?>

              <?php } ?>

            <?php } ?>

          </div>







        </div>
      </div>




    </div>
  </div>
  </div>

  </div>

  </div>


  <?php include('./component/js.php') ?>



</body>

</html>