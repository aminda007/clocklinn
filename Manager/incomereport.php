<?php
error_reporting(0);
session_start();
    if (!$_SESSION["LoggedInM"]) {
    header("Location:../logIn/loginExpired.html");
    exit();    
    }else{
        $username_i=$_SESSION["username_i"];
    }   
?>

<?php
error_reporting(0);
$connection = set_database();
?>


<doctype html>
    
<html>
<head>

<title></title>
<meta name = "viewport" content = "width=device-width, initial-scale=1"/>
<link rel = "stylesheet" href = "https://fonts.googleapis.com/icon?family=Material+Icons">
<link type = "text/css" rel = "stylesheet" href = "../css/materialize.min.css" media = "screen,projection"/>
<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
<link type = "text/css" rel = "stylesheet" href = "../css/style.css">


</head>

<body>

<div class="top-customerform z-depth-1" style="background-color: #448aff">


    <p style="text-align:left; color:white; font-size: 40px;   vertical-align: auto; padding-left: 10px; margin:0;">Income Report </p>

    <p style="text-align:left; color:white; font-size: 28px;  vertical-align: auto; padding-left: 10px; margin:0;">form</p>

</div>
<div class="container">
    <br><br>
    <div class="col m10">
        <ul class=" container col m10 s4" data-collapsible="accordion" style="width: 60em;">
  
                <div class="" >
                    <p></p>
                    <form action="incomereport.php" method="post" name="incomeReport" >
                        <div class="container" style="margin-bottom: 50px">

                            <div class="row">
                                
                                <div class="col m4 " style="padding: 10px;margin: 0">
                                    <p class="right-align"><button id="getdata" style="background-color: #448aff" class="btn btn-large waves-effect waves-light cuz midddle" type="submit" name="getDaily"  >Get Daily Report</button></p>
                                </div>
                                
                                <div class="col m4 " style="padding: 10px;margin: 0">
                                    <p class="right-align"><button id="getdata" style="background-color: #448aff" class="btn btn-large waves-effect waves-light cuz midddle" type="submit" name="getMonthly"  >Get Monthly Report</button></p>
                                </div>
                                
                                <div class="col m4 " style="padding: 10px;margin: 0">
                                    <p class="right-align"><button id="getdata" style="background-color: #448aff" class="btn btn-large waves-effect waves-light cuz midddle" type="submit" name="getAnnual"  >Get Annual Report</button></p>
                                </div>
                            </div>
                            
                            

                            <div class="row z-depth-1" style="padding: 20px" >

                                <?php
                                $total = 0;              
                                    $report = getReport();
                                    if (isset($report)) {                                      
                                        $tableout = "<table class='highlight '><thead>
                                                <tr>
                                                    <th data-field='item'>Date</th>
                                                    <th data-field='date' >Desciption</th>
                                                    <th data-field='item' >Price</th>                                                   
                                                </tr>
                                            </thead>";
                                        foreach ($report as $key => $subarray) {
                                            $tableout.="<tr>";
                                            $total+=(int) $subarray[2];
                                            foreach ($subarray as $subkey => $element) {
                                               
                                                    $tableout.="<td >$element</td>";                                                
                                            }
                                            $tableout.="</tr>";
                                        }
                                        echo $tableout;                                      
                                        echo '<tr style="color: #448aff; font-size:22px;border-top:1px solid gray"><td></td><td>Total income</td>';
                                        echo "<td class=''>{$total}</td></tr>";
                                        echo "</table>";
                                    }
                                
                                ?>


                            </div>



                        </div>
                    </form>
                </div>

            </li> 

        </ul>
    </div>

    <div class="row container col m2">

    </div>
    <!-- home button -->
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
        <a class="btn-floating btn-large red" href="homeManager.php">
            <i class="extar-large material-icons">home</i>
        </a>

    </div>
    <!-- home button -->
</div>


<?php
function set_database() {
    $dbhost = "localhost";  //server
    $dbuser = "clockinnuser"; //databae user name
    $dbpass = "1234";   //databae user password
    $dbname = "dbclockinn";     //databae name
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    //testing errors
    if (mysqli_connect_errno()) {
        die("Database connection failed:" . mysqi_connect_error() . "(" . mysqli_connect_errno() . ")");
    } else {
        return $connection;
    }
}

function database_read($connection, $table, $where = '', $order = '') {
    $query = "SELECT * FROM ";
    $query .=$table;
    $query .=$where;
    $query .=$order;
    $dbresult = mysqli_query($connection, $query);

    if (!$dbresult) {
        die("Database query failed");
    } else {

        return $dbresult;   //this is the result for required fields
    }
}


function getReport() {
    global $connection;
  
            $dbresult = database_read($connection, "incomerecord");
            $month=date('m');
            $year=date('Y');
            $date=  date('Y-m-d');
            echo $date;
            
            
        if (isset($_POST['getDaily'])) {
          
           $billarray = get_income_array("date","year",$date,$year, $dbresult);
            
            return $billarray;//daily income
        }
        else if (isset($_POST['getMonthly'])) {
          
            $billarray = get_income_array("Month","year",$month,$year, $dbresult);
            
            return $billarray; //month income
        }
        
        else if (isset($_POST['getAnnual'])) {
        
            $billarray = get_income_array("year","year",$year,$year, $dbresult);
            
            return $billarray;//anual income
        }
        
    
    

}

function get_income_array($conditionCol1,$conditionCol2,$checkCond1,$checkCond2,$dbresult) {
    $array=[0];
    while ($row = mysqli_fetch_assoc($dbresult)) {     
        if(($row[$conditionCol1]==$checkCond1) && ($row[$conditionCol2]==$checkCond2)){
                $array[]= [$row["date"],$row["description"],$row["value"]];
        }
    }
    return $array;
}
       

?>



<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>

<script type="text/javascript">
  //custom JS code

</script>

</body>
</html>



