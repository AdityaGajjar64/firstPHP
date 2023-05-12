<?php
        session_start();
?>
<html>
        <head>
                <title>Admin Home</title>
                <style>
                        
                        li{
                                display: inline;
                                margin:60px;
                                padding: 10px;
                                border-width:0px 0px 2px 0px  ;
                                border-color: darkslategray; 
                                border-style: solid;                              
                        }
                    
                    li:hover
                        {
                                border:none;
                        }
                </style>
        </head>
        <body>
                <div style="text-align: center;">
                <h1 style="position:relative;color:black;height:30px;">  ADMIN - PAGE</h1>
                  </div>
                  <div style="text-align:center;margin-right: 70px; margin-top: 30px;">
                           <h3>
                           <ul style="list-style-type: none;">
                                   <li id="li1">
                                   <a href="entersd.php" style="text-decoration:none;font-size:large;color:black">
                                   Enter New Details</a>
                                   </li>

                                   <li id="li2"><a href="updatesd.php" style="text-decoration:none;font-size:large;color:black">
                                   Update Details</a>
                                    </li>

                                   <li id="li3"><a href="removedetail.php" style="text-decoration:none;font-size:large;color:black">
                                   Delete Details</a> 
                                   </li>
                                   </ul>
                           </h3>
                  </div>
                  <hr style="margin-top: 40px;">

        </body>
</html>