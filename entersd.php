<?php
error_reporting(0);
include('connect.php');

?>
<html>
    <head>
        <title>Enter Details</title>
        <style>
                  #li1{
                border-width:0px 0px 2px 0px  ;
            }
            #li2{
                border:none;
            }
                
            #li3{
                border:none;
            }
            #li1:hover{
               margin: 60px;
            }
            
            .input{
                margin: 10px;
                height: 30px;
                color: darkslategray;
                font-weight: bolder;
                text-align: center;
                display: inline-block;
                border-width: 0px 0px 2px 0px;
                border-style: solid;
                border-color: black;
                width:48%;
                box-shadow: 0px 8px 12px px rgb(150,150,150);
            }
            label{
                width: 140px;
                display: inline-block;
                font-weight: bold;  
                }
            #mainp{
                margin-top: 40px;
              }  
            #mainp{
                border-radius: 20px;
                height: auto
                
            }
            #imgf{
                width:15%;
                margin-left: 15px;
            }
            input::file-selector-button{
    color: honeydew;   
    border: none;
}
        </style>
    </head>
    <body>
        <?php
              include('adminhome.php');
        ?>
        <div id="mainp" style="text-align:center;margin-left:30% ;margin-right:30%;border-width:3px 3px 3px 3px; ">
        <form method="POST" style="margin-left: 20%;text-align: left;margin-top: 28px;font-size:20px; display: flexbox;justify-content:end;
        " enctype="multipart/form-data">
           <label> Student ID :</label>
                <input class="input"type="number" max="5000" min="0001" name="stid" required>
                <br>
           <label> Roll No :</label>
                <input class="input" type="number" max="5000" min="0001" name="rollno" required>
                <br>
            <label > Name :</label>
                <input class="input" type="text" name="name" required>
                <br>
            <label>Contect No :</label>
                <input class="input" type="tel" name="pno" required>
                <br>
            <label> Standard :</label>
                <input class="input" type="number" max="12" min="1" name="std" required>
                <br>
           <label> Image :</label>
                <input class="input" id="imgf" type="file" name="simg" value="" style="position:absolute;"
             required>
                <br>
                <input  type="submit" name="enterd" style="
                    margin-bottom:20px; 
                     margin-left: 80px;margin-top:50px; background-color: white;border:none; 
                     height: 40px;width: 150px;font-size:medium;border:2px solid black;border-radius:20px">
        </form>
        </div>
    </body>
</html>
<?php
        if(isset($_POST['enterd']))
        {
            $id=$_POST['stid'];
            $rollno=$_POST['rollno'];
            $name=$_POST['name'];
            $pno=$_POST['pno'];
            $std=$_POST['std'];
            $imgname=$_FILES['simg']['name'];
            $tmpname=$_FILES['simg']['tmp_name'];
            echo $tmpname;
            move_uploaded_file($tmpname,"projimg/$imgname");

            $iqry=" INSERT INTO `student`(`stdid`, `rollno`, `name`, `pcount`, `standerd`,`image`) VALUES 
            (' $id','$rollno','$name','$pno','$std','$imgname')";
            $run=   mysqli_query($conn,$iqry);
            if($run==true)
            {
                ?>
                <script>
                        alert('Data Entered 👍');
                        window.open('adminlogin.php');
                </script>
                <?php
            }
        }
?>
