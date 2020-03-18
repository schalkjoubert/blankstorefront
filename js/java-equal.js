jQuery(document).ready(function(){
    jQuery('.grid-cpt-single').each(function(){    
      var widestBox = 0;
      jQuery('.box div .eqw', this).each(function(){
        if(jQuery(this).width() > widestBox) {
          widestBox = jQuery(this).width(); 
        }  
      });  
      jQuery('.box div .eqw',this).width(widestBox);              
    }); 
});