<?php
error_reporting(0);
session_start();
if (!$_SESSION["LoggedInM"]) {
    header("Location:../logIn/loginExpired.html");
    exit();
} else {
    $username_i = $_SESSION["username_i"];
}
?>
<html>
    <head>

        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
        <link type="text/css" rel="stylesheet" href="../css/style.css">
        <link type="text/css" rel="stylesheet" href="../css/style2.css">


    </head>

    <body style=" margin:0;" class="display-animation">

        <div >


            <div class="top-border z-depth-1" style="background-color: #7986cb;margin: 0;">


                <p style="text-align:left; color:white; font-size: 40px;   vertical-align: auto;padding-left: 10px; margin:0;">Home Manger</p>

                <p style="text-align:left; color:white; font-size: 28px;  vertical-align: auto; padding-left: 10px; margin:0;">form</p>



                <div class="fixed-action-btn horizontal click-to-toggle" style="top: 45px; right: 24px; ">
                    <a class="btn-floating btn-large " style="background-color: #40c4ff">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul>

                        <li><a class="btn-floating green"><i class="material-icons">live_help</i></a></li>
                        <li><a class="btn-floating yellow"><i class="material-icons">settings</i></a></li>
                        <li><a href="../logIn/logout.php" class="btn-floating red"><i class="material-icons">power_settings_new</i></a></li>
                    </ul>
                </div>

            </div>

        </div>


        <div  class="row display-animation" style="margin:0; vertical-align: top;  ">
            <div  id="side-bar" class="col m2 s2 card container ripple-effect display-animation" style=" padding-top: 20px;background-color: white; height: 80%;margin:0;">

                <div class="row  " style="height: 110px; background-color:#7986cb;color: white;text-align:center;font-size: 15px;">

                    <div style="margin: 0; text-align: center; vertical-align: middle;"><i class=" material-icons">notifications</i><span style="overflow: hidden;">Notifications</span></div>
                </div>


            </div>

            <div id="content" class=" col m10 s10 card vdivide  white" style="background-color: white;padding: 20px;margin:auto;height: 80%;">
                <!-- <br>
                <br> -->
                <div class=" " style="  margin:auto; width: 100%;">
                    <div class="row " style="">

                        <a href="incomereport.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation" style="  ;">
                                <p>Income Report</p>
                            </div>
                        </a>

                        <a href="">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style="background-color: #b388ff"  >
                                <p>Special Offers </p>
                            </div>
                        </a>

                        <a href="lostandfound.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style="background-color: #a1887f" >
                                <p>Lost & Found Items</p>
                            </div>
                        </a>

                        <a href="searchEmployeeM.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=";">
                                <p>Get Employee details</p>
                            </div>
                        </a>
                    </div>

                    <div class="row " style="">

                        <a href="AttendanceTaker.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation" style="  ;">
                                <p>mark attendace</p>
                            </div>
                        </a>

                        <a href="AttendanceViewer.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style="  ;">
                                <p>attendace viewer</p>
                            </div>
                        </a>

                        <a href="">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" ;" >
                                <p></p>
                            </div>
                        </a>

                        <a href="">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=";">
                                <p></p>
                            </div>
                        </a>
                    </div>

                    <div class="row " style="">

                        <a href="">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation" style="  ;">
                                <p></p>
                            </div>
                        </a>

                        <a href="">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style="  ;">
                                <p></p>
                            </div>
                        </a>

                        <a href="">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" ;" >
                                <p></p>
                            </div>
                        </a>

                        <a href="">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=";">
                                <p></p>
                            </div>
                        </a>
                    </div>


                </div>
            </div>
        </div>



        <!-- home button -->
        <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
            <a class="btn-floating btn-large red" href="">
                <i class="extar-large material-icons">home</i>
            </a>

        </div>
        <!-- home button -->


    </div>
    <!-- jQuery is required by Materialize to function -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <script type="text/javascript" src="../js/custom.js"></script>
    <script type="text/javascript" src="../js/custom2.js"></script>

    <script type="text/javascript">
        //custom JS code

    </script>


</body>
</html>