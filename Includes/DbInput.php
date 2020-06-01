<?php

$server_name="localhost";
$user_name="benyamingu";
$password="DUuH0Lvv4ORj";
$database_name="benyamin_ajax_db";

//create connection
$conn=new mysqli($server_name,$user_name,$password,$database_name);

//check the connection
if ($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

if (!$conn->set_charset("utf8")) { printf("Error loading character set utf8: %s\n", $conn->error); exit();}


$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$about=$_POST['about'];


//add use
$sql="insert into newsletterDb(first_name,last_name,email,about) values ('".$first_name."','".$last_name."','".$email."','".$about."')";

?>


<!doctype html>
<html lang="en">

    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        <!-- Required meta tags
-->
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- connect to css file -->
        <link rel="stylesheet" href="../CSS/DbInputStyle.css">


        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <script src="../bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <title>Ajax Amsterdam fans website</title>
    </head>

    <body>

        <header id="nav-bar">
            <img src="../images/navbarbackg.jpg" class="headerp">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>
                
                <!-- navbar-nav mx-auto -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" title="העמוד בשיפוצים">התחברות</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="theClub.html">המועדון</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="TheTravelGuide.html">המדריך למטייל</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.html">עמוד הבית</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-------------- section ----------------------->
        <div class="test">
            <main>
                 
                    <section id="messagebox">
                        <?php
                        if ($conn->query($sql) === TRUE) {


                            echo " הרשמה התבצעה בהצלחה"; ?> 

                        <a href="../index.html"><button class="button">לחזרה לדף הבית לחץ כאן </button>
                        </a> 
                        <?php

                        }

                        else {

                            echo "שגיאה: משתמש קיים כבר במאגר "."<br>";?> 

                        <a href="../Includes/RegisterForm.html"><button class="button">לחזרה למילוי הטופס בשנית </button>
                        </a> 
                        <?php
                        }

                        $conn->close();
                        ?><br>

                    </section>
            </main>
                    


                <!-------------- footer ----------------------->
                <footer class="footer">
                    <!-- Footer -->
                    <footer class="page-footer font-small special-color-dark pt-4my">
                        <!-- Footer Elements -->
                        <div class="container-fluid">
                            <!-- Social buttons -->
                            <ul class="list-unstyled list-inline text-center">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/AjaxIsrael/    " class="fa fa-facebook"></a>
                                    <!--Twitter-->
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.youtube.com/user/ajax/videos?app=desktop" class="fa fa-youtube"></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.instagram.com/afcajax/" class="fa fa-instagram"></a>
                                </li>
                            </ul>
                            <!-- Social buttons -->

                        </div>
                        <!-- Footer Elements -->

                        <!-- Copyright -->
                        <div class="footer-copyright text-center py-3">© <b>2020 Copyright:Roey Fredi, Ben Gutgold and Or Cohen</b>
                        </div>
                        <!-- Copyright -->

                    </footer>
                    <!-- Footer -->
                </footer>

               
                
        </div>


    </body>

</html>