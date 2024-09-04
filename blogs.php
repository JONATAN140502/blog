<?php include("db.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="author" content="Jonatan Arturo Mayanga Muñoz" />
        <meta name="description" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt atque mollitia unde tempore minima optio magnam maxime sed pariatur reprehenderit, veniam quam, labore molestias explicabo dolore, quas nemo, reiciendis amet.">
        <meta name="Keywords" content="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt atque mollitia unde tempore minima optio magnam maxime sed pariatur reprehenderit, veniam quam, labore molestias explicabo dolore, quas nemo, reiciendis amet.">
        <link rel="shortcut icon" href="imagenes/WIN_20200327_08_50_28_Pro.jpg" type="image/x-icon" />
        <title>Portafolio</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
        <!-- Animation -->
        <link rel="stylesheet" href="assets/css/animate.min.css" type="text/css">
        <!-- Owl Carousel -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css">
        <!-- Light Case -->
        <link rel="stylesheet" href="assets/css/lightcase.min.css" type="text/css">
        <!-- Template style -->
                    <link rel="stylesheet" href="assets/css/style_1.css" type="text/css">
                        <link rel="stylesheet" href="assets/css/colors/blue.css" type="text/css">                                                            </head>
    <body>
        <!-- preloader -->
        <div id="preloader">
            <div id="preloader-circle">
                <span></span>
                <span></span>
            </div>
        </div>
        
        <div class="wrapper-page">
            <!-- Header -->
            <header class="header">
                <div class="header-content">
                    <div class="profile-picture-block">
                        <?php
          $query = "SELECT * FROM about WHERE `key` = 'avatar'";
  $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);
 
 $query1 = "SELECT * FROM about WHERE `key` = 'name'";
  $result1 = mysqli_query($conn, $query1);

    $ro1w = mysqli_fetch_array($result1);
 ?>
                        <div class="my-photo">
                            <img src="cdn/about/<?php echo $row['value'] ?>" class="img-fluid" alt="<?php echo $ro1w['value'] ?>">
                      
                        </div>
                    </div>
                    <!-- Header Head -->
                    <div class="site-title-block">
                        <div class="site-title"><?php echo $ro1w['value'] ?></div>
                        <div class="type-wrap">
                            <div class="cd-headline clip">
                                    <span class="blc"></span>
                                    <span class="cd-words-wrapper">
                                        <?php
                                      
                                        $query2 = "SELECT * FROM about WHERE `key`='dedi'";
                                        $result2 = mysqli_query($conn, $query2);
                                        $row2 = mysqli_fetch_array($result2);
                                        $f= $row2['value'];
                                        ?>
                                        <?php foreach (explode("\n", $f) as $i): ?>
                                            <b><?php echo $i ?></b><br>
                                        <?php endforeach; ?>
                                    </span>
                                </div>
                        </div>
                    </div>
                    <!-- /Header Head -->

                    <!-- Navigation -->
                     <div class="site-nav">
                        <!-- Main menu -->
                        <ul class="header-main-menu" id="header-main-menu">
                            <li><a class="active" href="index.php#home"><i class="fas fa-home"></i> Inicio</a></li>
                            <li><a href="index.php#about-me"><i class="fas fa-user-tie"></i> Acerca de mí</a></li>
                            
                            <li><a href="index.php#portfolio"><i class="fas fa-business-time"></i> Portafolio</a></li>
                            <li><a href="index.php#blog"><i class="fas fa-book-reader"></i> Blog</a></li>
                            <li><a href="index.php#contact"><i class="fas fa-paper-plane"></i> Contáctame</a></li>
                        </ul> 
                        <!-- /Main menu -->
                    </div>
                    <!-- /Navigation -->
                </div>
            </header>
            <!-- /Header -->

            <!-- Mobile Header -->
            <div class="responsive-header">
                <div class="responsive-header-name">
                    <img class="responsive-logo" src="cdn/about/<?php echo $row['value'] ?>" alt="<?php echo $ro1w['value'] ?>" />
                   <?php echo $ro1w['value'] ?>          </div> 
                <span class="responsive-icon"><i class="lnr lnr-menu"></i></span>
            </div>
            <!-- /Mobile Header -->
            <div class="content-pages">
    <!-- Subpages -->
    <div class="sub-home-pages">
        <!-- Titlebar -->
        <div id="titlebar">
            <div class="container">
                <div class="special-block-bg">
                    <h2>Blog</h2>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <?php     if  (isset($_GET['idblog'])) {
  $idblog1 =$_GET['idblog'];
  $queryp = "select blog_id, DATE_FORMAT(datetime,'%d/%m/%Y')  as fecha,image,title,description,author,blog_category_id,short_description,visits from blog where  blog_id='$idblog1'";
  $resultp = mysqli_query($conn, $queryp);
  $rowp = mysqli_fetch_array($resultp);
  $categoria=$rowp['blog_category_id'];
  
  $queryp1 = "select * from blog_categories where blog_category_id='$categoria'";
  $resultp1 = mysqli_query($conn, $queryp1);
  $rowp1 = mysqli_fetch_array($resultp1);
  $id1=$rowp['blog_id'];
  $vistas=$rowp['visits'];
  $vistas1=$vistas+1;
   $query = "UPDATE blog set visits='$vistas1'  WHERE blog_id ='$id1'";
  $result = mysqli_query($conn, $query);
} ?>
                        <ul>
                            <li><a href="index.php"><i class="pe-7s-home"></i> Inicio</a></li>
                            <li><a href="index.php#blog">Blog</a></li>
                            <li><a href="blogcategoria.php?idcategoriablog=<?php echo $rowp['blog_category_id']  ?>"><?php echo $rowp1['title']  ?></a></li>
                            <li><?php echo $rowp['title'] ?></li>
                           
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /Titlebar -->

        <!-- Content -->
        <div class="container">
            <!-- Blog Posts -->
            <div class="blog-page">
                <div class="row">
                    <!-- Post Content -->
                    <div class="col-lg-8 col-md-8">
                        <!-- Blog Post -->
                        <div class="blog-post single-post">
                            <!-- Img -->
                            <img class="post-img img-fluid" src="cdn/blog/<?php echo $rowp['image'] ?>" alt="<?php echo $rowp['title'] ?>">
                            <!-- Content -->
                            <div class="post-content">
                                <h3><?php echo $rowp['title'] ?></h3>
                                <ul class="post-meta">
                                    <li><a href="#"><i class="lnr lnr-user"></i> <?php echo $rowp['author'] ?></a></li>
                                    <li><i class="lnr lnr-history"></i> <?php echo $rowp['fecha'] ?></li>
                                    <li><a href="#"><i class="lnr lnr-book"></i> <?php echo $rowp1['title']  ?></a></li>
                                    <li><a href="#"><i class="lnr lnr-eye"></i><?php echo $rowp['visits'] ?></a></li>
                                </ul>
                                <div class="post-description">
                                <?php echo $rowp['description'] ?>
                                </div>
                                <!-- Share Buttons -->
                                <ul class="share-buttons pt-30">
                                    <li><a class="fb-share" href="http://www.facebook.com/share.php?" target="_blank"><i class="fab fa-facebook-f"></i> Share</a></li>
                                    <li><a class="twitter-share" href="http://twitter.com/intent/tweet" target="_blank"><i class="fab fa-twitter"></i> Tweet</a></li>
                                    <li><a class="gplus-share" href="https://plus.google.com/share" target="_blank"><i class="fab fa-google-plus-g"></i> Share</a></li>
                                    <li><a class="pinterest-share" href="https://pinterest.com/pin/create/bookmarklet/?" target="_blank"><i class="fab fa-pinterest-p"></i> Pin</a></li>
                                </ul>
                                                                    <div id="add-review" class="add-review-box">
                                        <!-- Add Review -->
                                        <h3 class="listing-desc-headline margin-bottom-35">Agregar comentario</h3>
                                        <div id="disqus_thread"></div>
                                        <script>
                                            (function () {
                                                var d = document, s = d.createElement('script');
                                                s.src = 'https://disqus.com/embed.js';
                                                s.setAttribute('data-timestamp', +new Date());
                                                (d.head || d.body).appendChild(s);
                                            })();
                                        </script>
                                    </div>
                                                            </div>
                        </div>

                        <!-- Blog Post / End -->

                        <div class="margin-top-50"></div>
                    </div>
                    <!-- Content / End -->
                    <!-- Widgets -->
                    <div class="col-lg-4 col-md-4">
                        <div class="sidebar right">
                            <!-- Widget -->
                                                            <div class="widget search-widget">
                                    <h4>Buscar en el blog</h4>
                                    <div class="search-blog-input">
                                        <form action="http://localhost/potaf/blog">
                                            <div class="input">
                                                <input class="search-field" type="search"name="q" value="" placeholder="Buscar publicaciones .." />
                                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                                          <!-- Widget -->
                            <div class="widget">
                                <h4 class="widget-title">Publicaciones populares</h4>
                                <ul class="widget-tabs">
                                    <li>


                                        <?php
                                        $querybp = "select DATE_FORMAT(datetime,'%d/%m/%Y')as fecha,image,title,blog_id from blog  ORDER by visits desc LIMIT 1";
                                        $resultbp = mysqli_query($conn, $querybp);
                                        $rowcabp = mysqli_fetch_array($resultbp);
                                      
                                        ?>                              
                                        <div class="widget-content">
                                            <div class="widget-thumb">
                                                <a href="blogs.php?idblog=<?php  echo $rowcabp['blog_id'] ?>"><img src="cdn/blog/<?php  echo $rowcabp['image']?>" alt="<?php  echo $rowcabp['title'] ?>"></a>
                                            </div>
                                            <div class="widget-text">
                                                <h5>
                                                    <a href="blogs.php?idblog=<?php  echo $rowcabp['blog_id'] ?>">
                                                        <?php  echo $rowcabp['title'] ?>
                                                    </a>
                                                </h5>
                                                <span><?php  echo $rowcabp['fecha'] ?></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <!-- Widget / End-->

                            <!-- Widget -->
                            <div class="widget categories">
                                <h4 class="widget-title">Todas las categorías</h4>
                                <ul class="categories-list">

                                    <li>
                                        <?php
                                        $sql11 = "SELECT * FROM blog_categories";
                                        $result11 = mysqli_query($conn, $sql11);

                                        while ($row11 = mysqli_fetch_assoc($result11)) {
                                            ?>
                                            <a href="blogcategoria.php?idcategoriablog=<?php echo $row11['blog_category_id'] ?>">
                                                <i class="lni-dinner"></i>
                                                <?php echo $row11['title'] ?> <span class="category-counter"> 
                                                <?php
                                                    $categoryid = $row11['blog_category_id'];
                                                    $querycat = "SELECT count(*) FROM blog where `blog_category_id` ='$categoryid'";
                                                    $resultcat = mysqli_query($conn, $querycat);
                                                    $rowcat = mysqli_fetch_array($resultcat);
                                                    $fcat = $rowcat['count(*)'];
                                                    echo $fcat;
                                                    ?>


                                                </span>
                                            </a>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </div>
                            <!-- Widget / End-->
                            <!-- Widget -->
                            <div class="widget">
                                <h4 class="widget-title">Últimas publicaciones</h4>
                                <ul class="widget-tabs">
                                     <li>
                                        <?php
                                        $querybp1 = "select DATE_FORMAT(datetime,'%d/%m/%Y')as fecha,image,title,blog_id from blog  ORDER by blog.datetime desc  limit 1";
                                        $resultbp1 = mysqli_query($conn, $querybp1);
                                        $rowcabp1 = mysqli_fetch_array($resultbp1);
                                      
                                        ?>  
                                        <div class="widget-content">
                                            <div class="widget-thumb">
                                                <a href="blogs.php?idblog=<?php  echo $rowcabp1['blog_id'] ?>"><img src="cdn/blog/<?php  echo $rowcabp1['image'] ?>" alt="<?php  echo $rowcabp1['title'] ?>"></a>
                                            </div>
                                            <div class="widget-text">
                                                <h5>
                                                    <a href="blogs.php?idblog=<?php  echo $rowcabp1['blog_id'] ?>">
                                                       <?php  echo $rowcabp1['title'] ?>
                                                    </a>
                                                </h5>
                                                <span><?php  echo $rowcabp1['fecha'] ?></span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                                                                                        <!-- Widget / End-->
                            <!-- Widget -->
                                                        <!-- Widget / End-->
                        </div>
                    </div>
                </div>
                <!-- Sidebar / End -->
            </div>
        </div>
    </div>
</div>
        </div>

        <!--JS Files-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!--Owl Coursel-->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Typing Text -->
        <script src="assets/js/typed.min.js"></script> 
        <!--Images LightCase-->
        <script src="assets/js/lightcase.min.js"></script>
        <!-- Portfolio filter -->
        <script src="assets/js/jquery.isotope.min.js"></script>
        <!-- Wow Animation -->
        <script src="assets/js/wow.min_1.js"></script>  
        <!-- Map -->
        <!-- Main Script -->
                    <script src="assets/js/script.js"></script>
                <script src="https://maps.google.com/maps/api/js?key=AIzaSyBkdsK7PWcojsO-o_q2tmFOLBfPGL8k8Vg&amp;language=en"></script>
        <script>
            if ($('#google-map').length > 0) {
             
                //set your google maps parameters
                var latitude = -6.400829714317206,
                        longitude = -79.52638652939144,
                        map_zoom = 14;

                //google map custom marker icon 
                var marker_url = 'imagenes/images/map-marker.png';

                //we define here the style of the map
                var style = [{"featureType": "landscape", "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]}, {"featureType": "poi", "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]}, {"featureType": "road.highway", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "road.arterial", "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]}, {"featureType": "road.local", "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]}, {"featureType": "transit", "stylers": [{"saturation": -100}, {"visibility": "simplified"}]}, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {"featureType": "water", "elementType": "labels", "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]}, {"featureType": "water", "elementType": "geometry", "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]}];

                //set google map options
                var map_options = {
                    center: new google.maps.LatLng(latitude, longitude),
                    zoom: map_zoom,
                    panControl: true,
                    zoomControl: true,
                    mapTypeControl: true,
                    streetViewControl: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false,
                    styles: style,
                }
                //inizialize the map
                var map = new google.maps.Map(document.getElementById('google-map'), map_options);
                //add a custom marker to the map				
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(latitude, longitude),
                    map: map,
                    visible: true,
                    icon: marker_url,
                });
            }
        </script>
    </body>
</html>