<h2>Add a Movie</h2>
<form class="form-horizontal" action="actions/add_movie.php" method="post">
	  <div class="control-group">
	  <label class="control-label" for="movie_name">Name</label>
	  	<div class="controls">
	  		<input type="text" name="movie_name" placeholder="Required">
	    </div>
	  </div>
	   <div class="control-group">
	  <label class="control-label" for="movie_genre">Genre</label>
	  	<div class="controls">
	  		<input type="text" name="movie_genre" placeholder="Required">
	    </div>
	  </div>
	  <div class="control-group">
	  <label class="control-label" for="actors">Actors</label>
	  	<div class="controls">
	  		<input type="text" name="actors" placeholder="Required">
	    </div></div>
<div class="control-group">
        <label class="control-label" for="theater">Shown in Theaters</label>
           <div class="controls"> <input type="radio" name="theater" value="yes" id="yes">
            Yes</div>
          <label class="radio" for="theater"></label><div class="controls">
            <input type="radio" name="theater" value="no" id="no">
            No </div>
	  </div> 
	
	  <div class="form-actions">
	  	<button type="submit" class="btn btn-primary"><i class="icon-plus-sign"> </i> Add</button>
	  	<button type="button" class="btn">Cancel</button>
	  </div>
  </form>

  
 
  
  
  
  
  
  
  
<!-- 	<table>
		<tr>
			<th>Bands Name</th>
			<td><input type="text" name="band_name" placeholder="Required"/></td>			
		</tr>
		<tr>
			<th>Genre</th>
			<td><input type="text" name="band_genre" placeholder="Optional"/></td>			
		</tr>
		<tr>
			<th># Albums</th>
			<td><input type="text" name="band_albums" placeholder="Required"/></td>			
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" value="Add" /></td>
		</tr>
	</table> -->
