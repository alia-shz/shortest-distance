<?php
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=wayout', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $errors = [];
        if(isset($_POST["submit"]))
        {
            echo "button clicked";
            $Building_Name = $_POST['Building_Name'];
            $No_of_Floors = $_POST['No_of_Floors'];
            $AdminMail = $_POST['AdminMail'];      

        
            if (!$Building_Name) {
                $errors[] = 'Building Name is required';
            }
        
            if (!$AdminMail) {
                $errors[] = 'Admin Mail is required';
            }
            /*$sql = "INSERT INTO tbl_admin SET
            Building_Name = '$Building_Name',
            No_of_Floors = '$No_of_Floors',
            Admin_ID = '$Admin_ID'
            ";*/
            $statement = $pdo->prepare("INSERT INTO tbl_building (building_name,Nooffloors,AdminMail) VALUES (:Building_Name,:No_of_Floors,:AdminMail)");
            $statement->bindValue(':Building_Name', $Building_Name);
            $statement->bindValue(':No_of_Floors',  $No_of_Floors);
            $statement->bindValue(':AdminMail', $AdminMail);
        
            $statement->execute();

            /*$conn = mysqli_connect("localhost","root","") or die("error");
            $db_select = mysqli_select_db($conn,"wayout") or die("error");
            $res =mysqli_query($conn,$sql) or die("error");*/
        }
        ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <!-- For a resposive website-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmerGPS</title>
        <!--link css file-->
         <link rel="stylesheet" href="css/admin.css">
       
    </head>
    <body>
        <!--header starts here-->
        <section class = "header">
            <div class = "wrapper"> 
                <div class ="logo">  
                    <img src="images/Logo.png" alt="Logo" class="img_pic" >
                </div>
                <div class = "menu text-right">
                    <ul>
                        <li>
                            <a href="client.html">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>   
            <div class="clearfix"></div>      
        </section>
        <!--header ends here-->

        <!--Addition of Building-->
        <section class = "Build-add">
            <div class = "wrapper"> 
            <h1>Add Admin</h1>
            <br></br>
            <form action="" method="POST">
                <table class = "tbl-30 ">
                    <tr>
                        <td >Building Name:</td>
                        <td class = "text-center">
                            <input type="text" name= "Building_Name" placeholder="Building Name" size="40%" style="background-color: white; font: 1em sans-serif;">
                        </td>
                    </tr>
                    <tr>
                        <td>No of Floors:</td>
                        <td class = "text-center">
                            <input type="text" name= "No_of_Floors" placeholder="No of floors" size="40%" style="background-color: white; font: 1em sans-serif;">
                        </td>
                    </tr>
                    <tr>
                        <td>AdminMail:</td>
                        <td class = "text-center">
                            <input type="text" name= "AdminMail" placeholder="AdminMail" size="40%" style="background-color: white; font: 1em sans-serif;">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name ="submit" value="Add building" class="btn-secondary text-center">
                        </td>
                    </tr>
                </table>
            </form>

    

            <div class="clearfix"></div> 
            
            </div>   
            <div class="clearfix"></div>      
        </section>
        <!--Building Ends here-->
        <section>
            <div>
                <form action="coordinates.php">
                            <button type=submit class="btn-secondary" >Add Coordinates</button>
                </form>
            </div>
        </section>



        <!--Footer starts here-->
        <section class = "feet">
            <div class = "wrapper"> 
                <p>All rights reserved. Designed By <a href="#">@Alia Shiraz</a></p>
            </div>     
        </section>
        <!--Footer ends here-->


    </body>
</html>

