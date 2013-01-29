<!-- <pre><?php print_r($_POST) ?></pre>
<pre><?php print_r($_GET) ?></pre> -->
<?php 
//read file into array
$lines = file('../data/bands.csv', FILE_IGNORE_NEW_LINES);

// replace line with new values
unset($lines);

echo 'band deleted';

// create the string to werite to the file
$data_string = implode("\n",$lines);

// write the string to the file, overwriting current contents
$f = fopen('../data/bands.csv','w');
fwrite($f,$data_string);
fclose($f);

header('location:../?p=list_bands');
?>