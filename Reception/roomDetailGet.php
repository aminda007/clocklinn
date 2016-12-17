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
include './connection.php';


//$period = new DatePeriod(new DateTime('2010-10-01'),new DateInterval('P1D'),new DateTime('2010-10-05'));

//echo $period;
/*
function createDateRangeArray($strDateFrom,$strDateTo)
{
    // takes two dates formatted as YYYY-MM-DD and creates an
    // inclusive array of the dates between the from and to dates.

    // could test validity of dates here but I'm already doing
    // that in the main script

    $aryRange=array();

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
    return $aryRange;
}

$arry=createDateRangeArray("2016-05-16","2016-05-20");
foreach ($arry as $value) {
    echo "$value <br>";
    
}



$bedNo='3';

//$query="UPDATE customer SET firstName='$firstName', nationality='$nationality' WHERE passportID='$passportID'";
$query="UPDATE room_detail SET day1='2016-05-16', day2='2016-05-18' WHERE bedNo='$bedNo' ";



$result = mysql_query($query);

//$datearray = array("day1", "day2", "day3","day4","day5","day6","day7",'day8','day9','day10','day11','day12');

echo 'dtfghjk+++___';

$query_date="SELECT day1,day2,day3,day4,day5,day6,day7,day8,day9,day10,day11,day12 FROM room_detail WHERE bedNo='$bedNo' ";
$result_date = mysql_query($query_date);
$row_date = mysql_fetch_array($result_date);
$date_array=array($row_date[0],$row_date[1] ,$row_date[2],$row_date[3],$row_date[4],$row_date[5],$row_date[6] ,$row_date[7],$row_date[8],$row_date[9],$row_date[10],$row_date[11]);

*/
    $bed_array = array();
for ($x = 1; $x <= 42; $x++) {
    $query_date="SELECT day1,day2,day3,day4,day5,day6,day7,day8,day9,day10,day11,day12 FROM room_detail WHERE bedNo='$x' ";
    $result_date = mysql_query($query_date);
    $row_date = mysql_fetch_array($result_date);
    $date_array=array($row_date[0],$row_date[1] ,$row_date[2],$row_date[3],$row_date[4],$row_date[5],$row_date[6] ,$row_date[7],$row_date[8],$row_date[9],$row_date[10],$row_date[11]);
    $booked_dates=array();
    foreach ($date_array as $value) {
        if ($value!="0000-00-00") {
            //echo $value."----";
            array_push($booked_dates, $value);
        }
    }
    array_push($bed_array, $booked_dates);
}


function getcolour($bedNo,$date){
    global $bed_array;
    foreach ($bed_array[$bedNo-1] as $value) {
        if ($value==$date) {
            return "red";
        }
    }
return "green";
}
function getrooms($roomType,$date){
    global $bed_array;
    $bed6_array=  array_slice($bed_array,0,18);
    $bed6=0;
    foreach ($bed6_array as $value) {
        foreach ($value as $datei) {
            if($date==$datei)
                $bed6=$bed6+1;
            }
    }

    $bed4_array=array_slice($bed_array,18,16);
    $bed4=0;
    foreach ($bed4_array as $value) {
        foreach ($value as $datei) {
            if($date==$datei)
                $bed4=$bed4+1;
            }
        }

    $room_array=array_slice($bed_array,34,8);
    $room=0;
    foreach ($room_array as $value) {
        foreach ($value as $datei) {
            if($date==$datei)
                $bed6=$bed6+1;
            }
        }

    if($roomType=="6bed"){
        return 18-$bed6;
    }elseif($roomType=="4bed"){
        return 16-$bed4;
    }  else {
        return 8-$room;
    }
    
}
//echo getcolour(4,'2016-05-16');

?>
