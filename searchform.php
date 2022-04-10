<form role="search" action="<?php echo esc_url(home_url('/')); ?>" method="GET" id="searchform" class="searchform">
    <div>
        <label class="screen-reader-text soktext" for="s" >Sök efter:</label>
        <input name="s" id="s" type="text" value="<?php the_search_query();?>" />
        <input type="submit" value="Sök" />
    </div>
</form>