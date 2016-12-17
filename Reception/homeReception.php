<?php
error_reporting(0);
session_start();
if (!$_SESSION["LoggedIn"]) {
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


            <div class="top-border z-depth-1" style="background-color: #039be5 ;margin: 0;">


                <p style="text-align:left; color:white; font-size: 40px;   vertical-align: auto;padding-left: 10px; margin:0;">Home Reception</p>

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

                <div class="row  " style="height: auto; background-color:#039be5;color: white;text-align:center;font-size: 15px;">

                    <div style="margin: 0; text-align: center; vertical-align: middle;"><i class=" material-icons">notifications</i><span style="overflow: hidden;">Notifications: <?php
$currentDate=  date("m/d/Y");
//echo $currentDate;
echo '<br>';
require_once ('Connector.php');
      $sql = "SELECT * FROM airportpickup WHERE 1";
       $result = mysql_query($sql);
       echo "<br>";
       while($row = mysql_fetch_assoc($result)){
           
           if($row["Pickup"]==$currentDate){
               echo "PassportID : ".$row["PassportNo"]."<br>";
               echo "Name : ".$row["Name"]."<br>";
               echo "Car Model : ".$row["Model"]."<br>";
               echo "Time : ".$row["Time"]."<br>";
               echo "<br>";
           }
           
           
       }


?></span></div>
                </div>


            </div>

            <div id="content" class=" col m10 s10 card vdivide  white" style="background-color: white;padding: 20px;margin:auto;height: 80%;">
                <!-- <br>
                <br> -->
                <div class=" " style="  margin:auto; width: 100%;">
                    <div class="row " style="">
                        <a href="customerAdd.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation" >
                                <p>Add Customer</p>
                            </div>
                        </a>

                        <a href="customerDetailsEditEmpty.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation" >
                                <p> Edit Customer </p>
                            </div>
                        </a>


                        <a href="customerViewEmpty.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation">
                                <p> View Customer </p>
                            </div>
                        </a>


                        <a href="roomDetailToday.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation" >
                                <p>Room Detail </p>
                            </div>
                        </a>

                    </div>

                    <div class="row">

                        <a href="customerDeleteEmpty.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation">
                                <p>Delete Customer</p>
                            </div>
                        </a>

                        <a href="billEditAndView.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation">
                                <p>Edit And View Bill</p>
                            </div>
                        </a>


                        <a href="billpaying.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation" >
                                <p>Bill payment </p>
                            </div>
                        </a>


                        <a href="offerrequesting.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light  display-animation" >
                                <p>Request Offer </p>
                            </div>
                        </a>

                    </div>

                    <div class="row">

                        <a href="lostandfound.php">
                            <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation">
                                <p>Lost Item Search </p>
                            </div>
                        </a>

                        <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" >

                        </div>


                        <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" >

                        </div>


                        <div class="col s3 menu-button z-depth-2 btn waves-effect waves-light display-animation" >

                        </div>

                    </div>


                </div>
            </div><!--   button body -->
        </div>
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