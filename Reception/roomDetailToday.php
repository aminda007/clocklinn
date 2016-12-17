<?php
error_reporting(0);
session_start();
    if (!$_SESSION["LoggedIn"]) {
    header("Location:../logIn/loginExpired.html");
    exit();    
    }else{
        $username_i=$_SESSION["username_i"];
    }   
?>
<?php
include './roomDetailGet.php';
//$date=date('Y-m-d',strtotime($_POST['date']));
$date=date("Y-m-d");
?>
<html>
<head>

    <title>Customer Details form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="../css/style.css">
    <link type="text/css" rel="stylesheet" href="../css/style2.css">
</head>

<body style=" margin:0;" class="display-animation">

    <div class="container-fluid">
        <!-- Header bar-->
	<div class="top-border z-depth-1" style="background-color: #78909c;margin: 0;">
            <p style="text-align:left; color:white; font-size: 40px; font-style:normal ; vertical-align: auto;padding-left: 10px; margin:0;">Room Details</p>
            <p style="text-align:left; color:white; font-size: 28px;  vertical-align: auto; padding-left: 10px; margin:0;"> </p>           			
	</div>

        <!-- Body -->
	<div  class="row display-animation" style="margin:0; vertical-align:     ">
            <div id="content" class=" col m12 s12 card vdivide  white" style="background-color: white;margin:auto;height: 84%; ">
                <br>
                <div style="padding-left:  100px">
                    <form action="roomDetail.php" method="post">
                        <div class="row " style="padding-left: ">
                            <div class="input-field nom col m8 s6 ">
                                <input id="date-in" type="date" class=" datepicker validate" name="date" value="<?php echo $date; ?>">
                            <label for="date-in">Date</label>
                            </div>
                            <button id="submit-cuz" class="btn btn-large waves-effect waves-light cuz midddle"  type="submit" name="submit" data-target="modal1">Submit</button>
                        </div>                
                    </form>
                </div>
                <p><span style="font-weight: bold; font-size: 15px">6 BED MIX DORM </span>- Available Beds :<?php echo getrooms("6bed",$date); ?> / 18  </p>
                <div class="row">                      
                    <div class="col s4 m4 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" height:10% ; color: white;padding: 4px;border: solid white">                            
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light display-animation <?php echo getcolour(1,$date);?>" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(2,$date);?> display-animation" style="color: white; height:100%" ></div>                
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(3,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(4,$date);?> display-animation" style="color: white; height:100%" ></div>                
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(5,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(6,$date);?> display-animation" style="color: white; height:100%" ></div>                
                        </div>
                    </div>
                    <div class="col s4 m4 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" height:10% ; color: white;padding: 4px;border: solid white">                            
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(7,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(8,$date);?> display-animation" style="color: white; height:100%" ></div>                
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(9,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(10,$date);?> display-animation" style="color: white; height:100%" ></div>                
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(11,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(12,$date);?> display-animation" style="color: white; height:100%" ></div>                
                        </div>
                    </div>
                    <div class="col s4 m4 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" height:10% ; color: white;padding: 4px;border: solid white">                            
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(13,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(14,$date);?> display-animation" style="color: white; height:100%" ></div>                
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(15,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(16,$date);?> display-animation" style="color: white; height:100%" ></div>                
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(17,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s2 m2'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(18,$date);?> display-animation" style="color: white; height:100%" ></div>                
                        </div>
                    </div>
                </div>
                
                <br>				
                <p><span style="font-weight: bold; font-size: 15px">4 BED MIX DORM </span>- Available Beds : <?php echo getrooms("4bed",$date); ?> / 16 </p>
                <div class="row">                      
                    <div class="col s3 m3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" height:10% ; color: white;padding: 4px;border: solid white">                            
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(19,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(20,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(21,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(22,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                    </div>
                    <div class="col s3 m3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" height:10% ; color: white;padding: 4px;border: solid white">                            
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(23,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(24,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(25,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(26,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                    </div>
                    <div class="col s3 m3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" height:10% ; color: white;padding: 4px;border: solid white">                            
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(27,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(28,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(29,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(30,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                    </div>
                    <div class="col s3 m3 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" height:10% ; color: white;padding: 4px;border: solid white">                            
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(31,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(32,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(33,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s3 m3'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(34,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                    </div>
                    
                    
                </div>
                
                <br>				
                <p><span style="font-weight: bold; font-size: 15px">PRIVATE ROOM </span>- Available Rooms :  <?php echo getrooms("room",$date); ?> / 8 </p>
                <div class="row">                      
                    <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light display-animation" style=" height:10% ; color: white;padding: 4px;border: solid white">                            
                        
                        <div class='col s1 m1'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(35,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s1 m1'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(36,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s1 m1'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(37,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s1 m1'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(38,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s1 m1'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(39,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s1 m1'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(40,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s1 m1'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(41,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        <div class='col s1 m1'>
                            <div class="col s12 m12 menu-button z-depth-2 btn waves-effect waves-light <?php echo getcolour(42,$date);?> display-animation" style="color: white; height:100%" ></div>
                        </div>
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red" href="homeReception.php">
            <i class="extar-large material-icons">home</i>
        </a>

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