<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
  
<!-- Mirrored from ipictureshtml.azyrusthemes.com/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 15:52:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>iPictures - SIMILAR</title>
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

  <body>

    <!-- ============================  Navigation Start =========================== -->

    <!-- ============================  Navigation End ============================ -->

    <!-- ============================  Categories Start ============================ -->

    <section class="picture-categories v2">

      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="single-image-container">
              <div class="row-fluid">
                <div class="span1">

              
                 
                </div> <!-- end span1 -->

               
              </div><!--  end row-fluid -->
            </div> <!-- end single-image-container -->
          </div> <!-- end span12 -->

        </div> <!-- end row -->
    </div> <!-- end container -->

        
    </section> <!-- end picture-categories -->



    <!-- ============================  Categories End ============================ -->

   
    <!-- ============================  Search Results Start ============================ -->
    
    <section class="search-results">
      <div class="container">
        <div class="row">
          <aside class="span3">
            
          </aside> <!-- end span3 -->
          <div class="search-result-title">
            <div class="span9">
                <div class="row-fluid">
                  <div class="span8">
                    <h4 class="title">Similar :  <span></span></h4>
                  </div> <!-- end span8 -->
                  <div class="span4">
                    <div class="portfolio-controllers-container">
                      <p class="pull-left sort-title">Sort by -</p>
                      <div class="btn-group">
                        <button class="btn btn-large">Downloads</button>
                        <button class="btn btn-large dropdown-toggle" data-toggle="dropdown">
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" id="filters">
                          <!-- dropdown menu links -->
                          <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#" data-filter="*" class="selected">Show All</a></li>
                          <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#" data-filter=".transition">Size</a></li>
                          <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#" data-filter=".metal">Price</a></li>
                          <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#" data-filter=".alkali">Date</a></li>
                        </ul>
                      </div> <!-- end btn-group -->
                    </div> <!-- end portfolio-controllers-container -->
                  </div> <!-- end span4 -->
                </div> <!-- end row-fluid -->
                    
                  <section class="top-images v2">

                      <div class="images-container v3">
                        <div class="row">
                          <div id="portfolio-container" class="isotope" style="position: relative; overflow: hidden; height: 1150px;">
                
                          <?php 
                            foreach($wallpapers as $wall){
                          ?>

                          <div class="span3 transition metal isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate(0px, 0px);">
                            <figure class="top-img">
                               <a href="<?php echo site_url()?>/index.php?c=ImageCTRL&m=loadSingleImage&Id_img=<?php echo $wall['Id_img'];?>"><img src="<?php echo base_url().'assets/LittleImg'?>/<?php echo $wall['Image']?>" alt="img"></a>

                              <figcaption class="img-meta">
                                <div class="row-fluid">
                                  <div class="span8">
                                    <a href="<?php echo site_url()?>/index.php?c=ImageCTRL&m=loadSingleImage&Id_img=<?php echo $wall['Id_img'];?>" class="img-id">#000<?php echo $wall['Id_img']?></a>
                                  </div>
                                  <div class="span4">

                                    <a href="<?php echo site_url()?>/index.php?c=ImageCTRL&m=loadSingleImage&Id_img=<?php echo $wall['Id_img'];?>" class="btn download-btn"><i class="icon-download"></i></a>
                                    
                                  </div>

                                </div>
                              </figcaption> <!-- end img-meta -->

                             
                            </figure> <!-- end top-img -->
                          </div><!--  end span3 -->
                            <?php } ?>
   
                          
                        </div> <!-- end id="portfolio-container" -->

                        </div> <!-- end row-fluid -->
                      </div> <!-- end images-container -->

                    
                  </section> <!-- end top-images -->

                   <section class="main-pagination">
                      <div class="row-fluid">
                        <div class="span9">
                            <div class="inner-pagination">
                                <div class="pagination ">
                                  <ul>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#" class="btn prev"><i class="icon-chevron-left"></i></a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">1</a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">2</a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">3</a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">4</a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">5</a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">6</a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">7</a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">8</a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">9</a></li>
                                    <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#" class="btn next"><i class="icon-chevron-right"></i></a></li>
                                  </ul>
                                </div> <!-- end pagination -->
                            </div> <!-- end inner-pagination -->
                        </div> <!-- end span9 -->
                        <div class="span3">
                          <div class="portfolio-controllers-container v2">
                            <p class="pull-left sort-title">Images per page-</p>
                            <div class="btn-group dropup">
                              <button class="btn btn-large">15</button>
                              <button class="btn btn-large dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                              </button>
                              <ul class="dropdown-menu">
                                <!-- dropdown menu links -->
                                <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">20</a></li>
                                <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">25</a></li>
                                <li><a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">35</a></li>
                              </ul>
                            </div> <!-- end btn-group -->
                          </div> <!-- end portfolio-controllers-container -->
                            
                        </div> <!-- end span3 -->
                      </div> <!-- end row -->
                  </section> <!-- end main-pagination -->

                
            </div> <!-- end span9 -->
          </div> <!-- end search-result-title -->
        </div> <!-- end row -->
      </div> <!-- end container -->
    </section> <!-- end search-results -->
  
    <!-- ============================  Search Results Ends ============================ -->
   
    <!-- ============================  Aditional Text Starts ============================ -->
    <section class="call-to-action-txt">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h5 class="center title">Can’t find what you are looking for? Why don’t you <a href="file:///C:/My%20Web%20Sites/ipicture/ipictureshtml.azyrusthemes.com/categorie.html#">let us know.</a></h5>
          </div>
        </div>
      </div>
    </section> <!-- end call-to-action-txt -->
    <!-- ============================  Aditional Text Ends ============================ -->

    <!-- ============================  FOOTER START ============================ -->

   


    <!-- ============================  FOOTER ENDS ============================ -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
       
    <script src="<?php echo base_url().'/assets/js/libraries/jquery.min.js';?>"></script>
    <script src="<?php echo base_url().'/assets/js/bootstrap.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/js/libraries/jquery.nouislider.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/js/libraries/isotope.min.js'; ?>"></script>
    <script src="<?php echo base_url().'/assets/js/main.js'; ?>"></script> 

  

<!-- Mirrored from ipictureshtml.azyrusthemes.com/search-results.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 29 Apr 2019 15:56:28 GMT -->

</body></html>