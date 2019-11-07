<?php get_header(); ?>
        <div class="row">
          <div class="col-12  ">
<main>
            <div class="owl-carousel sliderbox d-none d-sm-block">
              <?php $slider = ot_get_option ( 'slides' , false);
               foreach ($slider as $key => $value) { ?>

                 <div>
                   <div class="singleslide">
                     <a href="<?php echo $value['url'] ?>"><h2><?php echo $value['title'] ?></h2></a>
                     <a href="<?php echo $value['url'] ?>">
                       <div class="callta"><?php echo $value['calltoaction'] ?></div>
                     </a>
                     <img src="<?php echo $value['image'] ?>" alt="">
                   </div>
                 </div>
              <?php
               }
              ?>





                  </div>

                  <div class="row">
                    <?php
                      $productactive = ot_get_option( 'productactive' , false );
                      if ( $productactive == on ) { ?>


                    <div class="col-12">
                      <div class="  titleb titlearea">
                        <div class="row justify-content-between">
                          <div class="col_3">
                            <h3>دسته بندی محصولات</h3>
                          </div>
                        </div>
                      </div>
                        </div>

                        <?php
                        $productcount = ot_get_option( 'productcount' , false );
                        $the_query = new WP_Query( array( 'post_type' => 'product','posts_per_page'=>$productcount ) ); ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>


                    <div class="col-4">
                      <div class="contentboxmani">
                        <header>
                          <?php
                            $daste1 = ot_get_option( 'daste1' , false );
                            $dlink1 = ot_get_option( 'dlink1' , false );
                            if ( $sptitle !== false ) { ?>

                          <a href="<?php echo $dlink1; ?>"><img src="<?php echo $daste1; ?>"></a>

                    <?php } ?>
                </header>


                      </div>
                    </div>

                    <div class="col-4">
                      <div class="contentboxmani">
                        <header>
                          <?php
                            $daste2 = ot_get_option( 'daste2' , false );
                            $dlink2 = ot_get_option( 'dlink2' , false );
                            if ( $sptitle !== false ) { ?>

                          <a href="<?php echo $dlink2; ?>"><img src="<?php echo $daste2; ?>"></a>

                    <?php } ?>
                </header>


                      </div>
                    </div>
                    <div class="col-4">
                      <div class="contentboxmani">
                        <header>
                          <?php
                            $daste3 = ot_get_option( 'daste3' , false );
                            $dlink3 = ot_get_option( 'dlink3' , false );
                            if ( $sptitle !== false ) { ?>

                          <a href="<?php echo $dlink3; ?>"><img src="<?php echo $daste3; ?>"></a>

                    <?php } ?>
                </header>


                      </div>
                    </div>
                    <div class="col-4">
                      <div class="contentboxmani">
                        <header>
                          <?php
                            $daste4 = ot_get_option( 'daste4' , false );
                            $dlink4 = ot_get_option( 'dlink4' , false );
                            if ( $sptitle !== false ) { ?>

                          <a href="<?php echo $dlink4; ?>"><img src="<?php echo $daste4; ?>"></a>

                    <?php } ?>
                </header>


                      </div>
                    </div>

                    <div class="col-4">
                      <div class="contentboxmani">
                        <header>
                          <?php
                            $daste5 = ot_get_option( 'daste5' , false );
                            $dlink5 = ot_get_option( 'dlink5' , false );
                            if ( $sptitle !== false ) { ?>

                          <a href="<?php echo $dlink5; ?>"><img src="<?php echo $daste5; ?>"></a>

                    <?php } ?>
                </header>


                      </div>
                    </div>

                    <div class="col-4">
                      <div class="contentboxmani">
                        <header>
                          <?php
                            $daste6 = ot_get_option( 'daste6' , false );
                            $dlink6 = ot_get_option( 'dlink6' , false );
                            if ( $sptitle !== false ) { ?>

                          <a href="<?php echo $dlink6; ?>"><img src="<?php echo $daste6; ?>"></a>

                    <?php } ?>
                </header>


                      </div>
                    </div>

        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'متاسفانه محتوایی پیدا نشد' ); ?></p>
        <?php endif; ?>
<?php } ?>

