<style>
       strong{
              color:red;
       }
</style>
<?php require_once '../config.php'; 

           $sql='insert into enattent (id_att,id_req) value(....,'.$_GET['id_aj'].')';
           $result=mysqli_query($con,$sql);

if ($result) {
       header("location:../");
}else {
       echo '<strong>ERORR</strong>';
}


       ?>