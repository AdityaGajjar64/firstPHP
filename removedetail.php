<?php
include('connect.php');
error_reporting(0); 
?>
<html>
    <head>
        <title>Enter Details</title>
        <style>
            #li2{
                border-style: none ;
            }
            #li1{
                border:none;
            }
            th{
                text-align: center;
                padding: 20px;
            }
            tr{
                text-align: center;
                padding: 20px;
            }   
        </style>
    </head>
    <body>
        <?php
              include('adminhome.php');
        ?>
        <div class="srchstudent" style="text-align:center; margin-top:50px;">
            <h2>Search Student</h2>
            <form method="POST">
                <label>Standerd :</label>
                <input type="number" name="std" style="margin-right: 30px;">
                <label>Name :</label>
                <input type="text" name="name"style="margin-right: 30px;">
                <input type="submit" name="search">
            </form>
           
            <?php
                    include('connect.php');
                    $std=$_POST['std'];
                    $name=$_POST['name'];
                    if(isset($_POST['search']))
                    {                        
                    $qry ="SELECT * FROM `student` WHERE standerd='$std' and name LIKE '%$name%';";
                    $run= mysqli_query($conn,$qry);
                
                    if($row=mysqli_num_rows($run)<1)
                       {
                             echo "no records for this search !";
                        }       
 
                    else{
                        ?>
                         <table style="text-align:center;padding:20px;border:2px solid black;font-size:20px;margin-left:20%;margin-top: 40px;">
                            <tr>
                                <th>Id</th>
                                <th>Roll No</th>
                                <th>Name</th>
                                <th>Con No</th>
                                <th>Standerd</th>
                                <th>image</th>
                                <th style="color:brown">Delete</th>
                            </tr>
                        <?php
                                 while($data=mysqli_fetch_assoc($run))
                            {                                
                                ?>
                                <tr>
                                    <td> <?php echo $data['stdid']?></td>
                                    <td><?php echo $data['rollno']?></td>
                                    <td><?php echo $data['name']?></td>
                                    <td><?php echo $data['pcount']?></td>
                                    <td><?php echo $data['standerd']?></td>
                                    <td><img src="projimg/<?php echo $data['image'] ?>" style="max-width: 150px;"></td>
                                    <td><a href="dltdone.php?sid=<?php echo $data['stdid']; ?>" style="color:brown">Remove</a></td>
                                 </tr>
                            <?php                          
                            }                         
                        }                     
                    }
                            ?>                            
                         </table>         
        </div>
    </body>
</html>

