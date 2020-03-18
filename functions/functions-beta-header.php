<?php
add_action( 'storefront_header', 'tsum_nav_contact', 6 );
function tsum_nav_contact () {
  echo '<div id="header-contact">
<a class="" href="tel:0216383121"><i class="fa fa-phone"> </i> &nbsp; 021 638 3121</a> <a class="upfa icon-mail" href="mailto:enquire@scheltema.co.za"><i class="fa fa-envelope"> </i> &nbsp; enquire@scheltema.co.za</a>
</div>';

}