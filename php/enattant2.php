<style>
       strong{
              color:red;
       }
</style>
<?php require_once '../config.php'; 

          

          if (isset($_GET['con'])) {
              $id_at=$_GET['id_att'];
             $sql1='INSERT INTO `amis`(`id_us1`, `id_us2`) VALUES ('.$id_at.',3)';
          $result1=mysqli_query($con,$sql1);
          $sql="DELETE FROM `enattent` WHERE id_att=$id_at and id_req=3 OR id_att=3 and id_req=$id_at";
            $result=mysqli_query($con,$sql);
            if ($result && $result1) {
              header("location:../");
       }else {
              echo '<strong>ERORR</strong>';
       }
          }else {
              $id_at=$_GET['id_att'];
            $sql="DELETE FROM `enattent` WHERE id_att=$id_at and id_req=3 OR id_att=3 and id_req=$id_at";
            $result=mysqli_query($con,$sql);
            if ($result) {
              header("location:../");
       }else {
              echo '<strong>ERORR</strong>';
       }
          }
         

// if ($result && $result1) {
//        header("location:../");
// }else {
//        echo '<strong>ERORR</strong>';
// }


       ?>