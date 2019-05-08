<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  
<!-- Mirrored from ipictureshtml.azyrusthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 15:52:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>iPictures-<?php echo $wallpaper[0]['Titre']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Styles -->
    <link href="<?php echo base_url().'/assets/css/bootstrap.min.css'; ?>" rel="stylesheet">
    <link href="<?php echo base_url().'/assets/css/bootstrap-responsive.min.css'; ?>" rel="stylesheet">

    <!-- Font Icons -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/font-awesome.min.css'; ?>"/>

    <!-- Social Icons -->
    <link rel="stylesheet" href=" <?php echo base_url().'/assets/css/fc-webicons.css'; ?>"/>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,200italic,300italic,400italic,600italic,700italic' rel='stylesheet' type='text/css'>

    <!-- Main Styles -->
    <link rel="stylesheet" href="<?php echo base_url().'/assets/css/styles.css'; ?>"/>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="img/favicon.png">

    <!-- Modernizr Feature Detection  -->
    <script src="js/libraries/modernizr.min.js"></script>

    <script src="js/libraries/respond.min.js"></script>
    

  </head>

  <body>

    <!-- ============================  Navigation Start =========================== -->

    
    <!-- ============================  Navigation End ============================ -->

    <!-- ============================  Categories Start ============================ -->

    <section class="picture-categories">

      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="single-image-container">
              <div class="row-fluid">
                  <h4 ><?php echo $wallpaper[0]['Titre']?></h4>
              </div><!--  end row-fluid -->
            </div> <!-- end single-image-container -->
          </div> <!-- end span12 -->

        </div> <!-- end row -->

        <div class="single-image-title">
          <div class="row">
            <div class="span6">
              <h4 class="title">Abstract Background</h4>
            </div> <!-- end span6 -->
            <div class="span6">
              <a href="<?php echo site_url()?>/index.php?c=ImageCTRL&m=loadSimilar&titre=<?php echo $wallpaper[0]['Id_img']?>" class="btn pull-right">View similar images</a>
            </div> <!-- end span6 -->
          </div> <!-- end row -->
        </div> <!-- end single-image-title -->
      </div> <!-- end container -->

    </section> <!-- end picture-categories -->



    <!-- ============================  Categories End ============================ -->

    <!-- ============================  Image Decription Starts ============================ -->


    <section class="image-decription-container">
      <div class="container">
        <div class="row">
          <div class="span6">
            <figure>
              <img src="<?php echo base_url().'/assets/ImageBase/'?><?php echo $wallpaper[0]['Titre']?>.jpg" alt="img" />
            </figure>
          </div> <!-- end span6 -->
          <div class="span6">
            <div class="item-description">
              <h5 class="title">File ID - #000<?php echo $wallpaper[0]['Id_img'];?></h5>
            <table class="table table-hover">
              <thead>
                <tr>
                <th>Name</th>
                  <th>Size</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <form >
                    <?php echo $wallpaper[0]['Titre'];?>
                    </form>
                  </td>
                  <td><?php echo $resolution[0]['Height'];?> x <?php echo $resolution[0]['width'];?></td>
                </tr>
              </tbody>
            </table>
            <!-- end item-license -->
            </div> <!-- end item-description -->
          </div> <!-- end span6 -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end image-description-container -->

  <!-- ============================  Image Decription Ends ============================ -->
  
    <!-- ============================  Image actions start ============================ -->

    <section class="image-actions">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="image-inner-actions">
              <div class="row-fluid">
                <div class="span6">
                 
                </div> <!-- end span6 -->
                <div class="span3">
                  <h4 class="title">Telecharger Ici Gratuitement :</h4>
                </div> <!-- end span3 -->
                <div class="span3">
                  <ul class="unstyled inline shopping-actions pull-right">
                    <li><a href="<?php echo base_url().'/assets/ImageBase/'?><?php echo $wallpaper[0]['Titre']?>.jpg" class="btn btn-primary btn-large" download>Telecharger</a></li>
                  </ul>
                </div><!--  end span3 -->
              </div> <!-- end row-fluid -->
            </div> <!-- end image-inner-actions -->
          </div> <!-- end span12 -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end image-actions -->


      <!-- ============================  Image actions end ============================ -->






    <!-- ============================  TOP IMAGES START ============================ -->
    <section class="top-images">
      <div class="container">
        <div class="row">
          <div class="span12">
              <h4 class="title">Some similar Images</h4>
          </div> <!-- end span12 -->
          
        </div> <!-- end row -->

        <div class="images-container v3">
          <div class="row">

          <?php foreach($same as $ss){

          ?>

            <div class="span3">
              <figure class="top-img">
              <img src="<?php echo base_url().'/assets/LittleImg/'?><?php echo $ss['Image']?>" alt="img" />

                <figcaption class="img-meta">
                  <div class="row-fluid">
                    <div class="span8">
                      <a href="#" class="img-id">#000<?php echo $ss['Id_img'];?></a>
                      <a href="#" class="img-tags"><?php echo $ss['Titre']?></a>
                    </div>
                    <div class="span4">

                      <a href="#" class="btn download-btn"><i class="icon-download"></i></a>
                      
                    </div>

                  </div>
                </figcaption> <!-- end img-meta -->

                <div class="roll-over">
                  <a href="#" class="btn"><span class="bucket">&#128092;</span></a>
                  
                </div> <!-- end roll-over -->
              </figure> <!-- end top-img -->
            </div><!--  end span3 -->
          <?php } ?>
          </div> <!-- end row -->
        </div> <!-- end images-container -->

      </div> <!-- end container -->
      
    </section> <!-- end top-images -->
      


    <!-- ============================  TOP IMAGES END ============================ -->

    <!-- ============================  FOOTER START ============================ -->

    <!-- ============================  FOOTER ENDS ============================ -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script src="<?php echo base_url().'/assets/js/libraries/jquery.min.js';?>"></script>
    <script src="<?php echo base_url().'/assets/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/js/main.js'; ?>"></script>       

  </body>

<!-- Mirrored from ipictureshtml.azyrusthemes.com/image-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 15:56:09 GMT -->
</html>
