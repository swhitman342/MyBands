<h2>All Bands</h2>
<table class="table table-hover table-striped" >
	<thead>
	<tr>
		<th>Name</th>
		<th>Genre</th>
		<th># Albums</th>
	</tr>
	</thead>
<tbody>
<?php 
// read all like of the CSV file into an array
$lines = file('data/bands.csv',FILE_IGNORE_NEW_LINES);

//counter variable for line number
$i = 0;

// iterate over the array of lines
foreach($lines as $line) {
	$parts = explode(',',$line);
	$name = $parts[0];
	$genre = $parts[1];
	$num_albums = $parts[2];
	echo '<tr>';
		echo "<td>$name</td>";
		echo "<td>$genre</td>";
		echo "<td>$num_albums</td>";
		echo "<td><a href=\"?p=form_edit_band&band=$i\" class=\"btn btn-warning\"><i class=\"icon-edit\"></i></a> <a href=\"actions/delete_band.php?linenum=$i\" class=\"btn btn-danger\"><i class=\"icon-trash\" icon-color=\"white\"></i></a></td>";
	echo '</tr>';
	
	$i++; //increment line number
}
?>
</tbody>

</table>
<?php echo	'<br><a href="?p=add_band" type="button" class="btn btn-primary"><i class="icon-plus-sign"> </i> Add Another</a>';
?>
