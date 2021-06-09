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

      <div class="col-xl-9 col-md-9 ">

        <div class="container">
          <h2 align="">รายชื่อนักเรียน ม.4</h2>
          <hr>
          <div class="row">

            <?php
            $sql = "SELECT * FROM dpst04 ORDER BY number ASC";
            $query = mysqli_query($conn, $sql);

            ?>

            <?php while ($row = mysqli_fetch_array($query)) { ?>

              <div class="col-xl-4 col-md-6 mb-3">

                <div class="card ">
                  <img src="" class="card-img-top">
                  <div class="card-body">
                    <h5 align="center" class="card-title">น้อง <?php echo $row['nick_name'] ?></h5>
                    <p align="center" class="card-text">
                      <?php echo $row['first_name'] . " " . $row['last_name'] ?>
                      <br>
                      เลขที่ <?php echo $row['number'] ?>
                    </p>
                    <p align="center" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ได้รับหัวใจ <?php echo $row['heart'] ?> ดวง"> <i class="fa fa-heart" style="color:#d63384"></i> <?php echo $row['heart'] ?>
                    </p>

                  </div>

                  <p align="center" class="mb-3">

                    <a href="detail.php?id=<?php echo $row['student_id'] ?>" class="btn btn-primary">รายละเอียด</a>
                    <a href="<?php echo $row['facebook'] ?>" target="_blank" class="btn btn-outline-primary "><i class="fab fa-facebook-f " style="color:#0d6efd"></i></a>

                    <?php if (mysqli_num_rows($m5) == 1) { ?>
                      <?php
                      $s5_id = $_SESSION['student_id'];
                      $limit2_check = "SELECT * FROM heart WHERE s5_id = '$s5_id' AND s4_id = " . $row['student_id'];
                      $check = mysqli_query($conn, $limit2_check);

                      if (mysqli_num_rows($check) == 2) { ?>
                  <div class="card-footer bg-danger" style="border-radius:0 0 15px 15px">
                    <p style="color:white" align="center">ครบโควต้าแล้ว</p>
                  </div>
                  <?php } ?>
                  <?php if(mysqli_num_rows($check) != 2 && $heart == 0 ){ ?>
                    <div class="card-footer bg-danger" style="border-radius:0 0 15px 15px">
                    <p style="color:white" align="center">หัวใจคุณหมดแล้ว</p>
                  </div>
                 
                <?php } if(mysqli_num_rows($check) != 2 && ($heart != 0  )) { ?>
                  <br>
                  <a href="#" class="btn btn-warning mt-1" data-bs-toggle="modal" data-bs-target="#give<?php echo $row['student_id'] ?>">
                    <i class="fas fa-plus"></i>
                    &nbsp; ให้หัวใจ
                  </a>

                <?php } ?>
              <?php } ?>

              </p>
                </div>
              </div>

              <?php if (mysqli_num_rows($m5) == 1) { ?>
                <!-- Modal -->
                <div class="modal fade" id="give<?php echo $row['student_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">ยืนยันการให้หัวใจน้อง<?php echo $row['nick_name'] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <p>จำนวนหัวใจ</p>


                        <form action="./process/give_heart.php" method="post">
                          <input class="d-none" type="text" name="s4_id" value="<?php echo $row['student_id'] ?>">
                          <input class="d-none" type="text" name="s5_id" value="<?php echo $_SESSION['student_id'] ?>">

<?php if($heart == 1 || mysqli_num_rows($check) == 1){ ?>
  <input class="form-control form-control-lg" type="number" name="amount" value="1" min="1" max="1">
<?php }else{ ?>
  <input class="form-control form-control-lg" type="number" name="amount" value="1" min="1" max="2">
<?php } ?>
                        
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                        <button type="submit" name="submit" class="btn btn-warning">ตกลง</button>
                        </form>


                      </div>
                    </div>
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