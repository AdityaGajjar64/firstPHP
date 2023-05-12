<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
      function opt()
      {
        var opts="<option></option>"
        for(var i=1;i<=12;i++)
        {
            opts +="<option>"+i+"</option>"
        }
        document.getElementById('std').innerHTML= opts;
      }
    </script>
    <title>Search</title>
</head>

<body onload="opt()"  >
 <div id="page" style="display:grid; justify-content: center; padding: 20px;">
         <b><h1 style="margin-left: 10px; margin-top: 80px;  text-align: center;">  Search Student details</b></h2>
         <div style="  justify-content: center; display:grid ; font-size: 25px ; border: 2px solid cadetblue; 
                    width: 100vh;height: 150px; padding: 25px; margin-bottom: 20px;">
                       <form method="POST">
                <div style="margin-left: 5px;">

                 Standard  : 
                     <select id="std" name="std" style="height: 30px;border: none;font-size: 15px ; ">name</select>
                </div>

                <div style="margin-bottom: 20px;">
                         <br>
                        Roll No  :
                     <input name="rn" type="number" min="1" max="1100" style="font-size: 15px ;" >
                   
                </div> 
              
                <div>
                     <input type="submit" name="submit"  style="margin-left: 65px; background-color: cadetblue;
                                                  border: none; height: 30px;width: 60px;">                                     
                </div>
              </form>
        </div> 
        <?php
                    error_reporting(0);
                    include('connect.php');
                    $std=$_POST['std'];
                    $rn=$_POST['rn'];
                    if(isset($_POST['submit']))
                    {           
                    $qry ="SELECT * FROM `student` WHERE standerd='$std' and rollno='$rn';";
                    $run= mysqli_query($conn,$qry);
                
                    if($row=mysqli_num_rows($run)<1 )
                       {
                             echo "no records for this search !";
                        }        
                    else{
                        ?>
                         <table style="width:100%;text-align:center;padding:30px;border:2px solid black;font-size:20px;margin-top: 40px;">
                            <tr>
                                <th>Id</th>
                                <th>Roll No</th>
                                <th>Name</th>
                                <th>Con No</th>
                                <th>Standerd</th>
                                <th>image</th>
                                <th>to change</th>
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
                                    <td><a href="updatechange.php?sid=<?php echo $data['stdid']; ?>">Edit</a></td>
                                 </tr>
                            <?php
                            }
                        } 
                    }
                            ?>
             
        <div>
            <a href="adminlogin.php" style="margin-left: 260px ; ">ADMIN  LOG-IN</a>
        </div>
</div>
</body>
</html>