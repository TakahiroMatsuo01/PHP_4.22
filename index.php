<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sum =0;
    for($i = 1; $i <= 100; $i++){
        $sum += $i;
        if($sum > 1000){break;}
    }
    print "合計が1000を超えるのは、１〜{$i}を加算した時です。"
    ?>
</body>
</html>