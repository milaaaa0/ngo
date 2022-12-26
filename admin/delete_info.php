<?php
$db = new mysqli("localhost","root","","alo");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{
    ?>

    <?php
    if(isset($_GET['delete_info'])){
        $delete_id=$_GET['delete_info'];
        $delete_pro="delete from personal_info where id='$delete_id'";
        $run_delete=mysqli_query($db,$delete_pro);
        if($run_delete){
            echo "<script>alert('One information has been deleted')</script>";
            echo "<script>window.open('index.php?view_info','_self') </script>";
        }
    }

    ?>
    <?php } ?>