<?php
session_start();

if ($_SESSION["role"]=="master" || $_SESSION["role"]=="teacher" ) {

}else{
    header("Location:week5_homework_error.php");
}
?>
<html>
<head>
    <title>老師登入成功</title>
    <meta charset="utf-8">
</head>

<body>
老師機密<br/><br/>
<a href="week5_homework_logout.php">Logout</a>
</body>
</html>
    