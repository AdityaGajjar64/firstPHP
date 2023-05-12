<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login</title>
</head>
<body >
 <div id="page"  style="display:grid; justify-content: center; padding: 20px;">
         <b><h1 style="margin-left: 10px;  margin-top:60px ; text-align: center;"> Log-In </b></h2>
         <div style="  justify-content: center; display:grid ; font-size: 25px ; border: 3px solid red; 
                    width: 100vh;height: 150px; padding: 30px; ">
            <form action="" method="POST" >
                <div >
                         Username  : 
                     <input type="text" name="username" >
                </div>

                <div style="margin-bottom: 20px;margin-left:5px;">
                         <br>
                        Password :
                     <input type="text" name="password" >
                </div>
                
                <div>
                     <input type="submit" value="login" name="logind" style="
                     margin-left: 110px; background-color: cadetblue; border: none; 
                     height: 30px;width: 100px; color:white;">
                </div>
            </form>
                 </div style=""> 
 <center>
             <?php
    $conn= mysqli_connect('localhost','root','','myphp1');
    if(isset($_POST['logind']))
     {         
         $username=$_POST['username'];
         $password=$_POST['password'];       
            $qry=" SELECT * FROM `admin` WHERE username='$username' AND password ='$password' ";
            $run= mysqli_query($conn,$qry);
            $row = mysqli_num_rows($run);

             if($row < 1)
             {
                     ?>
                     <script>
                         alert('details are not vaild !');
                         window.open('adminlogin,php');
                         </script>
                     <?php
             }
             else{
                    $data=mysqli_fetch_assoc($run);
                    $id=$data['id'];
                   
                    echo "<h3> Wellcome Id ".$id."</h3>";
                         session_start();
                         $_SESSION['uid']=$id;
                    ?>
                         <form action="adminhome.php">
                                  <input  type="submit" name="gotoah" value="Enter To Home Page"
                                   style="height:60px;width:80%;background-color:white;font-size:18px">
                          </form>
                    <?php
                 }
            }
    ?>
              </center>
         </div>
   </body>
</html>
