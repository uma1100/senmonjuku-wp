<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'parts/head' ); ?>
<?php $imgUri = get_theme_file_uri() . "/assets/image/"; ?>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZ55MB6" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <header class="c_header">
    <div class="c_header_inner grid">
      <div class="c_header_logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $imgUri; ?>common/logo_main.svg" alt="個人指導専門塾"></a>
      </div>
      <?php 
        wp_nav_menu(
          array( 
          'theme_location' => 'header-menu-pc',
          'container' => false,
          'menu_class' => 'c_headerPcMenuList',
          'add_li_class' => 'c_headerPcMenuList_item', 
          ) 
        ); 
      ?>
      <div class="c_headerPcMenuList_contact">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
          <img src="<?php echo $imgUri; ?>/common/header_contact_button_231017.png" alt="無料体験申し込みはこちら">
        </a>
      </div>
      <button class="c_header_button js-header-button" id="js-buttonHamburger" data-micromodal-trigger="js-header-menu" role="button" aria-expanded="false">
        <span></span>
        <span></span>
      </button>
    </div>
    <div class="c_headerMenu" id="js-header-menu" aria-hidden="true">
      <div class="l_inner c_headerMenu_inner" role="dialog" aria-modal="true">
        <div class="c_headerMenuList">
          <div class="c_headerMenuList_item">
            <p class="c_headerMenuList_title js-menu-title">教室一覧</p>
            <?php 
              wp_nav_menu(
                array( 
                'theme_location' => 'header-menu-1',
                'container' => false
                ) 
              ); 
            ?>
          </div>
          <div class="c_headerMenuList_item">
            <p class="c_headerMenuList_title js-menu-title">コース</p>
            <?php 
              wp_nav_menu(
                array( 
                'theme_location' => 'header-menu-2',
                'container' => false
                ) 
              ); 
            ?>
          </div>
          <div class="c_headerMenuList_item">
            <p class="c_headerMenuList_title js-menu-title">当塾について</p>
            <?php 
              wp_nav_menu(
                array( 
                'theme_location' => 'header-menu-3',
                'container' => false
                ) 
              ); 
            ?>
          </div>
        </div>
      </div>
    </div>
  </header>