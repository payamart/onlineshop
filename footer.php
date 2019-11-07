<footer>
<div class="row footstyle">

  <div class="col-12 col-sm-6 col-md-6 col-lg-3">
  <?php dynamic_sidebar( 'footerone' ); ?>
</div>




  <div class="col-12  col-md-6 col-lg-4">
  <?php dynamic_sidebar( 'footertwo' ); ?>
  <div class="nemads">
    <img src="<?php echo get_template_directory_uri(); ?>/images/nemad1.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/nemad2.png" alt="">
          <img src="<?php echo get_template_directory_uri(); ?>/images/logo_kasboka.png" alt="">

  </div>
  </div>



  <div class="col-12 col-md-12 col-lg-5">

    <div class="footbox ">
      <header>
        <h4>خبرنامه</h4>
      </header>

      <section>
        <div class="tozih">

        <p>
        برای اطلاع از محصولات جدید، تخفیف ها و در یافت کپن تخفیف در خبرنامه ما عضو شوید.</p>
        <div class="khabarname  ">
        <?php
          $onkh = ot_get_option( 'onkh' , false );
          $khabar = ot_get_option( 'khabar' , false );
          if ( $onkh !== false ) { ?>

        <a href="<?php echo $khabar; ?>"><?php echo $onkh; ?></a>

    <?php } ?>  </div>
    </div>
      </section>
    </div>








  </div>
</div>
</footer>
</div>

</div>
<div class="footercopy">

کلیه حقوق برای فروشگاه انلاین ساعت محفوظ می باشد.</div>

</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).ready(function() {
jQuery(".sliderbox").owlCarousel({
  'items': 1,
  'rtl': true,
});

jQuery('#sidemobilev').sidr();

});
</script>
</body>

</html>
