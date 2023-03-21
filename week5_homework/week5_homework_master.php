<?php
session_start();

if ($_SESSION["login"]=="masterYes") {
    $_SESSION["role"]="master";
}else{
    header("Location:week5_homework_error.php");
}
?>
<html>
<head>
    <title>校長登入成功</title>
    <meta charset="utf-8">
</head>

<body>
校長登入成功！<br/>

<a href="week5_homework_masterOK.php">校長機密</a><br/>
<a href="week5_homework_teacherOK.php">老師機密</a><br/><br/>
<a href="week5_homework_logout.php">Logout</a>
</body>
</html>
    