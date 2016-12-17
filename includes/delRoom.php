<?php
include './connection.php';


deleteRoom("55555");

function deleteRoom($passportID){
    $query="SELECT * FROM customer WHERE passportID='$passportID'";
    $query_run = mysql_query($query);
    $row = mysql_fetch_array($query_run);
    echo $query_run;
    $bedNo=$row["roomNo"];
    echo $bedNo;
    $strDateFrom=$row["dateIn"];
    echo $strDateFrom;
    $strDateTo=$row["dateOut"];
    $bed_array = array();
    echo $strDateTo;
    $query_date="SELECT day1,day2,day3,day4,day5,day6,day7,day8,day9,day10,day11,day12 FROM room_detail WHERE bedNo='$bedNo' ";
    $result_date = mysql_query($query_date);
    $row_date = mysql_fetch_array($result_date);
    $date_array=array($row_date[0],$row_date[1] ,$row_date[2],$row_date[3],$row_date[4],$row_date[5],$row_date[6] ,$row_date[7],$row_date[8],$row_date[9],$row_date[10],$row_date[11]);
    
    $aryR=array();
   // $today=  date('Y-m-d');
  //  $itoday=mktime(1,0,0,substr($today,5,2),     substr($today,8,2),substr($today,0,4));
    $iDateFrom=mktime(1,0,0,substr($strDateFrom,5,2),     substr($strDateFrom,8,2),substr($strDateFrom,0,4));
    $iDateTo=mktime(1,0,0,substr($strDateTo,5,2),     substr($strDateTo,8,2),substr($strDateTo,0,4));
    if ($iDateTo>=$iDateFrom){
        array_push($aryR,date('Y-m-d',$iDateFrom)); // first entry
        while ($iDateFrom<$iDateTo){
            $iDateFrom+=86400; // add 24 hours
            array_push($aryR,date('Y-m-d',$iDateFrom));
        }
    }
    
    foreach ($aryR as $value) {
        echo $value;
    }
    
    $datesdel=array();
    for ($x = 0; $x <12; $x++) {
        foreach ($aryR as $day) {
            if ($date_array[$x]==$day) {
                array_push($datesdel,$x);
            }
        }
    }
    $day_array = array("day1", "day2", "day3","day4","day5","day6","day7",'day8','day9','day10','day11','day12');
    foreach ($datesdel as $day) {
        $queryd = "UPDATE room_detail SET $day_array[$day]='0000-00-00' WHERE bedNo='$bedNo'";
        echo $bedNo;
        $resultd = mysql_query($queryd);
    }

    
    
    
    
}

//deleteRoom("55555");