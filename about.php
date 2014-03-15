<?php
/*
Template Name: about
*/
?>


<!DOCTYPE html>
<html>
  <head>
    <title>渋家 || SHIBUHOUSE</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="<?php bloginfo('stylesheet_url') ?>" rel='stylesheet' type='text/css'>  
    <!-- javascript -->
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modernizr.js"></script>
  </head>


  <body>
    <div id="wrap">
      <?php get_header(); ?>
        <div id="content">

        <div id="bio" class="midashi">
          <div style="padding-top:28px; padding-bottom:60px;" class="inner_midashi">
            <img style="margin-bottom:47px" src="<?php bloginfo('template_url'); ?>/img/about/about_what.png">
            <div class="midashi_text">
            「渋家（シブハウス）」は、 コミュニケーションを主体とした「場所」であり「集団」です。家を24時間365日解放しておくことで新たな関係性を生み出し、それを多くの人と共有することで「物語」を生産しています。これまで3度の引っ越しを行い、渋谷駅周辺を点々としながら借りる家を大きくし、現在進行形で変化し続けています。メンバーは年齢や職業を問わず、生活や活動も固定しません。自由なコミュニケーションからさまざまなコンテンツ生み出しています。 
            </div>          
            <img style="margin:0 auto; display: block;" src="<?php bloginfo('template_url'); ?>/img/about/about_hatena.png">
          </div><!-- .inner_midashi -->
        </div><!-- #bio -->

        <div id="what" class="midashi">
          <div style="padding-top:28px; padding-bottom:60px;" class="inner_midashi">
            <img  style="margin-bottom:47px" src="<?php bloginfo('template_url'); ?>/img/about/about_concept.png">
          <div class="midashi_text">
            現在の渋家は、渋家の内部から外部へさまざななコンテンツやプロジェクトを持ち出すことをテーマとして、コミュニティマネジメント、イベントオーガナイズ、アートインキュベーションを３つの柱として活動しています。<br><br>
具体的には、コミュニティマネジメントでは、代表の齋藤桂太が NHK「ニッポンのジレンマ」に出演するなど、新たなコミュニティのプロトタイプとして渋家が評価されたことを受け、これまであまり表に出さなかった生活コンテンツの公開やアーカイブ化を進めています。<br><br>
次に、イベントオーガナイズは、より多くの人と関わることを目的として、イベントの主催や出演を積極的に行っており、毎月22日に開催している「渋家ホームパーティ」を外に拡大させた400人参加のイベントを開催するなど規模を拡大させています。<br><br>
また、アート方面では、森美術館「六本木クロッシング展」のなかで「全国のディスカーシブ・プラットホーム」として選出されたことを受け、アーティストメンバーが中心となり、外部の人間も参加可能な対話の場の発足を準備しています。<br><br>
メンバー同士のコミュニケーションが活発に行われ、さまざまなクリエイションが行われるようになったいま、渋家は単一のコミュニティからネットワーク上の1つのポイントへと変化するべく、さまざまな現場で活躍する人たちとのコミュニケーションを目指していきます。
          </div>
          <img style="margin:0 auto; display: block;" src="<?php bloginfo('template_url'); ?>/img/about/about_cloud.png">
          </div><!-- .inner_midashi -->
        </div><!-- #what -->


        <div id="information" class="midashi">
          <div style="padding-top:28px; padding-bottom:26px;" class="inner_midashi">
            <img style="margin-bottom:47px" src="<?php bloginfo('template_url'); ?>/img/about/about_information.png">
            <div class="midashi_text">
            渋家はさまざまな設備を備えたイベントスペースでもあります。毎月22日に「渋家ホームパーティ」を開催しているほか、地下にある多目的部屋•クヌギで継続的に音楽イベントや映像上映会を行っています。訪問方法、メンバー募集、取材などのお問い合わせについては、以下までご連絡ください。 
            </div>          
            <img style="margin:0 auto 30px auto; display: block;" src="<?php bloginfo('template_url'); ?>/img/about/about_call_mail.png">
            <!---<p style="margin: 0 auto;
            display: block;
            width: 260px;
            font-size: 32px;
            #help_me,  x:-moz-any-link, x:default  { color: red; }
            font-family: monospace;">---->
            <div style="text-align:center; display:block; width:100%; font-size:34px;">080-3310-4083</div>
            <!-------<p style="margin:0 auto;
            width: 420px;
            font-size: 34px;
            font-family: monospace;
            display: block;">-->
            <div style="text-align:center; display:block; width:100%; font-size:34px;">shibuhouseinfo@gmail.com</div>
          </div><!-- .inner_midashi -->
        </div><!-- #information -->
      </div><!-- #content -->
    </div><!-- #wrap -->
    <?php get_footer(); ?>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script defer src="<?php bloginfo('template_url'); ?>/js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scroll_top.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
      $('.flexslider').flexslider({
        animation: "slide"
      });
    });
    </script>
  </body>
</html>
