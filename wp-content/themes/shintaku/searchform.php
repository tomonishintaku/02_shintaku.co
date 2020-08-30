<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
    <div>
        <!--label for="s" class="screen-reader-text"><?php //_e('Search for:','bonestheme'); ?></label-->
        <input type="search" id="s" name="s" value=""
            placeholder="<?php $locale = get_locale(); if ('en_US' == $locale  ) { ?>Search for<?php } else { ?>サイト内を検索する<?php } ?>" />

        <button type="submit" id="searchsubmit"><i
                class="fas fa-search"></i><?php // _e('Search','bonestheme'); ?></button>
    </div>
</form>