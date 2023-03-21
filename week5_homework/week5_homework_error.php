<?php ob_start(); ?>

<html>
<head>
    <title>非法進入</title>
    <meta charset="utf-8">
</head>

<body>

    非法進入!<br/>
    網頁將在三秒後跳回登入頁面或<br/>
    <a href="week5_homework_index.php">點選這裡</a>
<?php
    header("Refresh:3;url=week5_homework_index.php");
?>
</body>
</html>

<?php ob_flush(); ?>
