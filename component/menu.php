<div class="col-xl-3 col-md-3 mt-5 mb-5">
        <div class="list-group list-group-flush">
          <a href="
            <?php

                $student_id = $_SESSION['student_id'];

                $sql = "SELECT * FROM dpst04 WHERE student_id = '$student_id' ";
                $m4 = mysqli_query($conn, $sql);
        
                $sql1 = "SELECT * FROM dpst05 WHERE student_id = '$student_id' ";
                $m5 = mysqli_query($conn, $sql1);
        
                if(mysqli_num_rows($m4) == 1){
                    echo "./user_page.php";
                    
                }else if(mysqli_num_rows($m5) == 1){
                    echo "./admin_page.php";
        

                }        
            
            ?>
          
            " 
            class="list-group-item list-group-item-action 
            <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/user_page.php" || $_SERVER['PHP_SELF'] == "/dpst_somtob/admin_page.php"  ){
                    echo "active";
                }else{
                    echo "";
                }
            ?>
            " aria-current="true">
            <i class="fa fa-home"
            <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/user_page.php" || $_SERVER['PHP_SELF'] == "/dpst_somtob/admin_page.php"  ){
                    echo "style='color:white' ";
                }else{
                    echo "";
                }
            ?>
            ></i>
            &nbsp; หน้าแรก 
          </a>
          <a href="ranking.php" class="list-group-item list-group-item-action 
          <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/ranking.php"  ){
                    echo "active";
                }else{
                    echo "";
                }
            ?>
          
          ">
          <i class="fas fa-trophy"
          <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/ranking.php"  ){
                    echo "style='color:white' ";
                }else{
                    echo "";
                }
            ?>
          ></i>
          &nbsp; จัดอันดับ
        
        </a>
          <a href="detail.php?id=<?php echo $_SESSION['student_id'] ?>" 
          class="list-group-item list-group-item-action
          <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/detail.php?id=". $_SESSION['student_id']){
                    echo "active";
                }else{
                    echo "";
                }
            ?>
          ">

          <i class="fa fa-heart "
          <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/detail.php?id=". $_SESSION['student_id']){
                    echo "style='color:white' ";
                }else{
                    echo "";
                }
            ?>
          ></i>
                
              
              <?php
                if(mysqli_num_rows($m4) == 1){
                    echo "&nbsp; รายละเอียดการรับหัวใจ";
                    
                }else if(mysqli_num_rows($m5) == 1){
                    echo "&nbsp; รายละเอียดการให้หัวใจ";
        
    
                } 
              ?>
            
            </a>
          <a href="student4.php" class="list-group-item list-group-item-action 
          <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/student4.php"  ){
                    echo "active";
                }else{
                    echo "";
                }
            ?>
          ">
          <i class="fas fa-user-friends"
          <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/student4.php"){
                    echo "style='color:white' ";
                }else{
                    echo "";
                }
            ?>
          ></i>
          &nbsp; รายชื่อนักเรียน ม.4
        </a>
          <a href="student5.php" class="list-group-item list-group-item-action 
          <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/student5.php"  ){
                    echo "active";
                }else{
                    echo "";
                }
            ?>
          " >
          <i class="fas fa-user-friends"
          <?php
                if($_SERVER['PHP_SELF'] == "/dpst_somtob/student5.php"){
                    echo "style='color:white' ";
                }else{
                    echo "";
                }
            ?>
          ></i>
          
          &nbsp; รายชื่อนักเรียน ม.5
        </a>
          <a href="
          <?php
            if(mysqli_num_rows($m4) == 1){
                echo "./user_page.php?logout=1";
                
            }else if(mysqli_num_rows($m5) == 1){
                echo "./admin_page.php?logout=1";

            } 
          
          ?>
          
          " 
          class="list-group-item list-group-item-action " style="color:red" >
          <i class="fas fa-sign-out-alt" style="color:red"></i>
          &nbsp; ออกจากระบบ
        </a>
          </div>
      </div>