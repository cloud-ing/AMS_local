
<?php require 'header.php'; ?>

<?php
$pdo=new PDO(
	'mysql:host=192.168.11.130;dbname=journal;charset=utf8', 'interplan', 'password'
);
echo '<table>';
echo '<tr><form action="j_update-input.php" method="post">';
echo '<td>';
echo 'part_idを入れてください：<input type="text" name="part_id" value="">';
echo '</td>';
echo '<td>';
echo 'chapterを入れてください：<input type="text" name="chapter" value="">';
echo '</td>';
echo '</td>';
echo '<td><input type="submit" value="更新"></td>';
echo '</form></tr>';
echo '</table>';
echo '<p></p>';
echo '<table>';
$sql=$pdo->prepare('select * from qa  where part_id=? and　chapter=?');
//$sql->execute([$_REQUEST['part_id'],$_REQUEST['chapter']]);
$sql->execute([1,1]);
echo '$part_id:',var_dump($_REQUEST['part_id']);
echo '$chapter:',var_dump($_REQUEST['chapter']);
echo'$sql',var_dump($sql);
var_dump($sql-> fetchAll());
foreach ($sql->fetchAll() as  $row) {
   echo  var_dump( $row['qa_id'], $row['part_id'], $row['chapter']);
   echo  var_dump($row['q11'], $row['q12'],$row['q21'], $row['q22'],$row['q3'],$row['q4']) ;
   echo  var_dump($row['inputdate'], $row['modified'],$row['confirm']);
    echo '<tr><td>';
	echo '<form action="j_update-output.php" method="post">';
	echo '<input type="hidden" name="id" value="', $row['qa_id'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="name" value="', $row['part_id'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['chapter'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['q11'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['q12'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['q21'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['q22'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['q3'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['q4'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['inputdate'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['modified'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td>';
	echo '<input type="text" name="price" value="', $row['confirm'], '">';
	echo '</td>';
	echo'</tr>';
	echo '<tr>';
	echo '<td><input type="submit" value="更新"></td>';
	echo '</form></tr>';
echo '</table>';
	echo "\n";
}
?>
<?php require 'footer.php'; ?>
