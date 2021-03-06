<?php
/*
Template Name: bio
*/
?>
      <?php get_header(); ?>

<?php
$agent = $_SERVER['HTTP_USER_AGENT'];
if (strpos($agent, 'iPhone') !== false){
   $browser = 'iphone';
}else if (strpos($agent, 'Android') !== false){
   $browser = 'Android';
}
?>

<?php if($browser == 'iphone'){ ?>
        <div id="iphone_nav" class="midashi">
	<a href="<?php bloginfo('siteurl'); ?>"><img src="http://shibuhouse.outernet.biz/wp-content/themes/shibuhouse/img/logo.png" width="95%" height="300px"></a>
	<a href="<?php site_url(); ?>/about">
	  <div id="iphone_about" class="iphone_parts">
 	      <!-- あばうとだよー -->
	          <img src="<?php bloginfo('template_url'); ?>/img/iphone/iphone_about.png">
		    </div>
		    </a>	
		    <a href="<?php site_url(); ?>/bio">
		      <div id="iphone_bio" class="iphone_parts">
		          <!-- ばいおだよ -->
			      <img src="<?php bloginfo('template_url'); ?>/img/iphone/iphone_bio.png">
			        </div>
 				</a>
				<a href="<?php site_url(); ?>/life">
				  <div id="iphone_life" class="iphone_parts">
 				      <!-- らいふだよー工事中だyとー -->
            <img src="<?php bloginfo('template_url'); ?>/img/iphone/iphone_life.png">
	      </div>
	      </a>
	      <a href="<?php site_url(); ?>/member">
	        <div id="iphone_member" class="iphone_parts">
		    <!-- メンバーだよ＾　-->
            <img src="<?php bloginfo('template_url'); ?>/img/iphone/iphone_member.png">
	      </div>
	        <div style="clear:both;">
		  </div>
		  </div>
		  </a>
<?php }else if($browser == 'Android'){ ?>
        <div id="iphone_nav" class="midashi">
	<a href="<?php site_url(); ?>/about">
	  <div id="iphone_about" class="iphone_parts">
 	      <!-- あばうとだよー -->
	          <img src="<?php bloginfo('template_url'); ?>/img/iphone/iphone_about.png">
		    </div>
		    </a>	
		    <a href="<?php site_url(); ?>/bio">
		      <div id="iphone_bio" class="iphone_parts">
		          <!-- ばいおだよ -->
			      <img src="<?php bloginfo('template_url'); ?>/img/iphone/iphone_bio.png">
			        </div>
 				</a>
				<a href="<?php site_url(); ?>/life">
				  <div id="iphone_life" class="iphone_parts">
 				      <!-- らいふだよー工事中だyとー -->
            <img src="<?php bloginfo('template_url'); ?>/img/iphone/iphone_life.png">
	      </div>
	      </a>
	      <a href="<?php site_url(); ?>/member">
	        <div id="iphone_member" class="iphone_parts">
		    <!-- メンバーだよ＾　-->
            <img src="<?php bloginfo('template_url'); ?>/img/iphone/iphone_member.png">
	      </div>
	        <div style="clear:both;">
		  </div>
		  </div>
		  </a>


<?php }else{ ?>
<?php } ?>

      <div id="biography">
        <div id="inner_bio">
          <div id="cv">
            <div id="ac_art" style=""></div>
            <img src="<?php bloginfo('template_url'); ?>/img/bio/bio_art.png">
            <div id="art" class="bio_content">
              <?php require 'wp-content/themes/shibuhouse/text/bio/art.php' ?>
            </div>

            <div id="ac_event" style=""></div>
            <img src="<?php bloginfo('template_url'); ?>/img/bio/bio_event.png">
            <div id="event" class="bio_content">
              <?php require 'wp-content/themes/shibuhouse/text/bio/event.php' ?>
            </div>

            <div id="ac_media" style=""></div>
            <img src="<?php bloginfo('template_url'); ?>/img/bio/bio_media.png">
            <div id="media" class="bio_content">
              <?php require 'wp-content/themes/shibuhouse/text/bio/media.php' ?>
            </div>
          </div>
          
          <div id="explain">
          	<div id="ex_title" style="
          	font-size: 25px; 
          	padding: 10px; 
          	background-color: #e3e3e3;
          	border-radius: 5px;        /* CSS3草案 */  
    		-webkit-border-radius: 5px;    /* Safari,Google Chrome用 */  
    		-moz-border-radius: 5px;   /* Firefox用 */ 
    		">
    		Photos & Text
          	</div>
            <!-- <img src="./img/bio/bio_fotgrafie.png"> -->
            
            <div id="inner_explain"></div>
          </div>
          <div style="clear:both;"></div>
        </div>
      </div>
    </div><!-- #wrap -->
    <?php get_footer(); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script defer src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scroll_top.js"></script>
    <script type="text/javascript"src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide"
      });
    });
    </script>
    <script type="text/javascript">
    function dynamic_ex_load(explain_text) {
      $("#ex_image").remove();
      $("#ex_text").remove();
      $.get(explain_text, function(data){
        $("#inner_explain").css({opacity: 0});
        $("#inner_explain").html(data);
        $("#inner_explain").animate({opacity: 1.0}, 500);
      });
    }
    </script>
    <script type="text/javascript">
    	$('#art > table > tbody > tr > td').click(function () {
  			$('#explain').animate({paddingTop:0}, 1000);
  			var text = $(this).text();
  			$('#ex_title').html(text);
		});
		$('#event > table > tbody > tr > td').click(function () {
  			$('#explain').animate({paddingTop:360}, 1000);
  			var text = $(this).text();
  			$('#ex_title').html(text);

		});
		$('#media > table > tbody > tr > td').click(function () {
  			$('#explain').animate({paddingTop:715}, 1000);
  			var text = $(this).text();
  			$('#ex_title').html(text);
		});
    </script>
    <script type="text/javasciprt" src="<?php bloginfo('template_url'); ?>/js/parseuri.js"></script>
  </body>
</html>
