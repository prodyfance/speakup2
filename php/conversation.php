<style>
       strong{
              color:red;
       }
</style>
<?php require_once '../config.php'; 

          $id_am=$_GET['id_am'];

          
          $sql='SELECT * FROM `conversation` WHERE id_am='.$id_am.'';
          $result=mysqli_query($con,$sql);
          $row=mysqli_fetch_array($result);
          if ($result->num_rows <= 0){
              $sql3='INSERT INTO `conversation`(`id_am`) VALUES ('.$id_am.')';
              $result3=mysqli_query($con,$sql3);
              $row=mysqli_fetch_array($result3);
          }


          $sql2='SELECT * FROM `message` WHERE id_cv='.$row['id_cv'].'';
          $result2=mysqli_query($con,$sql2);
          if ($result->num_rows <= 0){
              echo'';
          }else{
              
          while ($row2=mysqli_fetch_array($result2)) {
            if ($row2['id_send']!=3) {
              echo'rec';
            }else {
              echo 'send';
            }}
       }

















           
          