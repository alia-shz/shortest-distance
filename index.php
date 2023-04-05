<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- For a resposive website-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EmerGPS</title>

    <!--link css file-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
     <!--Navbar Begins here-->
     <section class = "Navbar">
        <div class="container">
            <div class ="logo">  
                <img src="images/Logo.png" alt="Logo" class="img_pic" >
            </div>
            <div class = "menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Admin Home</a>
                    </li>
                    <li>
                        <a href="client.html">Logout</a>
                    </li>
                </ul>
            </div>
        </div>  
        <div class="clearfix"></div>      
    </section>
    <!--Navbar Input ends here-->
   

     <!--Admin Details Input Begins here-->
    <section class = "Select">
        <div class="container">
            <h2 class="selecttext text-center">Select Option</h2>
            <div class = "box1 text-center ">
                <img src="images/insert.png" alt="insert" class="img_pic">
                <form action="insertion/add-building.php">
                    <button type=submit class="btn btn-select">Insert</button>
                </form>
                
            </div>   
           <!-- <div class = "box1 text-center">
                <img src="images/modify.png" alt="modify" class="img_pic">
                <form action="modify.html">
                    <button type=submit class="btn btn-select">Modify</button>
                </form>
            </div> -->

            <div class = "box1 text-center">
                <img src="images/delete.png" alt="modify" class="img_pic">
                <form action="delete.html">
                    <button type=submit class="btn btn-select">Delete</button>
                </form>
            </div>  
            <div class="clearfix"></div> 
        </div>        
    </section>
    <!--Admin Details Input ends here-->


    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>    
    </section>
    <!-- social Section Ends Here -->
    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">@Alia Shiraz</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->
</body>
</html>