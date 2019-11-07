<form method="get" action="<?php echo home_url( '/' ); ?>" >
  <input type="text" placeholder="<?php echo esc_attr_x( 'مثلا:ساعت رولکس', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s" value="">
  <button type="button" name="button">
<i class="fa fa-search" aria-hidden="true"></i>
</button>

</form>
