<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>World Clock</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/sanitize.css">
</head>
<body>
    <header id="header">
        <div class="inner">
            <a class="logo" href="/php02/index.php">World Clock</a>
        </div>
    </header>
    <main id="main">
        <div class="title">
            <h2>日本と世界の時間を比較</h2>
        </div>
        <div class="contents">
            <form class="form" action="result.php" method="get">
                <div class="item">
                    <select class="item-select" name="city">
                        <option value="シドニー">
                            シドニー
                        </option>
                        <option value="上海">
                            上海
                        </option>
                        <option value="モスクワ">
                            モスクワ
                        </option>
                        <option value="ロンドン">
                            ロンドン
                        </option>
                        <option value="ヨハネスブルグ">
                            ヨハネスブルグ
                        </option>
                        <option value="ニューヨーク">
                            ニューヨーク
                        </option>
                    </select>
                </div>
                <div class="button">
                    <button class="button-submit" type="submit">検索</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>