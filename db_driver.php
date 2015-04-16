<?php

include "db.php";
session_start();
$conn = get_conn();

function get_student($entryno,$conn)
{
 
 $sql = "select * from student where entryno='".$entryno."' ;";

 $q = $conn->query($sql) or die('failed');

 $r = $q->fetch(PDO::FETCH_ASSOC);
 
 return $r;   
}

function get_courses($entryno,$conn)
{
 $sql = "select * from courses_done where entryno='".$entryno."' ;";

 $q = $conn->query($sql) or die('failed');
  return $q;

}

function get_upcoming_interviews($conn)
{

 $sql = "select * from interview natural join company;";

 $q = $conn->query($sql) or die('failed');
 return $q;

}

function get_applied_interviews($entryno,$conn)
{
 $sql = "select * from interested where entryno='".$entryno."' ; ";
 
 $q = $conn->query($sql) or die('failed');
 return $q;

}

#################### functions for company


function get_company($cid,$conn)
{
 
 $sql = "select * from company where cid='".$cid."' ;";

 $q = $conn->query($sql) or die('failed');

 $r = $q->fetch(PDO::FETCH_ASSOC);
 
 return $r;   
}


function get_interviews($cid,$conn)
{
 $sql = "select * from interview where cid='".$cid."' ;";
 
 $q = $conn->query($sql) or die('failed');
 
 return $q;

}


?>
