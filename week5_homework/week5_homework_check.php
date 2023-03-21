<?php
session_start();
$studentID="student";
$studentPWD="6666";
$teacherID="teacher";
$teacherPWD="5438";
$masterID="master";
$masterPWD="0857";

$id=$_POST["id"];
$pwd=$_POST["pwd"];

if(($studentID==$id)&&($studentPWD==$pwd)) {
    $_SESSION["login"]="studentYes";
    header("Location:week5_homework_student.php");
}else if(($teacherID==$id)&&($teacherPWD==$pwd)) {
    $_SESSION["login"]="teacherYes";
    header("Location:week5_homework_teacher.php");
}else if(($masterID==$id)&&($masterPWD==$pwd)) {
    $_SESSION["login"]="masterYes";
    header("Location:week5_homework_master.php");        
}else {
    $_SESSION["login"]="No";
    header("Location:week5_homework_fail.php");
}
?>