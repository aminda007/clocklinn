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

<html>
<head>

  <title>Customer Details form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
  <link type="text/css" rel="stylesheet" href="../css/style.css">


</head>

<body>
  <div class="top-customerform z-depth-1">

    <img src="" style="float" >
    <p style="text-align:left; color:white; font-size: 40px; font-style:normal ; vertical-align: auto; padding-left: 10px; margin:0;">Customer Details </p>

    <p style="text-align:left; color:white; font-size: 28px;  vertical-align: auto; padding-left: 10px; margin:0;">form</p>

  </div>
<form class="col s12" action="customerAdd.php" method="post">
<div class="container">
  <h4></h4>
  <div class="col m10">
  <ul class="collapsible popout container col m10 s4" data-collapsible="accordion" style="width: 60em;">
   <li>
    <div class="collapsible-header " style="height: 10em;"><i class="material-icons">perm_identity</i>Personal infomation</div>
    <div class="collapsible-body ">
      <p></p>


      <div class="container">
        <div class="row">
          <div class="col m10 offset-m1 s12">

            <div class="row">
              <form class="col s12">
                <div class="row">
                    <!-- First Name -->
                  <div class="input-field nom col m6 s12">
                    <input id="first_name" type="text" class="validate" name="firstName" value="<?php if (isset( $_POST['firstName'])){echo $_POST['firstName'];}?>">
                    <label for="first_name">First Name</label>
                  </div>
                    <!-- Last Name -->
                  <div class="input-field nom col m6 s12">
                    <input id="last_name" type="text" class="validate" name="lastName" value="<?php if (isset( $_POST['lastName'])){echo $_POST['lastName'];}?>">
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                   <!-- Passport Id-->
                <div class="row">
                  <div class="input-field nom col m12 s12">
                    <input id="passport" type="text" class="validate" name="passportID" value="<?php if (isset( $_POST['passportID'])){echo $_POST['passportID'];}?>">
                    <label for="passport">Passport/ID Number</label>
                  </div>
                </div>
                   
                <div class="row">
                    <!-- Home Telephone No-->
                  <div class="input-field nom col m6 s12">
                    <input id="Tel-home" type="text" class="validate" name="telHome" value="<?php if (isset( $_POST['telHome'])){echo $_POST['telHome'];}?>">
                    <label for="Tel-home">Tel-home</label>
                  </div>
                    <!-- Mobile No -->
                  <div class="input-field nom col m6 s12">
                    <input id="Tel-mobile" type="text" class="validate" name="telMobile" value="<?php if (isset( $_POST['telMobile'])){echo $_POST['telMobile'];}?>">
                    <label for="Tel-mobile">Tel-mobile</label>
                  </div>
                </div>

                <div class="row">
                    <!-- Adreess-->
                  <div class="input-field nom col m6 s12">
                    <input id="address" type="text" class="validate" name="address" value="<?php if (isset( $_POST['address'])){echo $_POST['address'];}?>">
                    <label for="address">Address</label>
                  </div>
                    <!-- Nationality -->
                  <div class="input-field nom col m6 s12">
                    <input id="nationality" type="text" class="validate" name="nationality" value="<?php if (isset( $_POST['nationality'])){echo $_POST['nationality'];}?>">
                    <label for="nationality">Nationality & Country</label>
                  </div>

                </div>
              </form>
            </div>
          </div>
        </div>
      </div>




    </div>
  </li> 

  <!-- end of personal information -->

  <li><!--booking datails-->
    <div class="collapsible-header" style="height: 10em"><i class="material-icons ">store</i>Booking information</div>
    <div class="collapsible-body " >
      <p></p>

      <div class="container" style="margin-bottom: 50px">

