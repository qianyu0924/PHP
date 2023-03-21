<?php
session_start();

if ($_SESSION["login"]=="studentYes") {
    $_SESSION["role"]="student";
}else{
    header("Location:week5_homework_error.php");
}
?>
<html>
<head>
    <title>學生登入成功</title>
    <meta charset="utf-8">
</head>

<body>
學生登入成功!<br/>
<a href="week5_homework_studentOK.php">學生機密</a><br/><br/>
<a href="week5_homework_logout.php">Logout</a>
</body>
</html>
    