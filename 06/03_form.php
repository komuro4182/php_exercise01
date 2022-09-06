<?php

// 変数を用意
$msg = '';
$err_msg = '';
// methodがPOSTだったら変数に値をセットする
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $msg = $_POST['message'];

    if (empty($message)) {
        $err_msg = '年齢を入力してください｡';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>フォームの練習</title>
</head>

<body>
    <h1>POSTメソッド</h1>
    <form action="" method="POST">
        <?php if ($err_msg) : ?>
        <ul>
            <li><?= $err_msg ?></li>
        </ul>
        <?php endif; ?>
        <div>
            <label for="">年齢</label><br>
            <input type="text" name="message">
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <?php if ($msg) : ?>
    <p>私は<?= htmlspecialchars($msg, ENT_QUOTES, 'UTF-8') ?>歳です</p>
<?php endif; ?>
</body>

</html>
