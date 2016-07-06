<?php 
	include ("connect.php"); 

	$sql = "SELECT * FROM table_checklist_static ORDER BY ordinal ASC, no ASC";
	$PDOStatement = $PDO -> prepare($sql);
	$PDOStatement -> execute();
	$result = $PDOStatement->fetchAll();
	// var_dump($result);
?>

<script src="js/table-new-create.js"></script>
<div class="pageheader">
	<h2><i class="fa fa-home"></i> Safety Statistik Table</h2>
</div>

<div class="contentpanel">
	<div class="panel panel-default">
		<div class="panel-body">
			<div style="margin-bottom: 20px;"><a class="btn btn-white">Add New Data</a></div>
			<div class="table-responsive">
				<table class="table th-cursor" id="table2">
					<thead>
						<tr>
							<th>No</th>
							<th>Pertanyaan</th>
							<th>Pekerjaan</th>
							<th>Inserted</th>
							<th>Updated</th>
							<th>Option</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($result as $key => $value): ?>
							<tr class="odd gradeX">
								<td align="center"><?php echo($key+1); ?></td>
								<td><?php echo($value["pertanyaan"]); ?></td>
								<td><?php echo($value["pekerjaan"]); ?></td>
								<td><?php echo($value["inserted"]); ?></td>
								<td><?php echo($value["updated"]); ?></td>
								<td align="center"><span class="glyphicon glyphicon-edit"></span>&nbsp;&nbsp;<span class="glyphicon glyphicon-trash"></span></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- table-responsive -->

		</div><!-- panel-body -->
	</div><!-- panel -->
</div><!-- contentpanel -->