<!--
        <div class="row ">
          <div class="input-field nom col m5 s12">
            <input id="room-number" type="text" class="validate" name="roomNo">
            <label for="room-number">Room number</label>
          </div>
        </div >   -->

        <div class="row ">
          <div class="input-field col m6 s6">
            <label>Room type</label>
            <br/>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="roomType" type="radio" id="6bed" value="6BedDorm" <?php if (isset( $_POST['roomType'])){if($_POST['roomType']=="6BedDorm"){echo 'checked';}}?>/>
            <label for="6bed">6 BED DORM</label>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="roomType" type="radio" id="4bed" value="4BedDorm" <?php if (isset( $_POST['roomType'])){if($_POST['roomType']=="4BedDorm"){echo 'checked';}}?>/>
            <label for="4bed">4 BED DORM</label>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="roomType" type="radio" id="room" value="room" <?php if (isset( $_POST['roomType'])){if($_POST['roomType']=="room"){echo 'checked';}}?>/>
            <label for="room">ROOM</label>
          </div>

        </div>
        <br>

        <div class="row">
          <div class="input-field col m6 s6">
            <label>Bed type</label>
            <br/>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="bedType" type="radio" id="triple" value="triple" <?php if (isset( $_POST['bedType'])){if($_POST['bedType']=="triple"){echo 'checked';}}?>/>
            <label for="triple">Triple</label>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="bedType" type="radio" id="twin" value="twin" <?php if (isset( $_POST['bedType'])){if($_POST['bedType']=="twin"){echo 'checked';}}?>/>
            <label for="twin">Twin</label>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="bedType" type="radio" id="queen" value="queen" <?php if (isset( $_POST['bedType'])){if($_POST['bedType']=="queen"){echo 'checked';}}?>/>
            <label for="queen">Queen</label>
          </div>

        </div>

        <!-- <> -->

        <br>
        <div class="row ">
          <div class="input-field nom col m6 s12">
            <input id="date-in" type="date" class=" datepicker validate" name="dateIn" value="<?php if (isset( $_POST['dateIn'])){echo $_POST['dateIn'];}?>">
            <label for="date-in">Date in</label>
          </div>
          <div class="input-field nom col m6 s12">
            <input id="date-out" type="date" class=" datepicker validate" name="dateOut" value="<?php if (isset( $_POST['dateOut'])){echo $_POST['dateOut'];}?>">
            <label for="date-out">Date out</label>
          </div>

        </div>

        <div class="row ">
          <div class="input-field col s12">
            <label>Special Requests</label>
            <br/>
          </div>
          <div class="input-field col m4 s12 center-align">
            <input name="specialRequest" type="checkbox" id="Airport-pickup"  value="airportPickup" <?php if (isset( $_POST['specialRequest'])){echo 'checked';}?>/>
            <label for="Airport-pickup">Airport pickup</label>
          </div>
   <!--       <div class="input-field col m4 s12 center-align">
            <input name="specialRequest" type="checkbox" id="Something" value="Something" checked/>
            <label for="Something">Something</label>
          </div>
          <div class="input-field col m4 s12 center-align">
            <input name="specialRequest" type="checkbox" id="Something2" value="Something2"/>
            <label for="Something2">Something2</label>
          </div>   -->

        </div>

        <div class="row ">
        <br>
        <br>
          <div class="input-field nom col m4 s12">
            <input id="number-of-nights" type="number" min="0" class="validate" name="noOfNights" value="<?php if (isset( $_POST['noOfNights'])){echo $_POST['noOfNights'];}?>">
            <label for="number-of-night">Number of nights</label>
          </div>


          <div class="input-field nom col m4 s12">
            <input id="number-of-adults" type="number" min="0" class="validate" name="noOfAdults" value="<?php if (isset( $_POST['noOfAdults'])){echo $_POST['noOfAdults'];}?>">
            <label for="number-of-adults">Number of adults</label>
          </div>

          <div class="input-field nom col m4 s12">
            <input id="number-of-children" type="number" min="0" class="validate" name="noOfChildren" value="<?php if (isset( $_POST['noOfChildren'])){echo $_POST['noOfChildren'];}?>">
            <label for="number-of-children">Number of children</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col m3">
            <label>Business source</label>
            <br/>
          </div>
          <div class="input-field col m2 s3 center-align">
            <input name="buisnessSrc" type="radio" id="walk-ins" value="walkIn" <?php if (isset( $_POST['buisnessSrc'])){if($_POST['buisnessSrc']=="walkIn"){echo 'checked';}}?>/>
            <label for="walk-ins">Walk Ins</label>
          </div>
          <div class="input-field col m2 s3 center-align">
            <input name="buisnessSrc" type="radio" id="clock-inn" value="clockInn" <?php if (isset( $_POST['buisnessSrc'])){if($_POST['buisnessSrc']=="clockInn"){echo 'checked';}}?>/>
            <label for="clock-inn">Clock INN</label>
          </div>
          <div class="input-field col m2 s3 center-align">
            <input name="buisnessSrc" type="radio" id="web-site" value="website" <?php if (isset( $_POST['buisnessSrc'])){if($_POST['buisnessSrc']=="website"){echo 'checked';}}?>/>
            <label for="web-site">Web site</label>
          </div>
          <div class="input-field col m2 s3 center-align">
            <input name="buisnessSrc" type="radio" id="online" value="online" <?php if (isset( $_POST['buisnessSrc'])){if($_POST['buisnessSrc']=="online"){echo 'checked';}}?>/>
            <label for="online">Online</label>
          </div>

        </div>

        <br>


            </div>


            </div>
        </li> <!--end of booking datails-->

        </ul>
    </div>

    <div class="row container col m6">
        <div class="col m6">
            <a href="#">
                <!-- onclick="Materialize.toast('Saved Successfully', 4000)" inside button class-->
                <p class="right-align"><button id="submit-cuz" class="btn btn-large waves-effect waves-light cuz midddle"  type="submit" name="submit" data-target="modal1">Submit</button></p>
            </a>
        </div>
        
    </div>
