<!-- <pre><?php print_r($_POST) ?></pre>
<pre><?php print_r($_GET) ?></pre> -->
<?php 
session_start();
//read file into array
$lines = file('../data/bands.csv', FILE_IGNORE_NEW_LINES);

// replace line with new values
$lines[$_POST['linenum']] = "{$_POST['movie_name']},{$_POST['movie_genre']},{$_POST['actors']}";

// create the string to werite to the file
$data_string = implode("\n",$lines);

// write the string to the file, overwriting current contents
$f = fopen('../data/movies.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array(
		'text' => 'Changes have been made.',
		'type' => 'block'
);

header('location:../?p=list_movies');
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