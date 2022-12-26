<?php
$db = new mysqli("localhost","root","","alo");
if(!isset($_SESSION['admin_email'])){
    echo "<script>window.open('login.php','_self')</script>";

}else{
    ?>

    <?php
    if(isset($_GET['delete_user'])){
        $delete_id=$_GET['delete_user'];
        $delete_pro="delete from admin where a_id='$delete_id'";
        $run_delete=mysqli_query($db,$delete_pro);
        if($run_delete){
            echo "<script>alert('One user has been deleted')</script>";
            echo "<script>window.open('index.php?view_user','_self') </script>";
        }
    }

    ?>
    <?php } ?>