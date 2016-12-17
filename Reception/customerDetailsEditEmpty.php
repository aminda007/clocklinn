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
    <br>
    <br>
    <!-- submit PassportID -->
                <div class="row" style="padding-left: 160px">
                    <form class="col s10 m10" action="customerDetailsEdit.php" method="post">
                        <div class="row" >
                            <div class="input-field col s6 m6">
                                <input placeholder="ID" id="passportID" type="text" class="validate" name="passportID">
                                <label for="passportID">PassportID</label>
                            </div>
                        <div class="col s6 m6 center" style="padding-top: 5px">
                            <button class="btn waves-effect waves-light " type="submit"><i class="mdi-action-account-circle"></i>     Select</button>
                        </div>
                        </div>
                    </form>
                </div>

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
                    <input id="first_name" type="text" class="validate" name="firstName">
                    <label for="first_name">First Name</label>
                  </div>
                    <!-- Last Name -->
                  <div class="input-field nom col m6 s12">
                    <input id="last_name" type="text" class="validate" name="lastName">
                    <label for="last_name">Last Name</label>
                  </div>
                </div>
                   <!-- Passport Id-->
                <div class="row">
                  <div class="input-field nom col m12 s12">
                    <input id="passport" type="text" class="validate" name="passportID">
                    <label for="passport">Passport/ID Number</label>
                  </div>
                </div>
                   
                <div class="row">
                    <!-- Home Telephone No-->
                  <div class="input-field nom col m6 s12">
                    <input id="Tel-home" type="text" class="validate" name="telHome">
                    <label for="Tel-home">Tel-home</label>
                  </div>
                    <!-- Mobile No -->
                  <div class="input-field nom col m6 s12">
                    <input id="Tel-mobile" type="text" class="validate" name="telMobile">
                    <label for="Tel-mobile">Tel-mobile</label>
                  </div>
                </div>

                <div class="row">
                    <!-- Adreess-->
                  <div class="input-field nom col m6 s12">
                    <input id="address" type="text" class="validate" name="address">
                    <label for="address">Address</label>
                  </div>
                    <!-- Nationality -->
                  <div class="input-field nom col m6 s12">
                    <input id="nationality" type="text" class="validate" name="nationality">
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


        <div class="row ">
          <div class="input-field nom col m5 s12">
            <input id="room-number" type="text" class="validate" name="roomNo">
            <label for="room-number">Room number</label>
          </div>
        </div >

        <div class="row ">
          <div class="input-field col m6 s6">
            <label>Room type</label>
            <br/>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="roomType" type="radio" id="6bed" value="6BedDorm" />
            <label for="6bed">6 BED DORM</label>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="roomType" type="radio" id="4bed" value="4BedDorm"/>
            <label for="4bed">4 BED DORM</label>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="roomType" type="radio" id="room" value="room" />
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
            <input name="bedType" type="radio" id="triple" value="triple" />
            <label for="triple">Triple</label>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="bedType" type="radio" id="twin" value="twin"/>
            <label for="twin">Twin</label>
          </div>
          <div class="input-field col m2 s4 center-align">
            <input name="bedType" type="radio" id="queen" value="queen"/>
            <label for="queen">Queen</label>
          </div>

        </div>

        <!-- <> -->

        <br>
        <div class="row ">
          <div class="input-field nom col m6 s12">
            <input id="date-in" type="date" class=" datepicker validate" name="dateIn">
            <label for="date-in">Date in</label>
          </div>
          <div class="input-field nom col m6 s12">
            <input id="date-out" type="date" class=" datepicker validate" name="dateOut">
            <label for="date-out">Date out</label>
          </div>

        </div>

        <div class="row ">
          <div class="input-field col s12">
            <label>Special Requests</label>
            <br/>
          </div>
          <div class="input-field col m4 s12 center-align">
            <input name="specialRequest" type="checkbox" id="Airport-pickup"  value="airportPickup"/>
            <label for="Airport-pickup">Airport pickup</label>
          </div>
   <!--       <div class="input-field col m4 s12 center-align">
            <input name="specialRequest" type="checkbox" id="Something" value="Something" checked/>
            <label for="Something">Something</label>
          </div>
          <div class="input-field col m4 s12 center-align">
            <input name="specialRequest" type="checkbox" id="Something2" value="Something2"/>
            <label for="Something2">Something2</label>
          </div>    -->

        </div>

        <div class="row ">
        <br>
        <br>
          <div class="input-field nom col m4 s12">
            <input id="number-of-nights" type="number" min="0" class="validate" name="noOfNights">
            <label for="number-of-night">Number of nights</label>
          </div>


          <div class="input-field nom col m4 s12">
            <input id="number-of-adults" type="number" min="0" class="validate" name="noOfAdults">
            <label for="number-of-adults">Number of adults</label>
          </div>

          <div class="input-field nom col m4 s12">
            <input id="number-of-children" type="number" min="0" class="validate" name="noOfChildren">
            <label for="number-of-children">Number of children</label>
          </div>

        </div>

        <div class="row">
          <div class="input-field col m3">
            <label>Business source</label>
            <br/>
          </div>
          <div class="input-field col m2 s3 center-align">
            <input name="buisnessSrc" type="radio" id="walk-ins" value="walkIn" />
            <label for="walk-ins">Walk Ins</label>
          </div>
          <div class="input-field col m2 s3 center-align">
            <input name="buisnessSrc" type="radio" id="clock-inn" value="clockInn" />
            <label for="clock-inn">Clock INN</label>
          </div>
          <div class="input-field col m2 s3 center-align">
            <input name="buisnessSrc" type="radio" id="web-site" value="website" checked/>
            <label for="web-site">Web site</label>
          </div>
          <div class="input-field col m2 s3 center-align">
            <input name="buisnessSrc" type="radio" id="online" value="online" />
            <label for="online">Online</label>
          </div>

        </div>



        <br>
            </div>


            </div>
        </li> <!--end of booking datails-->

        </ul>
    </div>

    
</div>
    <!--
</form>
    <div class="col m2" style="padding-right: 100px">
            <a href="home.html">
                <p class="right-align"><button id="submit-cuz" class="btn btn-large waves-effect waves-light red cuz midddle" name="cancel"  data-target="modal1">Cancel</button></p>
            </a>
            
        </div>
  <!-- Modal Trigger - ->
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
  </div>
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

</body>
</html>
