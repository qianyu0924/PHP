<HTML>
    <head>
        <title>系烤報名</title>
        <meta charset="utf-8">
    </head>

    <body text="black" bgcolor="#b5f6e9">
        
    <img src="https://ihealth.bwnet.com.tw/AC_Gallery/2020/09/c61c25ca-cdd5-eac1-9163-3ced32b40f41_620.jpg" width="50%" border="1"><br/>
    
    <br/><br/>
    <b>
        哈囉大家～<br/>
        這學期我們有一個活動「系烤」<br/>
        就是要烤肉啦！<br/>
        歡迎大家在3/22一起來共襄盛舉！<br/>
        一起來吃吃喝喝玩樂吧~<br/><br/>
        
        #表單至2/29截止<br/><br/>
        
    <table border="2" bgcolor="white">
        <tr><td>日期</td><td>時間</td><td>地點</td><td>價格</td></tr>
        <tr><td>3/22</td><td>17:00</td><td>高雄大學露營烤肉區(操場旁邊)</td><td>100(有繳系費)、150(沒繳系費)</td></tr>
    </table>
    <br/><br/>

    <form action="week3_homework_result.php" method="post">
        請輸入您的學號：<input type="text" name="id" placeholder="英文大寫+數字"><br/>
        請輸入您的姓名：<input type="text" name="student"><br/><br/>
        要不要參加呢：
        <input type="radio" name="join" value="yes">一定要的啊~
        <input type="radio"name="join" value="no">我再考慮一下下<br/>
        是否有繳交系費：
        <input type="radio" name="money" value="pay">有
        <input type="radio"name="money" value="notpay">沒有<br/>
        請選擇葷素：
        <input type="radio" name="eat" value="meat">葷
        <input type="radio"name="eat" value="vegetarian">素<br/><br/>
        想烤來吃的食材：<br/>
        <input type="checkbox" name="beef">牛肉片
        <input type="checkbox" name="pork">豬肉片
        <input type="checkbox" name="chicken">雞肉串
        <input type="checkbox" name="fish">魚<br/>
        <input type="checkbox" name="shrimp">蝦子
        <input type="checkbox" name="clams">蛤蜊
        <input type="checkbox" name="sausage">香腸
        <input type="checkbox" name="tempura">甜不辣<br/>
        其他：
        <textarea cols="20" rows="1" name="comment"></textarea><br/><br/>

        <input type="submit">
        <input type="reset">
    </form>
    </b>
      
    </body>
</HTML>