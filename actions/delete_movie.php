<!-- <pre><?php print_r($_POST) ?></pre>
<pre><?php print_r($_GET) ?></pre> -->
<?php 
session_start();
//read file into array
$lines = file('../data/movies.csv',FILE_IGNORE_NEW_LINES);

// replace line with new values
unset($lines[$_GET['movie']]);

// create the string to werite to the file
$data_string = implode("\n",$lines);

// write the string to the file, overwriting current contents
$f = fopen('../data/movies.csv','w');
fwrite($f,$data_string);
fclose($f);

$_SESSION['message'] = array (
			'text' => 'Your movie has been deleted.',
			'type' => 'error'
		);

header('location:../?p=list_movies');

?>