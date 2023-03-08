<head>
    <title>結果</title>
    <meta charset="utf-8">
</head>

<?php

if(isset($_POST["id"])) {
    $id=$_POST["id"];
    $student=$_POST["student"];
    $join=$_POST["join"];
    $money=$_POST["money"];
    $eat=$_POST["eat"];
    
    echo "您的學號是：".$id."<br/>";
    echo "您的姓名是：".$student."<br/>";

    if($join=="yes") {
        echo "您選擇參加<br/>";
    }else{
        echo "您選擇不參加<br/>";
    }

    if($money=="pay") {
        echo "有繳系費<br/>";
    }else{
        echo "沒繳系費<br/>";
    }

    if($eat=="meat") {
        echo "您吃葷<br/>";
    }else{
        echo "您吃素<br/>";
    }
    
    echo "您想烤來吃的食材有：";
    if(isset($_POST["beef"])) {
        $beef=$_POST["beef"];
        echo "牛肉片 ";
    }
    if(isset($_POST["pork"])) {
        $pork=$_POST["pork"];
        echo "豬肉片 ";
    }
    if(isset($_POST["chicken"])) {
        $chicken=$_POST["chicken"];
        echo "雞肉串 ";
    }
    if(isset($_POST["fish"])) {
        $fish=$_POST["fish"];
        echo "魚 ";
    }
    if(isset($_POST["shrimp"])) {
        $shrimp=$_POST["shrimp"];
        echo "蝦子 ";
    }
    if(isset($_POST["clams"])) {
        $clams=$_POST["clams"];
        echo "蛤蜊 ";
    }
    if(isset($_POST["sausage"])) {
        $sausage=$_POST["sausage"];
        echo "香腸 ";
    }
    if(isset($_POST["tempura"])) {
        $tempura=$_POST["tempura"];
        echo "甜不辣 ";
    }
    echo "<br/>";
    
    $comment=$_POST["comment"];
    echo "其他：";
    echo nl2br(strip_tags(($comment))); 

}else{
    echo "資料輸入錯誤";
}

?>