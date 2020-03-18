<?php
// =================================
// ===  FOOTER CREDITS ===
// =================================
add_action( 'init', 'custom_remove_footer_credit', 10 );
function custom_remove_footer_credit () {
    remove_action( 'storefront_footer', 'storefront_credit', 20 );
    add_action( 'storefront_footer', 'custom_storefront_credit', 20 );
} 
function custom_storefront_credit() {    
 if( get_field('contact_facebook', 'options') ): ?>
        <?php
          $site = get_field('contact_facebook', 'options'); 
          $site = str_replace(array(
            'http://',
            'https://',
            'http://www.',
            'https://www.',
            'www.',
            'https://www.facebook.com/',
            'http://www.facebook.com/',
            'www.facebook.com/',
            'facebook.com/',
          ), '', $site);
          $site = rtrim($site, '/');
         ?>
          
            <a target="_blank" href="<?php echo 'https://www.facebook.com/' . $site ?>"><i class="fab fa-facebook-f"> </i></a>
        
          <?php endif; ?>

      <?php if( get_field('contact_twitter', 'options') ): ?>
        <?php
          $site = get_field('contact_twitter', 'options'); 
          $site = str_replace(array(
            'http://',
            'https://',
            'http://www.',
            'https://www.',
            'www.',
            'https://www.twitter.com/',
            'http://www.twitter.com/',
            'www.twitter.com/',
            'twitter.com/',
          ), '', $site);
          $site = rtrim($site, '/');
        ?>
          
            <a target="_blank" href="<?php echo 'https://www.twitter.com/' . $site ?>"><i class="fab fa-twitter"> </i></a>
        
          <?php endif; ?> 

      <?php if( get_field('contact_instagram', 'options') ): ?>
        <?php
          $site = get_field('contact_instagram', 'options'); 
          $site = str_replace(array(
            'http://',
            'https://',
            'http://www.',
            'https://www.',
            'www.',
            'https://www.instagram.com/',
            'http://www.instagram.com/',
            'www.instagram.com/',
            'instagram.com/',
          ), '', $site);
          $site = rtrim($site, '/');
        ?>
          
         <a target="_blank" href="<?php echo 'https://www.instagram.com/' . $site ?>"><i class="fab fa-instagram"> </i></a>
        
          <?php endif; ?> 

  <div class="grid-credit">
    <div class="box lh">  
      &copy; <?php echo date("Y"); ?> Scheltema &#0174. All Rights Reserved.
    </div>

    <div class="box rh">
      <a href="https://www.thissideupmedia.com/" target="_blank">Developed by This Side Up Media</a>
    </div>
  </div>

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-18199742-74"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-18199742-74');
</script> -->



  <!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src=""></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-18199742-73');
</script> -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- SCHELTEMA 2020 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-18199742-25"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-18199742-25');
</script>

    <?php
}



