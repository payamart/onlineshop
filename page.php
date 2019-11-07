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


                  </article>






                  </div>


                </div>
              <?php endwhile; else : ?>
  <p><?php esc_html_e( 'متاسفانه محتوایی برای نمایش وجود ندارد. لطفا به صفحه اصلی بروید یا از کادر جستجو در بالای سایت استفاده نمایید' ); ?></p>
  <?php endif; ?>






              </div>





          </div>

        </div>



      <?php get_footer(); ?>
