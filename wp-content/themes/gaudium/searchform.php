<form id="searchform" method="get" action="<?php echo home_url('/'); ?>">
	<div class="input-group">
	    <input type="search" class="form-control" name="s" placeholder="Search..." value="<?php the_search_query(); ?>">
		<span class="input-group-btn">
	     	<input type="submit" class="btn btn-default" value="Go!">
	  	</span>
	</div>
</form>