<?php
$members = ['Bob', 'Tom', 'Ken'];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <h1>講師リスト</h1>
    <ul>
        <?php foreach ($members as $member) : ?>
            <li>
                <?= $member ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>