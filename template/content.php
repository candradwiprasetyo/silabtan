<?php 
$sql = "SELECT * FROM user WHERE username = :name";
/**
 * @var PDOStatement
 */
$PDOStatement = $PDO -> prepare($sql);
$PDOStatement -> bindValue("name", "admin");
$PDOStatement -> execute();
// $result = $PDOStatement->queryAll();
$result = $PDOStatement -> fetchAll();

var_dump($result);
?>
<table>
	<?php foreach($result as $key => $value):
	?>
	<tr>
		<td><?php echo($value["username"]); ?></td>
	</tr>
	<?php endforeach; ?>
</table>