</div>
    
    <!--
    <div class="col m2" style="padding-right: 100px">
            <a href="home.html">
                <p class="right-align"><button id="submit-cuz" class="btn btn-large waves-effect waves-light red cuz midddle" name="cancel"  data-target="modal1">Cancel</button></p>
            </a>
            
        </div>
  <!-- Modal Trigger -- >
 <button data-target="modal1" class="btn modal-trigger">Modal</button>
     
    <!-- Modal Structure -- >
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Modal Header</h4>
      <p>A bunch of text</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
    </div>
  </div>  -->
<!-- home button -->
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red" href="homeReception.php">
            <i class="extar-large material-icons">home</i>
        </a>

    </div>
<!-- home button -->    





<!-- jQuery is required by Materialize to function -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>

<script type="text/javascript">
  //custom JS code

</script>


<?php
include './connection.php';
/*
// Connecting to Database using Mysql
$dbc = mysql_connect('localhost','root','');

if(!$dbc){
    echo ".....not connected to aminda....";
    die();
}
else{
    echo "....connected to amindAA...";
}

$db_select = mysql_select_db("clockinn", $dbc);
if(!$db_select){
    echo ".....not connected to clockinn....";
    die();
}
else{
    echo "....connected to clockinNNNNN...";
}
*/
/*
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$passportID=$_POST['passportID'];
$telHome=$_POST['telHome'];
$telMobile=$_POST['telMobile'];
$address=$_POST['address'];
$nationality=$_POST['nationality'];
$roomType=$_POST['roomType'];
$bedType=$_POST['bedType'];
$dateInn=$_POST['dateIn'];
$dateIn=date('Y-m-d',strtotime($_POST['dateIn']));
$dateOut=date('Y-m-d',strtotime($_POST['dateOut']));
//$dateOut=$_POST['dateOut'];
$specialRequest=$_POST['specialRequest'];
$noOfNights=$_POST['noOfNights'];
$noOfAdults=$_POST['noOfAdults'];
$noOfChildren=$_POST['noOfChildren'];
$buisnessSrc=$_POST['buisnessSrc'];
$roomNo=$_POST['roomNo'];*/
//$specialRequest=$_POST['specialRequest'];
function test_input($data) {  // function to validate data
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        
function saved(){
    STATIC $saving=0;
    $saving++;
    return $saving;
}

$filled=FALSE;

    // define variables and set to empty values
       
        $firstName = $lastName = $passportID= $telHome = $telMobile=$nationality =$address =$roomType=$bedType=$dateIn=$dateOut=$specialRequest=$noOfNights=$noOfAdults=$noOfChildren=$buisnessSrc=$roomNo= "";
    
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["firstName"])) {
                echo "<script type='text/javascript'>alert('First name is required!')</script>";
                $filled=FALSE;
            } else {
                $firstName = test_input($_POST["firstName"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
                   echo "<script type='text/javascript'>alert('first name can contain only name and white space!')</script>";
                   $filled=FALSE;
                }  else {
                    if (empty($_POST["lastName"])) {
                echo "<script type='text/javascript'>alert('Last name is required!')</script>";
                $filled=FALSE;
            } else {
                $lastName = test_input($_POST["lastName"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
                   echo "<script type='text/javascript'>alert('Last name can contain only name and white space!')</script>";
                   $filled=FALSE;
                }  else {
                                if (empty($_POST["passportID"])) {
                echo "<script type='text/javascript'>alert('passportID is required!')</script>";
                $filled=FALSE;
            } else {
                $passportID = test_input($_POST["passportID"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[A-Za-z0-9 ]*$/",$passportID)) {
                   echo "<script type='text/javascript'>alert('passportID contains only numbers!')</script>";
                   $filled=FALSE;
                }  else {
                    if (empty($_POST["telHome"])) {
                echo "<script type='text/javascript'>alert('Tel-Home is required!')</script>";
                $filled=FALSE;
            } else {
                $telHome = test_input($_POST["telHome"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9 ]*$/",$telHome)) {
                   echo "<script type='text/javascript'>alert('tel-home contains only numbers!')</script>";
                   $filled=FALSE;
                }  else {
                    if (empty($_POST["telMobile"])) {
                echo "<script type='text/javascript'>alert('Tel-mobile is required!')</script>";
                $filled=FALSE;
            } else {
                $telMobile = test_input($_POST["telMobile"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9 ]*$/",$telMobile)) {
                   echo "<script type='text/javascript'>alert('tel-mobile contains only numbers!')</script>";
                   $filled=FALSE;
                }  else {
                    if (empty($_POST["address"])) {
                echo "<script type='text/javascript'>alert('Address is required!')</script>";
                $filled=FALSE;
            } else {
                $address = test_input($_POST["address"]);
                if (empty($_POST["nationality"])) {
                echo "<script type='text/javascript'>alert('nationality is required!')</script>";
                $filled=FALSE;
            } else {
                $nationality = test_input($_POST["nationality"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$nationality)) {
                   echo "<script type='text/javascript'>alert('Invalid nationality!')</script>";
                   $filled=FALSE;
                }  else {
                    if (empty($_POST["noOfNights"])) {
                    echo "<script type='text/javascript'>alert('noOfNights is required!')</script>";
                    $filled=FALSE;
            } else {
                $noOfNights = test_input($_POST["noOfNights"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9 ]*$/",$noOfNights)) {
                   echo "<script type='text/javascript'>alert('Invalid noOfNights!')</script>";
                   $filled=FALSE;
                }  else {
                    if (empty($_POST["noOfAdults"])) {
                echo "<script type='text/javascript'>alert('noOfAdults  is required!')</script>";
                $filled=FALSE;
            } else {
                $noOfAdults= test_input($_POST["noOfAdults"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[0-9 ]*$/",$noOfAdults)) {
                   echo "<script type='text/javascript'>alert('noOfAdults contains only numbers!')</script>";
                   $filled=FALSE;
                }  else {
                    if (empty($_POST['roomType'])){
                echo "<script type='text/javascript'>alert('roomType is required!')</script>";
                $filled=FALSE;
            }else{
                $roomType=  $_POST['roomType']; 
                if (empty($_POST['bedType'])){
                echo "<script type='text/javascript'>alert('bedType is required!')</script>";
                $filled=FALSE;
            }else{
                $bedType=  $_POST['bedType']; 
                if (empty($_POST['dateIn'])){
                echo "<script type='text/javascript'>alert('dateIn is required!')</script>";
                $filled=FALSE;
                }else{
                $dateIn= date('Y-m-d',strtotime($_POST['dateIn']));            
                if (empty($_POST['dateOut'])){
                echo "<script type='text/javascript'>alert('dateOut is required!')</script>";
                $filled=FALSE;
                }else{
                    $dateOut=date('Y-m-d',strtotime($_POST['dateOut']));          
                    if (empty($_POST['buisnessSrc'])){
                        echo "<script type='text/javascript'>alert('buisnessSrc is required!')</script>";
                        $filled=FALSE;
                    }else{
                        $buisnessSrc=  $_POST['buisnessSrc'];
                        $filled=TRUE;
                        if (isset( $_POST['specialRequest'])){
                            $specialRequest=$_POST['specialRequest'];
                        }
                        
                    }//
                }
                }
            }
            }
                //

            //
                //

            }
                //

            }
                }
            }
                }
            }
            }
                }
            }
                }
            }
        
                }
            }

                }
            }
        
                }
            }
        
            

        

            
            

            

            
        /*
            if (empty($_POST["email"])){
                echo "<script type='text/javascript'>alert('E-mail is required!')</script>";
            }else {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<script type='text/javascript'>alert('Invalid email!')</script>";
                }
            }*/
        
            

            
            
            

           
            
            
            
            
            
            
              
            /*if (empty($_POST['specialRequest'])){
                echo "<script type='text/javascript'>alert('Acess type is required!')</script>";
            }else{
                $specialRequest=  $_POST['specialRequest'];            
            }*/
            
        
            


        }
        
function checkID($id){
        $query="SELECT firstName FROM customer WHERE passportID='$id'";
       // echo $id;
	if($query_run = mysql_query($query)){
            $query_num_rows = mysql_num_rows($query_run);
           // echo 'fhfhf';
            if($query_num_rows==0){
                return TRUE;
            }
            else {
                return FALSE;
            }
        } 
}
function dateValidate($strDateFrom,$strDateTo,$noNights){
    $aryR=array();
    $today=  date('Y-m-d');
    $itoday=mktime(1,0,0,substr($today,5,2),     substr($today,8,2),substr($today,0,4));
    $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
    $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));
    if ($iDateTo>=$iDateFrom && $iDateFrom>=$itoday){
        array_push($aryR,date('Y-m-d',$iDateFrom)); // first entry
        while ($iDateFrom<$iDateTo){
            $iDateFrom+=86400; // add 24 hours
            array_push($aryR,date('Y-m-d',$iDateFrom));
        }
        $nights=count($aryR);
        if($nights>=$noNights){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    
}
        
        
$notReg=checkID($passportID); 
$dateOk=dateValidate($dateIn,$dateOut,$noOfNights);
//   445 **********************************************************************
    
if($filled && $notReg && $dateOk){
$strDateFrom=$dateIn;
$strDateTo=$dateOut;
//$bedNo=0;
//$period = new DatePeriod(new DateTime('2010-10-01'),new DateInterval('P1D'),new DateTime('2010-10-05'));
$aryRange=array();
$resultx;
$bedNo;

$iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
$iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));

if ($iDateTo>=$iDateFrom)
{
    array_push($aryRange,date('Y-m-d',$iDateFrom)); // first entry
    while ($iDateFrom<$iDateTo)
    {
        $iDateFrom+=86400; // add 24 hours
        array_push($aryRange,date('Y-m-d',$iDateFrom));
    }
}

//echo $period;
function getRooms($strDateFrom,$strDateTo,$room_Type){
    global $aryRange;
    global $bedNo;

    // takes two dates formatted as YYYY-MM-DD and creates an
    // inclusive array of the dates between the from and to dates.

    // could test validity of dates here but I'm already doing
    // that in the main script




//$array=createDateRangeArray($strDateFrom,$strDateTo);


$roomType=$room_Type;
//echo "-----".$roomType."****";
//$bedType="";
$p=0;
$q=0;
if($roomType=="6BedDorm"){
   // echo "-----".$roomType."---";
    $p=0;
    $q=18;
}
elseif($roomType=="4BedDorm") {
   // echo "-----".$roomType."----";
    $p=18;
    $q=34;
}  else {
   // echo "-----".$roomType."----";
    $p=34;
    $q=42;
}
$bed_Num=array();

for ($p; $p < $q; $p++) {
    array_push($bed_Num, $p);   
}
//$bedNo='3';

//$query="UPDATE customer SET firstName='$firstName', nationality='$nationality' WHERE passportID='$passportID'";
//$sql = "INSERT INTO MyGuests (firstname, lastname, email)
//VALUES ('John', 'Doe', 'john@example.com')";
//$query="UPDATE room_detail SET day1='2016-05-16', day2='2016-05-18' WHERE bedNo='$bedNo' ";



//$result = mysql_query($query);
foreach ($bed_Num as $day) {
   // echo $day."bned NO  <br> ";
    
}


//echo 'dtfghjk+++___';



foreach ($bed_Num as $bedNo) {
    $bedNo=$bedNo+1;
  //  echo '***************'.$bedNo."************** <br>";

$query_date="SELECT day1,day2,day3,day4,day5,day6,day7,day8,day9,day10,day11,day12 FROM room_detail WHERE bedNo='$bedNo' ";
$result_date = mysql_query($query_date);
$row_date = mysql_fetch_array($result_date);
$date_array=array($row_date[0],$row_date[1] ,$row_date[2],$row_date[3],$row_date[4],$row_date[5],$row_date[6] ,$row_date[7],$row_date[8],$row_date[9],$row_date[10],$row_date[11]);
//echo 'vhcgvjbakm-->'.$row_date[0].".......<br>";
/*
foreach ($day_array as $day) {
    echo "$day <br> ";
    
}*/
$free_dayNo=array();
$checked_days=array();
$empty=array();

for ($x = 0; $x <= 11; $x++) {
  //  echo $x.'_555__ <br>';
    if ($date_array[$x]=="0000-00-00") {
    //    echo $date_array[$x];
        array_push($free_dayNo, $x);
    }  else {
      //  echo "-----".$date_array[$x];
        array_push($checked_days,$date_array[$x]);
    }
}
foreach ($free_dayNo as $day) {
   // echo $day."freee faaay  <br> ";
    
}
foreach ($checked_days as $day) {
   // echo $day." cheched daaay  <br> ";
    
}
$no_room=FALSE;

foreach ($checked_days as $dayBooked) {
   // echo "-*--".$dayBooked;
    foreach ($aryRange as $dayWant) {
     //   echo "---".$dayWant."<br>";
        if($dayBooked==$dayWant){
             $no_room=TRUE;
             break;
        }
        
    
    }
    if($no_room){
        break;
    }
}

if (count($aryRange)<= count($free_dayNo)&& !$no_room ) {
    return $free_dayNo;
}else{
    //array_push();
}

}
return $empty;
}


$arra=getRooms($strDateFrom,$strDateTo,$roomType);
//echo "+++++ available +++++".count($arra)."<br>";
foreach ($arra as $day) {
  //  echo "$day <br> ";
    
}
$range=count($aryRange);
//echo $range;

$day_array = array("day1", "day2", "day3","day4","day5","day6","day7",'day8','day9','day10','day11','day12');
for ($i = 0; $i < $range; $i++) {
  //  echo"486528465385.....".$bedNo.".....--".$day_array[$i]."<br>";
$queryx="UPDATE room_detail SET $day_array[$i]='$aryRange[$i]' WHERE bedNo='$bedNo'";
//echo $queryx;
global $resultx;
$resultx = mysql_query($queryx);

}
?>
</form>

</body>
</html>

<!--  6532*****************************************************************************************-->
<?php
$roomNo=$bedNo;

$query = "INSERT INTO customer (firstName, lastName, passportID, telHome, telMobile, address, nationality, roomType, noOfNights, noOfAdults, noOfChildren, bedType, buisnessSrc, roomNo, specialRequest, dateIn, dateOut)
VALUES ('$firstName', '$lastName', '$passportID', '$telHome', '$telMobile', '$address', '$nationality', '$roomType', '$noOfNights', '$noOfAdults', '$noOfChildren', '$bedType', '$buisnessSrc', '$roomNo', '$specialRequest', '$dateIn', '$dateOut')";

$result = mysql_query($query);






if (!$result && !$resultx) {
    //header("Location:customerAdd.php");
  //  echo 'not saved';
    echo "<script type='text/javascript'>alert('Try Another date')</script>";
}  else {
    //$notSaved=FALSE;
   echo "<script type='text/javascript'>alert('Saved Successfully!')</script>";
  //  echo 'saved';
    //header("Location:homeSaved.php");
 /*   echo 'saved';
    echo $dateInn;
    echo date('Y-m-d',  strtotime($dateIn));
    echo date('d F, Y',$dateIn);
    echo '<script language="javascript">';
    echo 'alert("message successfully sent")';
    echo '</script>';  */
    
}
        }else{
            if($_SERVER["REQUEST_METHOD"] == "POST" && !$notReg){
            echo "<script type='text/javascript'>alert('Already saved!')</script>";
            }else{
                if($_SERVER["REQUEST_METHOD"] == "POST" && !$dateOk){
            echo "<script type='text/javascript'>alert('Dates or NO of nights not correct!')</script>";
            }
        }      

        }