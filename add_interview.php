<?php

include "db.php";
session_start();
$conn = get_conn();

# welcome to add_interview.php

$date = $_REQUEST['date'];

$time =  $_REQUEST['time'];

$type =  $_REQUEST['type'];

$num_rounds =  $_REQUEST['num_of_rounds'];

if ($_REQUEST['resume_shortlist'] != "True")
 $resume =  "False";
else
 $resume =  $_REQUEST['resume_shortlist'];


$min_c = $_REQUEST['min_cgpa'];

$min_10 = $_REQUEST['min_10th_percen'];

$min_12 =  $_REQUEST['min_12th_percen'];

$degree = $_REQUEST['degree'];

$job_l = $_REQUEST['job_location'];

$job_s = $_REQUEST['job_salary'];

$job_d = $_REQUEST['job_designation'];


$sql = "insert into interview values('".$date."','".$time."','".$type."','".$_SESSION['cid']."','".$num_rounds."','".$resume."','".$min_c."','".$min_10."','".$min_12."','".$degree."','".$job_l."','".$job_s."','".$job_d."','request'); ";


$q = $conn->exec($sql) or die('failed');

header("Location: welcome_company.php");

?>
