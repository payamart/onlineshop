<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php bloginfo('name'); ?></title>
  <!-- Bootstrap CSS -->

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div class="container">
    <div class="row justify-content-between">
      <div class="col-12 col-sm-6 col-md-4">
        <div class="toparea">
          <?php
            $phonenumber = ot_get_option( 'phone' , false );
            if ( $phonenumber !== false ) {
              echo "شماره تلفن: $phonenumber";
            }
           ?>

        </div>
      </div>
      <div class="col-3 d-none d-sm-block">
        <div class="toparea">


          <?php
            $instagram = ot_get_option( 'instagram' , false );
            if ( $instagram !== false ) { ?>
          <div class="socialtop instatop">
            <a href="<?php echo $instagram; ?>" target="_blank">
    <i class="fab fa-instagram" aria-hidden="true"></i>
  </a>
          </div>
  <?php } ?>

  <?php
    $telegram = ot_get_option( 'telegram' , false );
    if ( $telegram !== false ) { ?>
          <div class="socialtop telegramtop">
            <a href="<?php echo $telegram; ?>" target="_blank"><i class="fab fa-telegram-plane" aria-hidden="true"></i></a>
          </div>
  <?php } ?>



        </div>

      </div>
    </div>

    <div class="maincontent">
      <div class="col-12">
        <header>
        <div class="row justify-content-between bgreen">
          <div class="col-12 col-md-6 col-lg-5 col-xl-4">
            <div class="logoarea">

              <?php
                $logo = ot_get_option( 'logo' , false );
                if ( $logo !== false ) { ?>
              <img src="<?php echo $logo; ?>">
                <?php } ?>

              <h1><?php bloginfo('name'); ?></h1>
              <h3><?php bloginfo('description'); ?></h3>
            </div>
          </div>
          <div class="col-6 d-none d-sm-none d-md-block col-lg-5 col-xl-5">
            <div class="searcharea">
              <?php wp_nav_menu( array( 'theme_location' => 'topsearch-menu' ) ); ?>

              <?php
                $searchactive = ot_get_option( 'searchactive' , false );
                if ( $searchactive == on ) { ?>
            <?php get_search_form(); ?>
  <?php } ?>
            </div>
          </div>
        </div>
</header>
        <div class="row">
          <div class="mainmenuarea">
            <a id="sidemobilev" class="sidemenuv d-block d-md-none" href="#sidr"><i class="fa fa-bars" aria-hidden="true"></i>
</a>

            <div id="sidr" class="sidemenumobile">
              <!-- Your content -->
          <?php wp_nav_menu (array ('theme_location' => 'mobile-menu')); ?>
            </div>
            <div class="col-12 d-none d-md-block">

              <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>

              <?php
                $sptitle = ot_get_option( 'sptitle' , false );
                $spurl = ot_get_option( 'spurl' , false );
                if ( $sptitle !== false ) { ?>
            <ul class="speciallink d-none d-md-block">
              <li><a href="<?php echo $spurl; ?>"><?php echo $sptitle; ?></a></li>
            </ul>
<?php } ?>
          </nav>
            </div>
          </div>

        </div>
