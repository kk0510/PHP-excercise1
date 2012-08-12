<?php
// PHPの設定に関係なくエラーを厳密にチェックし、画面に表示するための設定
ini_set('display_errors', 1);
error_reporting(-1);

// nameというキーが存在しないときに参照するとNoticeエラーになります。
// 存在チェックを必ず行い、なければ初期化を行います
$name = (isset($_GET['name']))? $_GET['name']: "";
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
</head>
<body>
<form action="./exe2.php" method="GET">
<input type="text" name="name">
<input type="submit" value="送信！">
</form>
<?php
echo "Let's＼(・ω・)／".htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
?>
</body>
</html>