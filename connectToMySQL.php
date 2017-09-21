<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>連接到 mysql|PHP</title>
</head>
<body>
    <h1>連接到 mysql</h1>
    <?php
        echo "測試連結資料庫...";

        //註解:變數 用來設定連線資料
        $host ="localhost";  //請看 主機上的 /etc/hosts
        $user ="homestead";
        $password ="secret";

        //執行連線到資料庫的動作,並將回傳的東西存放到$dbLink中
        $dbLink = new mysqli($host,$user,$password);

        //檢查是否連線錯誤
        if($dbLink->connect_error)
        {
//            die("連線錯誤:".$dbLink->connect_error);//物件導向
            die("連線錯誤:".mysqli_connect_error());//程序導向
        }
        else
            echo "連線成功<br>~";
    ?>
</body>
</html>