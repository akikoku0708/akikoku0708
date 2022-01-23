<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8'></meta>
      <title>jQuery Carousel</title>

      <script src='https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.js' type='text/javascript'></script>

<script src="{{ asset('/js/jquery-1.11.2.js') }}"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('/xxxcss/jquery.carousel.css') }}">
      <script src="{{ asset('/xxxjs/jquery.carousel.js') }}"></script>
      <link rel="stylesheet" type="text/css" href="{{ asset('/xxxcss/sample.css') }}">
      <script src="{{ asset('/xxxjs/sample.js') }}"></script>


      <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick-theme.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('/css/slick.css') }}">
      <script src="{{ asset('/js/slick.js') }}"></script>
<script src="{{ asset('/js/xxxslick.min.js') }}"></script>
      <script>

          </script>
          <style type="text/css">
            .slider {    width: 96%;   margin: 100px auto;      }
            .slick-slide {     margin: 0px 1px;           }
            .slick-slide img {        width: 100%;        }
            .slick-prev:before, .slick-next:before {    color: black;  }
          </style>

  </head>
  <body>

      <?php
      $fnamed1=array();
      $dpath="../storage/app/public/home_top";
      $dir = $dpath ;
      if( is_dir( $dir ) && $handle = opendir( $dir ) ) {
          while( ($file2 = readdir($handle)) !== false ) {
            if( filetype( $path = $dir .'/'. $file2 ) == "file" ) {
            $fnamed1[]=$file2;
          }
          }
      }

      ?>

  
        <section class="regular slider">
        <?php
        foreach($fnamed1 as $rkk){
          echo '<div>  <img src="../storage/home_top/'.$rkk.'" style="vertical-align:top;width:100%;height:300px"></div></div>';  }
        ?>
        </section>

       <section class="lazy slider" data-sizes="50vw">
        <?php
        foreach($fnamed1 as $rkk2){
      	   echo '<div>   <img src="../storage/home_top/'.$rkk2.'" style="vertical-align:top;width:100%;height:300px"></div> </div>';
      	  }
        ?>
        </section>
        <script type="text/javascript">

  $(document).on('ready', function() {
  $(".regular").slick({ dots: true, infinite: true, slidesToShow: 3, slidesToScroll: 3   });
  $(".lazy").slick({ lazyLoad: 'ondemand',   infinite: true  });          });
      </script>
  </body>
</html>
