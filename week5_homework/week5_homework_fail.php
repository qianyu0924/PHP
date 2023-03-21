<?php ob_start(); ?>
<?php
session_start();

if ($_SESSION["login"]=="No") {

}else{
    header("Location:week5_homework_error.php");
}
?>

<html>
<head>
    <title>密碼錯誤</title>
    <meta charset="utf-8">
</head>

<body>
<?php
echo $_SESSION["login"];
?>
    登入失敗!<br/>
    網頁將在三秒後跳回登入頁面或<br/>
    <a href="week5_homework_index.php">點選這裡</a>

</body>
</html>

<?php ob_flush(); ?>
