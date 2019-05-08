<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  
<!-- Mirrored from ipictureshtml.azyrusthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 15:52:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>iPictures Accueil</title>
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

    


    <!-- ============================  Main Picture Start ============================ -->

    <section class="main-pictures-cotainer">

      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="content-text">
              <h1 class="title">Download Thousands of pictures for Free</h1>
              <h4 class="subtitle">Stock p<span class='style-border'>hotos, illustrations, video and music -handpicked by creatives all over th</span>e world.</h4>
            </div><!--  end content-text -->
          </div> <!-- end span12 -->
        </div> <!-- end row -->
        <div class="row">
          <div class="span6 offset3">
            <div class="search-form">

              <form action="<?php echo site_url()?>/index.php?c=IndexCTRL&m=search" method="post" >
                <div class="input-append">
                  <input class="span5 seachPlaceholder" id="appendedInputButton" type="text" placeholder="Enter Keywords " name="search">
                  <button class="btn" type="submit"><i class="icon-search icon-2x"></i></button>
                </div>
              </form>
              
            </div> <!-- end search-form -->
          </div> <!-- end span6 -->
        </div> <!-- end row -->
        
      </div><!--  end container -->
      

    </section> <!-- end main-pictures-container -->


    <!-- ============================  Main Picture Ends ============================ -->

    <!-- ============================  Categories Start ============================ -->

    <section class="picture-categories">

      <div class="container">
        <div class="row">
          <div class="span1">

            <h4 class="title">Categories</h4>
            
          </div> <!-- end span1 -->

         
        </div> <!-- end row -->
      </div> <!-- end container -->

      <section class="categories-back">

        <div class="container">

          <div class="tab-content">

                <div class="tab-pane active" id="tab1">
                  <div class="row">
                    <div class="span3">
                      <ul class="unstyled cat-list">
                        <?php 
                          foreach($categorie as $categ) { ?>
                        <li><a href="<?php echo site_url()?>/index.php?c=CategorieCTRL&m=loadCategorie&Id_Categorie=<?php echo $categ['Id_Categorie']; ?>"><?php echo $categ['Categorie']; ?></a></li>
                          <?php }?>
                      </ul>
                    </div>
                    
                  </div> <!-- end row -->
                </div> <!-- end tab-pane -->
          </div> <!-- end tab-content -->
          
        </div> <!-- end container -->  
        
      </section> <!-- end categories-back -->
      
    </section> <!-- end picture-categories -->



    <!-- ============================  Categories End ============================ -->



    <!-- ============================  TOP IMAGES START ============================ -->
    <section class="top-images">
      <div class="container">
        <div class="row">
          <div class="span6">
              <h4 class="title">Top Free images this week</h4>
          </div> <!-- end span6 -->
          <div class="span6">
            <a href="#" class="pull-right random"><i class="icon-random icon-large"></i></a>
          </div> <!-- end span6 -->
        </div> <!-- end row -->

        <div class="images-container">
          <div class="row">

            <?php 
              foreach( $hotWallpaper as $hot){ ?>
            <div class="span3">
              <figure class="top-img">
              <a href="<?php echo site_url()?>/index.php?c=ImageCTRL&m=loadSingleImage&Id_img=<?php echo $hot['Id_img'];?>"> <img src="<?php echo base_url().'assets/LittleImg'?>/<?php echo $hot['Image']?>" alt="img"> </a>

                <figcaption class="img-meta">
                  <div class="row-fluid">
                    <div class="span8">
                      <a href="<?php echo site_url()?>/index.php?c=ImageCTRL&m=loadSingleImage&Id_img=<?php echo $hot['Id_img'];?>" class="img-id">#000<?php echo $hot['Id_img']?></a>
                      <br> </br>
                    </div>
                    <div class="span4">

                    <a href="<?php echo site_url()?>/index.php?c=ImageCTRL&m=loadSingleImage&Id_img=<?php echo $hot['Id_img'];?>" class="btn download-btn"><i class="icon-download"></i></a>
                      
                    </div>

                  </div>
                </figcaption> <!-- end img-meta -->

                
              </figure> <!-- end top-img -->
            </div><!--  end span3 -->
            
              <?php } ?>
          </div> <!-- end row -->
        </div> <!-- end images-container -->      
      </div> <!-- end container -->
      
    </section> <!-- end top-images -->
      


    <!-- ============================  TOP IMAGES END ============================ -->

    <!-- ============================  RECENT BLOG START ============================ -->
   

    <!-- ============================  RECENT BLOG END ============================ -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    
    <script src="<?php echo base_url().'/assets/js/libraries/jquery.min.js';?>"></script>
    <script src="<?php echo base_url().'/assets/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/js/libraries/placeholders.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/js/main.js'; ?>"></script>          

  </body>

<!-- Mirrored from ipictureshtml.azyrusthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 15:52:50 GMT -->
</html>
