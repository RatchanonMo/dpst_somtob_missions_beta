<?php
include('./connect/connect.php');
session_start();
if (!isset($_SESSION['nick_name'])) {
  header('location:./index.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['student_id']);
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
    <a type="button" style="font-size:20px; margin-left:15px;color:#d63384;text-decoration:none" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ขณะนี้คุณมีหัวใจ <?php echo $heart ?> ดวง" href="">

      <i class="fa fa-heart" style="color:#d63384"></i> <?php echo $heart ?>

    </a>

    <div class="row">
      <?php
      include('./component/menu.php');
      ?>

      <div class="col-xl-9 col-md-9 ">

        <div class="container">
          <h2 align="">มิชชั่นทั้งหมด</h2>
          <hr>

        </div>
      </div>
    </div>

  </div>

  </div>


  <?php include('./component/js.php') ?>



</body>

</html>