<!-- <pre><?php print_r($_POST) ?></pre>
<pre><?php print_r($_GET) ?></pre> -->
<?php 
session_start();
//read file into array
$lines = file('../data/bands.csv', FILE_IGNORE_NEW_LINES);

// replace line with new values
$lines[$_POST['linenum']] = "{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_albums']}";

// create the string to werite to the file
$data_string = implode("\n",$lines);

// write the string to the file, overwriting current contents
$f = fopen('../data/bands.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Your band has been edited.',
		'type' => 'block'
);

header('location:../?p=list_bands');
?>

<pre><?php print_r($_POST) ?></pre>
<pre><?php print_r($_GET) ?></pre>
<?php 
function delete(){

	if($_GET['band'] != ''){
		$name= '';
		$genre= '';
		$albums = '';
	} else{
		$lines['linenum'] = '';
	}
}

?>