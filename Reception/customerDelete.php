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
// Connecting to Database using Mysql
include './connection.php';
$passportID=$_POST['passportID'];
$query="SELECT * FROM customer WHERE passportID='$passportID'";
$query_run = mysql_query($query);

if($query_run){
    $query_num_rows = mysql_num_rows($query_run);
   // echo 'fhfhf';
    if($query_num_rows==0){
        echo "<script type='text/javascript'>alert('invalid passportID!')</script>";
       //header("Location:customerDeleteEmpty.php");
        //echo 'Invalid passportID';
    }
else {
}
}

$row = mysql_fetch_array($query_run);

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

      <p style="text-align:left; color:white; font-size: 40px; font-style:normal ; vertical-align: auto; padding-left: 10px; margin:0;">Customer Details </p>
      <p style="text-align:left; color:white; font-size: 28px;  vertical-align: auto; padding-left: 10px; margin:0;">form</p>  
    </div>
    <div class="container">
        <div  class="row display-animation">
            <div id="content" class=" col m12 s12 card vdivide  white" style="background-color: white;margin:auto;height: 84%; ">
                <br>
                <br>
                <!-- submit PassportID -->
                <div class="row" style="padding-left: 60px">
                    <form class="col s12 m12" action="customerDelete.php" method="post">
                        <div class="row" >
                            <div class="input-field col s6 m6">
                                <input placeholder="ID" id="passportID" type="text" class="validate" name="passportID">
                                <label for="passportID">PassportID</label>
                            </div>
                        <div class="col s6 m6 center" style="padding-top: 5px">
                            <button class="btn waves-effect waves-light " type="submit"><i class="mdi-action-account-circle"></i>     View</button>
                        </div>
                        </div>
                    </form>
                </div>
                
                <!-- Show Customer Details-->
                <div>
                    <h3>Details</h3>
                    <table class='striped'>
                       
                        <tbody>
                            <tr>
                                <td>First Name</td>
                                <td><?php echo $row['firstName'];?></td>
                            </tr>
                            <tr>
                                <td>Last Name</td>
                                <td><?php echo $row['lastName'];?></td>
                            </tr>
                            <tr>
                                <td>Passport/ID Number</td>
                                <td><?php echo $row['passportID'];?></td>
                            </tr>
                            <tr>
                                <td>Room number</td>
                                <td><?php echo $row['roomNo'];?></td>
                            </tr>

                            
                        </tbody>
                      </table>
                </div>
                <form action="customerDeleteSubmit.php" method="post">
                <!-- Delete Button -->
                <input type="hidden" id="passportID" name="passportID" value="<?php echo $row['passportID'];?>"/>
                <div class="row container col m6">
                    <div class="col m6">
                        <p class="right-align"><button id="submit-cuz" class="btn btn-large waves-effect waves-light cuz midddle"  type="submit" name="submit">Delete</button></p>                     
                    </div>      
                </div>
              </form>

            </div>
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