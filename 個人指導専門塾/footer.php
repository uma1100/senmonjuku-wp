<?php wp_footer(); ?>
<?php 
  $imgUri = get_theme_file_uri() . "/assets/image/"; 
?>
<div class="smFixedButton">
	<p class="smFixedButton_text">お問い合わせ・無料体験申し込みはこちら</p>
  <div class="smFixedButtonList grid">
    <div class="smFixedButtonList_item _form">
      <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
        <img src="<?php echo $imgUri; ?>/common/smFixedButton_icon_form.svg" alt="">
        フォームで問い合わせ
      </a>
    </div>
    <div class="smFixedButtonList_item _tel">
      <a href="tel:0120-187-703">
        <img src="<?php echo $imgUri; ?>/common/smFixedButton_icon_tel.svg" alt="">
        電話で問い合わせ
      </a>
    </div>
    <div class="smFixedButtonList_item _line">
      <a href="https://liff-gateway.lineml.jp/landing?follow=%40842hcmyw&lp=z7R4dL&liff_id=1657697828-p30m3dra">
        <img src="<?php echo $imgUri; ?>/common/smFixedButton_icon_line.svg" alt="LINE公式アカウント">
      </a>
    </div>
  </div>
</div>
<div class="lgFixedContact_button">
  <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
    <img src="<?php echo $imgUri; ?>/common/xl_contact_fixed_button.png" alt="お問い合わせ">
  </a>
</div>
<footer class="c_footer">
  <div class="l_inner c_footer_inner">
    <div class="c_footer_logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo $imgUri; ?>common/logo_big.svg"></a>
    </div>
    <div class="c_footerMenu">
      <?php 
        wp_nav_menu(
          array( 
          'theme_location' => 'footer-menu' 
          ) 
        ); 
      ?>
    </div>
    <ul class="c_contactList flex">
      <li class="c_contactList_item _line">
        <a href="https://liff-gateway.lineml.jp/landing?follow=%40842hcmyw&lp=z7R4dL&liff_id=1657697828-p30m3dra">
          <picture>
            <source srcset="<?php echo $imgUri; ?>common/contact_banner_line.webp" type="image/webp">
            <img src="<?php echo $imgUri; ?>common/contact_banner_line.png">
          </picture>
        </a>
      </li>
      <li class="c_contactList_item _form">
        <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>">
          <div class="c_contactList_icon">
            <img src="<?php echo $imgUri; ?>common/contact_icon_mail_pink.svg" alt="メールのアイコン">
          </div>
          <p class="c_contactList_text _pink">フォームでのお問い合わせはこちら</p>
        </a>
      </li>
      <li class="c_contactList_item _tel">
        <a href="tel:0120-187-703">
          <div class="c_contactList_icon">
            <img src="<?php echo $imgUri; ?>common/contact_icon_phone_pink.svg" alt="電話のアイコン">
            <p class="_pink">0120-187-703</p>
          </div>
          <p class="c_contactList_text _pink">お電話でのお問い合わせはこちらをタップ！</p>
        </a>
      </li>
    </ul>
  </div>
  <p class="c_footer_copyright">©︎ 2022 個人指導専門塾</p>
</footer>