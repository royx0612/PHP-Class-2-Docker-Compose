<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker Compose PHP</title>
</head>

<body>
    <h1>Hi, 你好：</h1>
    <p><?php print '如果你看得到這個一行，是用 PHP 生成的。'; ?></p>
    <p><?php echo 'PHP version: ' . phpversion(); ?></p>
    <?php
    $dsn = 'mysql:host=db;dbname=app;charset=utf8';
    $username = 'user';
    $password = 'user_password';

    try {
        $dbh = new PDO($dsn, $username, $password);
        echo "連接資料庫：已成功連接到 MySQL 伺服器！";
    } catch (PDOException $e) {
        echo '連接資料庫：' . $e->getMessage();
    }
    ?>
    <?php phpinfo(); ?>
</body>

</html>