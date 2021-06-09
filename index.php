<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>|| DPST SOMTOB MISSION ||</title>
    <?php include('component/css.php') ?>
</head>

<body>


    <div class="container-fluid pt-xl-5 pb-xl-5 mt-xl-5" style="max-width: 550px; margin:auto;  border-radius:15px;background:white;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
        <form action="./process/login_process.php" method="post" style="max-width:400px; margin:auto">
            <h1 align="center">ลงชื่อเข้าใช้</h1>
            <hr>
            <?php if (isset($_SESSION['error'])) { ?>
                <div class="alert alert-danger mb-3" role="alert" style="max-width:400px; margin:auto">
                    <?php
                    echo $_SESSION['error'];
                    unset($_SESSION['error']);
                    ?>
                </div>
            <?php } ?>
            <div class="input-group">
                <input class="form-control" style="height:50px;background:#f5f5f7" type="text" name="student_id" placeholder="เลขประจำตัวนักเรียน">
            </div>
            <div class="input-group mt-3">
                <button style="height:50px" type="submit" name="submit" class="btn btn-primary form-control">เข้าสู่ระบบ</button>
            </div>
        </form>
    </div>


</body>

</html>