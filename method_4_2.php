        <?php 
        $_SERVER['REQUEST_METHOD'] == 'POST';
        $kokugo = $_POST['kokugo'];
        $_SERVER['REQUEST_METHOD'] == 'POST';
        $sugaku = $_POST['sugaku'];
        $_SERVER['REQUEST_METHOD'] == 'POST';
        $eigo = $_POST['eigo'];
        $total = ($kokugo + $sugaku + $eigo);
        ?> 
        
        <!DOCTYPE html>
        <html lang="ja">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <head>
            <meta charset="UTF-8">
            <title>フォームの練習</title>
        </head>
        <body>
            <div>
                <div class="container">
                    <h1>合計: <?php echo $total ?> </h1>
                    <?php
                    if ($total >= 210) {
                        echo '<br>';
                        echo '･国語' . $kokugo;
                        echo '<br>';
                        echo '･数学' . $sugaku;
                        echo '<br>';
                        echo '･英語' . $eigo;
                    } else {
                        exit;
                    }
                    ?>
                    <form action="" method="POST">
                        <!-- action に違うフォルダを入れたら飛んでキレイになる -->
                        <div>
                            <label for="">国語</label><br>
                            <input type="text" class="form-control" name="kokugo">
                        </div>
                        <div>
                            <label for="">数学</label><br>
                            <input type="text" class="form-control" name="sugaku">
                        </div>
                        <div>
                            <label for="">英語</label><br>
                            <input type="text" class="form-control" name="eigo">
                        </div>
                        <div>
                            <input type="submit" value="送信">
                        </div>
                    </form>
                </div>
                <div>
                    <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
                    <?php echo $message; ?>
                </div>
            </div>
        </body>
        </html>