<?php
  $articleactive = ot_get_option( 'articleactive' , false );
  if ( $articleactive == on ) { ?>

                    <div class="col-12">
                      <div class="titleb titlearea">
                        <div class="row justify-content-between">
                          <div class="col_3"> <h3>آخرین مقالات</h3>
                          </div>
                          <?php

                            $allar = ot_get_option( 'allar' , false );
                            if ( $sptitle !== false ) { ?>

                          <a href="<?php echo $allar; ?>">مشاهده همه مقالات</a>

                    <?php } ?>

                        </div>
                      </div>
                    </div>

                    <?php  $articlecount = ot_get_option( 'articlecount' , false );
        $the_query = new WP_Query( array( 'post_type' => 'post','posts_per_page'=>$articlecount ) ); ?>
      <?php if ( $the_query->have_posts() ) : ?>
      	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>



          <div class="col-6 col-md-3">
            <div class="contentbox">
              <header class="articlebox">
                <figure>
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'articlethumb' ); ?></a>
                  <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                </figure>
              </header>
              <div class="datebox">
      <?php the_time('j F Y'); ?>
                </div>

            </div>
          </div>


      	<?php endwhile; ?>
      	<?php wp_reset_postdata(); ?>
      <?php else : ?>
      	<p><?php esc_html_e( 'متاسفانه محتوایی پیدا نشد' ); ?></p>
      <?php endif; ?>


<?php } ?>

                  </div>
                  <div class="d-none d-sm-block col-12">
                  <div class="row brandd">برخی برندها</div>
                  <div class="row">
<div class="col-3 imbrand">
  <?php
    $branda1 = ot_get_option( 'branda1' , false );
    $lbranda1 = ot_get_option( 'lbranda1' , false );
    if ( $sptitle !== false ) { ?>

  <a href="<?php echo $lbranda1; ?>"><img src="<?php echo $branda1; ?>"></a>

<?php } ?>
</div>
<div class="col-3 imbrand">
  <?php
    $branda2 = ot_get_option( 'branda2' , false );
    $lbranda2 = ot_get_option( 'lbranda2' , false );
    if ( $sptitle !== false ) { ?>

  <a href="<?php echo $lbranda2; ?>"><img src="<?php echo $branda2; ?>"></a>

<?php } ?>
</div>
<div class="col-3 imbrand">
  <?php
    $branda3 = ot_get_option( 'branda3' , false );
    $lbranda3 = ot_get_option( 'lbranda3' , false );
    if ( $sptitle !== false ) { ?>

  <a href="<?php echo $lbranda3; ?>"><img src="<?php echo $branda3; ?>"></a>

<?php } ?>
</div>
<div class="col-3 imbrand">
  <?php
    $branda4 = ot_get_option( 'branda4' , false );
    $lbranda4 = ot_get_option( 'lbranda4' , false );
    if ( $sptitle !== false ) { ?>

  <a href="<?php echo $lbranda4; ?>"><img src="<?php echo $branda4; ?>"></a>

<?php } ?>
</div>
<div class="col-3 imbrand">
  <?php
    $branda5 = ot_get_option( 'branda5' , false );
    $lbranda5 = ot_get_option( 'lbranda5' , false );
    if ( $sptitle !== false ) { ?>

  <a href="<?php echo $lbranda5; ?>"><img src="<?php echo $branda5; ?>"></a>

<?php } ?>
</div>
<div class="col-3 imbrand">
  <?php
    $branda6 = ot_get_option( 'branda6' , false );
    $lbranda6 = ot_get_option( 'lbranda6' , false );
    if ( $sptitle !== false ) { ?>

  <a href="<?php echo $lbranda6; ?>"><img src="<?php echo $branda6; ?>"></a>

<?php } ?>
</div>
<div class="col-3 imbrand">
  <?php
    $branda7 = ot_get_option( 'branda7' , false );
    $lbranda7 = ot_get_option( 'lbranda7' , false );
    if ( $sptitle !== false ) { ?>

  <a href="<?php echo $lbranda7; ?>"><img src="<?php echo $branda7; ?>"></a>

<?php } ?>
</div>
<div class="col-3 imbrand">
  <?php
    $branda8 = ot_get_option( 'branda8' , false );
    $lbranda8 = ot_get_option( 'lbranda8' , false );
    if ( $sptitle !== false ) { ?>

  <a href="<?php echo $lbranda8; ?>"><img src="<?php echo $branda8; ?>"></a>

<?php } ?>
</div>

                  </div>
</div>
</main>

                </div>

              </div>
              <?php get_footer(); ?>
