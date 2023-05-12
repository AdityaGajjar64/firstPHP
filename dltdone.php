
<?php

    include('connect.php');
    $id=$_REQUEST['sid'];

    $qry="DELETE FROM `student` WHERE stdid='$id'";
    $run=mysqli_query($conn,$qry);
    if($run==true)
    {
        ?>
        <script>
                    alert("Data Deleted !!");
                    window.open('removedetail.php','_self');
        </script>
        <?php
    }
?>
