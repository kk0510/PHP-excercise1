
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
ini_set('display_errors', 1);
error_reporting(-1);
echo "Let's＼(・ω・)／".htmlspecialchars($_GET['name']);
?>
</body>
</html>