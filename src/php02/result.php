<?php

require_once('functions/search_city_time.php');

$tokyo = searchCityTIme('東京');
$city = htmlspecialchars($_GET['city'], ENT_QUOTES);
$comparison = searchCityTime($city);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/result.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/sanitize.css">
</head>
<body>
    <header id="header">
        <div class="inner">
            <a class="logo" href="/php02/result.php">World Clock</a>
        </div>
    </header>
    <main id="main">
        <div class="contents">
            <div class="result">
                <div class="result-card">
                    <div class="result-card__img">
                        <img class="result-card__img--city" src="img/<?php echo $tokyo['img']?>" alt="日本国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $tokyo['name']?></p>
                        <p class="result-card__time"><?php echo $tokyo['time']?></p>
                    </div>
                </div>
                <div class="result-card">
                    <div class="result-card__img">
                        <img class="result-card__img--city" src="img/<?php echo $comparison['img']?>" alt="国旗">
                    </div>
                    <div class="result-card__body">
                        <p class="result-card__city"><?php echo $comparison['name']?></p>
                        <p class="result-card__time"><?php echo $comparison['time']?></p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>