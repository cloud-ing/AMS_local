<?php require 'header.php'; ?>
<?php
$pdo=new PDO('mysql:host=192.168.11.130;dbname=journal;charset=utf8',
	'interplan', 'password');
$sql=$pdo->prepare('update qa set q11=?, q12=? ,q21=?, q22=?,q3=?, q4=?where part_id=?');
if (preg_match('/[3-5]+/', $_REQUEST['q11'])) {
    if (empty($_REQUEST['q12'])) {
        echo '「どのあたりがよくわからなかったでしょうか？」Q1-2に回答を記入してください。';
    }
}else
    if  (preg_match('/[3-5]+/', $_REQUEST['q11'])){
        if (empty($_REQUEST['q22'])) {
            echo '「どのあたりがよくわからなかったでしょうか？」Q1-2に回答を記入してください。';
        }
 } else
     if (empty($_REQUEST['q3'])) {
         echo '今日学んだ内容で「ここが良かった」「もっとこのようなものを学びたかった」「こうして欲しかった」などがありましたら、Q3に回答を記入してください。';
     } else
         if (empty($_REQUEST['q4'])) {
             echo '講座を終えて、その他、お気づきの点や次回の口座に向けて（意気込みやご要望）がございましたらQ4にご入力ください。
「ここが良かった」「もっとこのようなものを学びたかった」「こうして欲しかった」などがありましたら、Q3に回答を記入してください。';
         }

if ($sql->execute(
    [htmlspecialchars($_REQUEST['q11']),htmlspecialchars($_REQUEST['q12']),htmlspecialchars($_REQUEST['q21']),htmlspecialchars($_REQUEST['q22']),
        htmlspecialchars($_REQUEST['q3']),htmlspecialchars($_REQUEST['q4']),
	$_REQUEST['part_id'], $_REQUEST['chapter']]
))  {
	echo '更新に成功しました。';
} else {
	echo '更新に失敗しました。';
}
?>
<?php require 'footer.php'; ?>
