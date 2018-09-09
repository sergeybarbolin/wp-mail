<form method="get" id="searchform" class="search_form" action="<?php echo $_SERVER['PHP_SELF']; ?>">

	<input type="text" placeholder="Поиск по сайту" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" >
	<input type="submit" value="" id="searchsubmit">
	
</form>
