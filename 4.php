<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="POST">
        2023年7月何日？：<input type="text" name="num"><br>
        <br><input type="submit" value="表示">
    </form>
    <h1>結果表示</h1>

    <?php

        $youbi = ["金曜日", "土曜日", "日曜日", "月曜日", "火曜日", "水曜日", "木曜日"];
        
        if (isset($_POST["num"])) {
            $i = filter_input(INPUT_POST, 'num', FILTER_VALIDATE_INT);
            if (is_int($i) == false) {
                echo "数字を入力してください";
            }elseif (1 > $i || $i > 31) {
                echo "1から31の数値を入力してください";
            }else{
                $x = $i % 7;
                echo $youbi[$x];
            }
            
        }

    ?>
</body>
</html>