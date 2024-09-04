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
                   <?php echo $ro1w['value'] ?>            </div> 
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
                    <h2>Portafolio</h2>
<?php     if  (isset($_GET['idproject'])) {
  $idproject =$_GET['idproject'];
  $queryp = "SELECT * FROM projects WHERE project_id=$idproject";
  $resultp = mysqli_query($conn, $queryp);
  $rowp = mysqli_fetch_array($resultp);
} ?>
                    <!-- Breadcrumbs -->
                    <nav id="breadcrumbs">
                        <ul>
                            <li><a href="index.php"><i class="pe-7s-home"></i> Inicio</a></li>
                            <li><a href="#">Portafolio</a></li>
                            <li><?php  echo $rowp['title'] ?></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- /Titlebar -->

        <!-- Content -->
        <div class="container">
            <header class="portfolio-head">
                <img src="cdn/projects/<?php echo $rowp['image'] ?>" alt="<?php echo $rowp['title'] ?>">
                <div class="portfolio-head-content">
                     <?php $namecategory = $rowp['project_category_id'] ?>
                                                    <?php
                                                    $querycat1 = "SELECT * FROM projects_categories where `project_category_id` ='$namecategory'";
                                                    $resultcat1 = mysqli_query($conn, $querycat1);
                                                    $rowcat1 = mysqli_fetch_array($resultcat1);
                                                    $fcat1 = $rowcat1['title'];
                                                    ?>
                    <p class="meta"><?php echo $fcat1 ?></p>
                    <h1><?php echo $rowp['title'] ?></h1>
                    <div class="portfolio-desc hidden-xs">
                        <p><b>Publicado:</b> <?php echo $rowp['datetime'] ?></p>
                        <p><b>Demo:</b> <a class="demo-pro" href="<?php echo $rowp['link'] ?>"></a><?php echo $rowp['link'] ?></p>
                        <div class="portfolio-attr">
                            <a href="http://www.facebook.com/share.php?u=" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="http://twitter.com/intent/tweet?status=" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a> 
                            <a href="https://pinterest.com/pin/create/bookmarklet/?media=im1.jpg&url=" target="_blank"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                            <a href="https://plus.google.com/share?url=" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </header>

            <div class="section">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="block-centered pt-50"> 
                        </div>
                    </div>
                </div>
            </div>
            
                <script>
                    (function () {
                        var d = document, s = d.createElement('script');
                        s.src = 'https://disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                    })();
                </script>
            </div>
            <div class="pb-50"></div>
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