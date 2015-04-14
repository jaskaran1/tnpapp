<?php

#apply_interview.php

include "db.php";
session_start();
$conn = get_conn();


$sql = "select * from interview where cid='".$_REQUEST['a']."' and date='".$_REQUEST['b']."' ;";

$q = $conn->query($sql) or die('failed');

$r = $q->fetch(PDO::FETCH_ASSOC);

$sql2 = "insert into interested values('".$r['cid']."','".$r['date']."','".$r['time']."','".$r['type']."','".$_SESSION['entryno']."','request') ;" ;


$q = $conn->exec($sql2) or die('failed');

header("Location: welcome_student.php");


?>
