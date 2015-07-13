<?php
/*
Template Name: Contact
*/
?>

<?php get_header();?>
    
	<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

	    <div class="band">
          <div id="map-canvas" class="hidemd"></div>
              <div class="map">
              
                <a href="http://maps.google.com/?q=WCI+Partners&cid=531531167775593702"><img class="hide showmd hidesm" src="<?php echo get_template_directory_uri();?>/images/contact/map-horizontal.jpg"/></a>
                <a href="http://maps.google.com/?q=WCI+Partners&cid=531531167775593702"><img class="hide showsm" src="<?php echo get_template_directory_uri();?>/images/contact/map-vertical.jpg"/></a>
              </div>
           
    	</div><!--endBand-->
        
         <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
function initialize() {
  var myLatlng = new google.maps.LatLng(40.276006, -76.8951022);
  var mapOptions = {
    zoom: 15,
    center: myLatlng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  }

  var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
  
  


  var contentString = 
  '<address>'+
    '<strong>WCI PARTNERS, LP</strong><br/>'+
    '220 Muench Street<br/>'+
    'Harrisburg, PA 17102<br/>'+
    '</address>'+
  	'<span>T: 717.234.2225<br/></span>'+
    '<span>F: 717.234.0454<br/></span>'+
    '<span><a href="">info@wcipartners.com</a></span><br/><br/>'+
	'<a href="http://maps.google.com/?q=WCI+Partners&cid=531531167775593702">Get Directions</a>';
	
	

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });
	
  var image = '<?php echo get_template_directory_uri();?>/images/mapicon.png';
  var myLatLng = new google.maps.LatLng(40.276006, -76.895102);
  var marker = new google.maps.Marker({
      position: myLatlng,
      map: map,
	  icon: image
  });
  google.maps.event.addListener(marker, 'click', function() {
    infowindow.open(map,marker);
  });
  
  
}


google.maps.event.addDomListener(window, 'load', initialize);

    </script>
        
        
        <?php endwhile; ?>
        
        
		 <?php get_footer();?>
   
   