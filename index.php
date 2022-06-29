<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>4eachblog  掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<header>
    <img src="4eachblog_logo.jpg" >
    <div class="header-list">
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </div>
</header>
        
<main>
    <div class="left">
        <h2>プログラミングに役立つ掲示板</h2>
         
        <div class="form">
            <form method="POST" action="insert.php">
                <div>
                    <h3>入力フォーム</h3>
                    <label>ハンドルネーム</label>
                    <br>
                    <input type="text" class="text" size="35"S name="handlename">
                </div>

                <div>
                    <label>タイトル</label>
                    <br>
                    <input type="text" class="text" size="35" name="title">
                </div>

                <div>
                    <label>コメント</label>
                    <br>
                    <textarea cols="80" rows="7" name="comments"></textarea>
                </div>

                <div>
                    <input type="submit" class="submit" value="投稿する">
                </div>
            </form>
        </div>
        
        <!DOCTYPE html>
        <html lang="ja">

        <head>
        <mata charset="UTF-8">
        <title>4eachblog 掲示板</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        </head>

        <body>

        <?php

            mb_internal_encoding("utf8");

            $pdo= new PDO("mysql:dbname=lesson1;host=localhost;","root","");
            $stmt=$pdo->query("select * from 4each_keijiban");

        ?>

        <?php

            while($row=$stmt->fetch()){
            echo "<div class='kiji'>";
            echo "<h3>".$row['title']."</h3>";
            echo "<div class='contents'>";
            echo $row['comments'];
            echo "<div class='handlename'>posted by".$row['handlename']."</div>";
            echo "</div>";
            echo "</div>";
            }

        ?>

        </body>

    </div>

    <div class="right">
        <div class="title">
            <h2>人気の記事</h2>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP MyAdminの使い方</li>
                <li>今人気のエディタ Top5</li>
                <li>HTMLの基礎</li>
            </ul>
        </div>
        <div class="title">
            <h2>オススメリンク</h2>
            <ul>
                <li>インターノウス株式会社</li>
                <li>XAMPPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
        </div>
        <div class="title">
            <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>JavaScript</li>
                </ul> 
        </div>  
    </div>
        
    <footer>
             <h4>copyright©internous|4each_blog_the_which_provides_A_to_Z_about_programming.</h4>
    </footer>

</main>