<?php
add_filter( 'facetwp_facet_orderby', function( $orderby, $facet ) {
    if ( 'genus' == $facet['name'] ) {

   $orderby = 'FIELD(f.facet_display_value, "Leucospermum", "Leucadendron cones", "Leucadendron foliage", "Protea", "Bruniaceae", "Potplants")';

    }

    if ( 'season' == $facet['name'] ) {
  $orderby = 'FIELD(f.facet_display_value, "January",
"February",
"March",
"April",
"May",
"June",
"July",
"August",
"September",
"October",
"November",
"December")';
    }

    return $orderby;
}, 10, 2 );