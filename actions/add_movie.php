<!-- <?php session_start()?> 
 <pre><?php print_r($_POST);?></pre> -->
<?php
//validate that each piece of info was provided
if(  $_POST['movie_name'] != ''
     && $_POST['movie_genre'] != ''
     && $_POST['actors'] != ''	) {	
	// add this movie to the csv file
	//(1) open the file for writing
	$f = fopen('../data/movies.csv','a');
	//(2) Write the new movies's info to the file
	fwrite($f,"\n{$_POST['movie_name']},{$_POST['movie_genre']},{$_POST['actors']},{$_POST['theater']}");
	//(3) Close the file
	fclose($f);
	header('location:../?p=list_movies');
} else {
	$_SESSION['POST'] = $_POST;
	
	//redirect to form
		header('Location:../?p=add_movie'); 	
	$_SESSION['message'] = 'Please enter all required information';
	
	
}

if( $_SESSION['theater'] = 'yes') {
	$_POST['theater'] = 'yes';
} else  {
	$_POST['theater'] = 'no';
}

