<?php 
// Read all lines of the CSV file into an array
$lines = file('data/movies.csv',FILE_IGNORE_NEW_LINES);

// get the line associated with the 'movie' parameter in the QS
$movie = explode(',',$lines[$_GET['movie']]);
?>

<h2>Edit Band</h2>
<form class="form-horizontal" action="actions/edit_movie.php" method="post">
	<input type="hidden" name="linenum" value="<?php echo $_GET['movie']?>"/>
	  <div class="control-group">
	  <label class="control-label" for="movie_name">Name</label>
	  	<div class="controls">
	  		<?php echo input('movie_name','required',$movie[0])?>
	    </div>
	  </div>
	   <div class="control-group">
	  <label class="control-label" for="movie_genre">Genre</label>
	  	<div class="controls">
	  		<?php echo input('movie_genre','required',$movie[1])?>
	    </div>
	  </div>
	  <div class="control-group">
	  <label class="control-label" for="Actors">Actors</label>
	  	<div class="controls">
	  		<?php echo input('actors','required',$movie[2])?>
	    </div>
	  </div>
	   <div class="control-group">
        <label class="control-label" for="theater">Shown in Theaters</label>
           <div class="controls"> <input type="radio" name="theater" value=",yes" id="yes">
            Yes</div>
          <label class="radio" for="theater"></label><div class="controls">
            <input type="radio" name="theater" value=",no" id="no">
            No </div>
	  </div>	
	  <div class="form-actions">
	  	<button type="submit" class="btn btn-warning"><i class="icon-edit"></i> Edit</button>
	  	<a href="?p=list_movies"><button type="button" class="btn"> Cancel</button></a>
	  </div>
 </form>