<?php
    $tour_name = ['ちょい乗り3時間' , 'たっぷりライド5時間' , '満喫トレック8時間' , 'フリーライド' , '夢乃井発着ツアー' , 'ダイワロイネットホテル姫路発着'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php  foreach ($tour_name as $tours): ?>
    <div>
        <h1>ツアー名</h1>
        <span><?php echo $tours;?></span>
    </div> 
    <?php endforeach; ?>
</body>
</html>




<!-- <?php
    $product_name = ['人気のGパン' , 'タイトなTシャツ' , 'スカート' , '帽子'];    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php foreach ($product_name as $product): ?>
    <div>
        <h1>商品名</h1>
        <span><?php echo $product;?></span>
    </div>
    <?php endforeach; ?>
</body>
</html> -->