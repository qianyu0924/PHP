<?php
session_start();

if ($_SESSION["role"]=="teacher" || $_SESSION["role"]=="student") {

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
學生機密<br/><br/>
<a href="week5_homework_logout.php">Logout</a>
</body>
</html>
    