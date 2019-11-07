<?php get_header(); ?>

        </div>
        <div class="row">
          <div class="titlebarpub">

            <div class="col-12">

                <nav><?php the_breadcrumb(); ?> </nav>
              <h1><?php single_tag_title(); ?></h1>
            </div>




          </div>
        </div>





        <div class="row">
        <?php get_sidebar(); ?>
          <div class="col-12 col-md-8 col-lg-9 ">




                        <div class="row">

                          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


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

                        <?php endwhile; else : ?>
                        	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>

            <div class="pagenumbers">
            <?php the_posts_pagination( array( 'mid_size' => 5,  'screen_reader_text' => __( '&nbsp;' )
             ) ); ?>
            </div>


                        </div>

          </div>

        </div>



      <?php get_footer(); ?>
