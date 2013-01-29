<?php session_start()?>
<!-- <pre><?php print_r($_POST);?></pre> -->
<?php
//validate that each piece of info was provided
if(  $_POST['band_name'] != ''
     && $_POST['band_genre'] != ''
     && $_POST['band_albums']) {	
	// add this band to the csv file
	//(1) open the file for writing
	$f = fopen('../data/bands.csv','a');
	//(2) Write the new band's info to the file
	fwrite($f,"\n{$_POST['band_name']},{$_POST['band_genre']},{$_POST['band_albums']}");
	//(3) Close the file
	fclose($f);
	header('location:../?p=list_bands');
} else {
	$_SESSION['POST'] = $_POST;
	
	//redirect to form
	header('Location:../?p=add_band'); 	
	$_SESSION['message'] = 'Please enter all required information';
	
	
}


