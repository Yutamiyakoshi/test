<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>掲示板</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <img src="/Users/miyakoshihiroshidai/Desktop/4eachblog/4eachblog_logo.jpg">
    
    <header>
        
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        
        </ul>
    
    </header>

    <main>
     <div class="main-container">
         <div class="left">
             <h1>プログラミングに役立つ掲示板</h1>

             <h3>入力フォーム</h3>
    <form method="post" action="insert.php">
        <div>
            <label>ハンドルネーム</label>
            <br>
            <input type="text" class="text" size="35" name="handlename">
        </div>

        <div>
            <label>タイトル</label>
            <br>
            <input type="text" class="text" size="35" name="title">
        </div>

        <div>
            <label>コメント</label>
            <br>
            <textarea cols = "35" rows="7" name="comments"></textarea>
        </div>

        <div>
            <input type="submit" class="submit" value="送信する">
        </div>
    </form>

    <div class="kiji">
        <h3>タイトル<h3>
        <div class='contents'>
        記事の中身。記事の中身。
        <div class='handlename'>posted by　通りすがり</div>
        </div>
        </div>

        <div class="kiji">
        <h3>タイトル<h3>
        <div class='contents'>
        記事の中身。記事の中身。
        <div class='handlename'>posted by　通りすがり</div>
        </div>
        </div>




    <div class="right">
                <h2>人気の記事</h2>
                
                <ul>
                    <li>PHPオススメ本</li> <br>
                    <li>PHP MyAdminの使い方</li> <br>
                    <li>今人気のエディタ Top5</li> <br>
                    <li>HTMLの基礎</li> <br>
                </ul>
                
                <h2>オススメリンク</h2>
                
                <ul　class="RU">
                    <li>インターノウス株式会社</li> <br>
                    <li>XAMPPのダウンロード</li> <br>
                    <li>Eclioseのダウンロード</li> <br>
                    <li>Braketsのダウンロード</li> <br>
                </ul>
                
                
                <h2>カテゴリ</h2>
                <ul>
                    <li>HTML</li> <br>
                    <li>PHP</li> <br>
                    <li>MySQL</li> <br>
                    <li>JavaScript</li> <br>
                </ul>
            
            </div>
        </div>
    
    </main>
</body>
</html>