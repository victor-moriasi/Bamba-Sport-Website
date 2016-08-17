
<!-- 	<form action="" autocomplete="on">
		<input id="search" name="search" type="text" placeholder="Search">
		<input id="search_submit" value="" type="submit">
	</form> -->


<div id="wrap">
	<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
	    <div>
	    	<label class="screen-reader-text" for="s">Search for:</label>
	        <input type="text" value="" name="s" id="s" placeholder="Search..." />
	        <input type="submit" id="searchsubmit" value="Search" />
	    </div>
	</form>
</div>
