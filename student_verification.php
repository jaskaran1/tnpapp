<?php

include "db.php";
session_start();
$conn = get_conn();

$sql ="select * from student where entryno='".$_REQUEST['entryno']."' ;" ;

$q = $conn->query($sql) or die('failed');

$r = $q->fetch(PDO::FETCH_ASSOC);

if ($r['password'] == $_REQUEST['password'])
 {
  #echo "correct password";
  
  $_SESSION['entryno'] = $_REQUEST['entryno'];
  header("Location: welcome_student.php");
 }
else
 {
  echo "incorrect password";
 }
?>
