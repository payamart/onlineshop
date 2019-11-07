<?php get_header(); ?>

        <div class="row">
          <div class="titlebarpub">

            <div class="col-12">

              <nav><?php the_breadcrumb(); ?> </nav>
              <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <h1><?php the_title(); ?></h1>
            </div>




          </div>
        </div>





        <div class="row">
      <?php get_sidebar(); ?>
          <div class="col-12 col-lg-9 ">





              <div class="row">
                <div class="col-12">

                  <div class="singlecntentt">
                    <article class="">

                    </article>
<?php the_content(); ?>

                    </article>
                    <div class="authorboxs">
                      <?php echo get_avatar( get_the_author_meta('user_email'), '80', '' ); ?>
                      <strong>من <?php the_author_link(); ?>  نویسنده این مقاله هستم.</strong>
                      <p>  <?php the_author_meta('description'); ?></p>
                    </div>
                    <div class="metainfos d-none d-md-block"><i class="fa fa-calendar" aria-hidden="true"></i>تاریخ انتشار: <?php the_time('j F Y'); ?></div>

                    <div class="metainfos d-none d-md-block"><i class="fa fa-eye" aria-hidden="true"></i> <?php if(function_exists('the_views')) { the_views(); } ?></div>

                    <div class="metainfos d-none d-md-block"><i class="fa fa-bars" aria-hidden="true"></i> دسته بندی:
  <?php the_category(' , ') ?>
                    </div>
                  </article>

                  </div>

                  <div class="metainfos d-none d-md-block"><i class="fa fa-tags" aria-hidden="true"></i> برچسب ها:

                  <?php the_tags(' , ') ?>

                  </div>


                </div>
              <?php endwhile; else : ?>
  <p><?php esc_html_e( 'متاسفانه محتوایی برای نمایش وجود ندارد. لطفا به صفحه اصلی بروید یا از کادر جستجو در بالای سایت استفاده نمایید' ); ?></p>
  <?php endif; ?>
                <div class="col-12 d-none d-md-block ">
                  <div class="titlearea">
                    <h3>مطالب مرتبط</h3>
                  </div>
                </div>


                <?php
                        $orig_post = $post;
                        global $post;
                        $tags = wp_get_post_tags($post->ID);

                        if ($tags) {
                            $tag_ids = array();
                        foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                            $args=array(
                                'tag__in' => $tag_ids,
                                'post__not_in' => array($post->ID),
                                'posts_per_page'=>3, // Number of related posts to display.
                                'caller_get_posts'=>1
                            );

                        $my_query = new wp_query( $args );

                        while( $my_query->have_posts() ) {
                            $my_query->the_post();
                        ?>



                        <div class="col-6 col-md-4">
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


              <?php }
                 }
                 $post = $orig_post;
                 wp_reset_query();
                 ?>



                <div class="col-12">
                  <div class="titlearea">
                    <h3>دیدگاه ها</h3>
                  </div>
                </div>
                <div class="col-12">
                  <div class="commenterea singlecontain">
<?php comments_template(); ?>


                  </div>



                </div>
              </div>



            <div class="row">











            </div>

          </div>

        </div>



      <?php get_footer(); ?>
