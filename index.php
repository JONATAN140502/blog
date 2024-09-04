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
    <link rel="stylesheet" href="assets/css/colors/blue.css" type="text/css">
</head>

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
                                $f = $row2['value'];
                                ?>
                                <?php foreach (explode("\n", $f) as $i) : ?>
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
                        <li><a class="active" href="#home"><i class="fas fa-home"></i> Inicio</a></li>
                        <li><a href="#about-me"><i class="fas fa-user-tie"></i> Acerca de mí</a></li>

                        <li><a href="#portfolio"><i class="fas fa-business-time"></i> Portafolio</a></li>
                        <li><a href="#blog"><i class="fas fa-book-reader"></i> Blog</a></li>
                        <li><a href="#contact"><i class="fas fa-paper-plane"></i> Contáctame</a></li>
                    </ul>
                    <!-- /Main menu -->
                </div>
                <!-- /Navigation -->
            </div>
        </header>
        <!-- /Header -->
        <?php
        $query31 = "SELECT * FROM settings where `key`='home_bg'";
        $result31 = mysqli_query($conn, $query31);
        $row31 = mysqli_fetch_array($result31);
        $query311 = "SELECT * FROM about where `key`='avatar'";
        $result311 = mysqli_query($conn, $query311);

        $row311 = mysqli_fetch_array($result311);
        ?>
        <!-- Mobile Header -->
        <div class="responsive-header">
            <div class="responsive-header-name">
                <img class="responsive-logo" src="cdn/about/<?php echo $row311['value'] ?>" alt="<?php echo $ro1w['value'] ?>" />
                <?php echo $ro1w['value'] ?>
            </div>
            <span class="responsive-icon"><i class="lnr lnr-menu"></i></span>
        </div>
        <!-- /Mobile Header -->
        <!-- Main Content Pages -->
        <div class="content-pages">
            <!-- Subpages -->
            <div class="sub-home-pages">
                <!-- Start Page home -->
                <section id="home" class="sub-page start-page">
                    <div class="sub-page-inner" style="background: url('cdn/settings/<?php echo $row31['value'] ?>');">
                        <div class="mask"></div>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="title-block">
                                    <h2>Hola, soy <?php echo $ro1w['value'] ?></h2>
                                    <div class="type-wrap">
                                        <div class="cd-headline clip">
                                            <span class="blc"></span>
                                            <span class="cd-words-wrapper">
                                                <?php

                                                $query3 = "SELECT * FROM about WHERE `key`='dedi'";
                                                $result3 = mysqli_query($conn, $query3);
                                                $row3 = mysqli_fetch_array($result3);
                                                $f1 = $row3['value'];
                                                ?>
                                                <?php foreach (explode("\n", $f1) as $i) : ?>
                                                    <b><?php echo $i ?></b><br>
                                                <?php endforeach; ?>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="home-buttons">
                                        <a href="#contact" class="bt-submit"><i class="lnr lnr-envelope"></i> Contáctame</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Start Page home -->

                <!-- About Me Subpage -->
                <section id="about-me" class="sub-page">
                    <div class="sub-page-inner">
                        <div class="section-title">
                            <div class="main-title">
                                <div class="title-main-page">
                                    <h4>Acerca de mí</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                        <div class="section-content">
                            <!-- about me -->
                            <div class="row pb-30">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                    <h3><?php echo $ro1w['value'] ?></h3>
                                    <?php

                                    $query4 = "SELECT * FROM about WHERE `key`='about_me'";
                                    $result4 = mysqli_query($conn, $query4);
                                    $row4 = mysqli_fetch_array($result4);

                                    $query5 = "SELECT * FROM about WHERE `key`='address'";
                                    $result5 = mysqli_query($conn, $query5);
                                    $row5 = mysqli_fetch_array($result5);

                                    ?>
                                    <span class="about-location"><i class="lnr lnr-map-marker"></i><?php echo $row5['value'] ?></span>
                                    <p class="about-content"><?php echo $row4['value'] ?></p>
                                    <ul class="bout-list-summry row">

                                    </ul>
                                </div>

                                <div class="col-xs-6 col-sm-12 col-md-6 col-lg-6">
                                    <div class="box-img">
                                        <?php $query6 = "SELECT * FROM settings WHERE `key`='about_bg'";
                                        $result6 = mysqli_query($conn, $query6);
                                        $row6 = mysqli_fetch_array($result6);

                                        ?>
                                        <img src="cdn/settings/<?php echo $row6['value'] ?>" class="img-fluid" alt="image">
                                    </div>
                                </div>
                            </div>
                            <!-- /about me -->
                            <div class="pt-30">
                                <div class="section-head">
                                    <h4>
                                        <span>Mis estudios</span>
                                        Historial de fondo
                                    </h4>
                                </div>
                                <div class="main-timeline">
                                    <?php
                                    $sql7 = "SELECT * FROM education";
                                    $result7 = mysqli_query($conn, $sql7);

                                    while ($row7 = mysqli_fetch_assoc($result7)) { ?>

                                        <div class="timeline currecnt">
                                            <div class="timeline-icon">
                                                <img src="cdn/resume/<?php echo $row7['image'] ?>" alt="Universidad Nacional Pedro Ruiz Gallo">
                                            </div>
                                            <div class="timeline-content">
                                                <span class="date">
                                                    <?php echo $row7['from_date']  ?>
                                                    -
                                                    <?php echo $row7['to_date']  ?> </span>
                                                <h5 class="title"> <?php echo $row7['field']  ?> </h5>
                                                <p class="description">
                                                    <?php echo $row7['school']  ?> </p>
                                                <p class="description">
                                                    <?php echo $row7['description']  ?> </p>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <!-- services -->
                            <div class="special-block-bg">
                                <div class="section-head">
                                    <h4>
                                        <span>Lo que realmente hago</span>
                                        Me Dedico
                                    </h4>
                                </div>
                                <?php
                                $sql8 = "SELECT * FROM services";
                                $result8 = mysqli_query($conn, $sql8);

                                while ($row8 = mysqli_fetch_assoc($result8)) { ?>

                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="services-list">

                                                <div class="service-block">
                                                    <div class="service-icon">
                                                        <i><img src="cdn/services/<?php echo $row8['image']  ?>" /></i>
                                                    </div>
                                                    <div class="service-text">
                                                        <h4><?php echo $row8['title']  ?> </h4>
                                                        <p>
                                                            <?php echo $row8['description']  ?> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
                            <!-- /services -->
                </section> <!-- Video section -->

                <!-- About Me Subpage -->

                <!-- Resume Subpage -->

                <!-- End of Resume Subpage -->

                <!-- Portfolio Subpage -->
                <section id="portfolio" class="sub-page">
                    <div class="sub-page-inner">
                        <div class="section-title">
                            <div class="main-title">
                                <div class="title-main-page">
                                    <h4>Portafolio</h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>

                        <div class="section-content">
                            <div class="filter-tabs">


                                <?php
                                $sql9 = "SELECT * FROM projects_categories";
                                $result9 = mysqli_query($conn, $sql9);

                                while ($row9 = mysqli_fetch_assoc($result9)) {


                                    $categoryid = $row9['project_category_id'];
                                    $querycat  = "SELECT count(*) FROM projects where `project_category_id` ='$categoryid'";
                                    $resultcat = mysqli_query($conn, $querycat);
                                    $rowcat = mysqli_fetch_array($resultcat);
                                    $fcat = $rowcat['count(*)'];
                                ?>
                                    <button class="fil-cat" data-rel="pro_cat_<?php echo $row9['project_category_id'] ?>"><span>(<?php echo $fcat ?>)</span><?php echo $row9['title'] ?></button>
                                <?php } ?>
                            </div>

                            <div class="portfolio-grid portfolio-trigger" id="portfolio-page">
                                <?php
                                $query10 = "SELECT count(*) from projects ";
                                $result10 = mysqli_query($conn, $query10);
                                $row10 = mysqli_fetch_array($result10);

                                ?>
                                <div class="label-portfolio"><span class="rotated-sub">Proyectos</span><span class="project-count"><?php echo $row10['count(*)'] ?></span></div>
                                <div class="row">
                                    <?php
                                    $sql11 = "SELECT * FROM projects";
                                    $result11 = mysqli_query($conn, $sql11);

                                    while ($row11 = mysqli_fetch_assoc($result11)) {
                                    ?>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 portfolio-item pro_cat_<?php echo $row11['project_category_id'] ?>">

                                            <div class="portfolio-img">
                                                <img src="cdn/projects/<?php echo $row11['image'] ?>" class="img-responsive" alt="<?php echo $row11['title'] ?>">
                                            </div>
                                            <div class="portfolio-data">
                                                <h4><a href="blog.php?idproject=<?php echo $row11['project_id'] ?>"><?php echo $row11['title'] ?></a></h4>
                                                <?php $namecategory = $row11['project_category_id'] ?>
                                                <?php
                                                $querycat1 = "SELECT * FROM projects_categories where `project_category_id` ='$namecategory'";
                                                $resultcat1 = mysqli_query($conn, $querycat1);
                                                $rowcat1 = mysqli_fetch_array($resultcat1);
                                                $fcat1 = $rowcat1['title'];
                                                ?>
                                                <p class="meta"><?php echo $fcat1 ?></p>
                                                <div class="portfolio-attr">
                                                    <a href="blog.php?idproject=<?php echo $row11['project_id'] ?>"><i class="lnr lnr-link"></i></a>
                                                    <a href="cdn/projects/<?php echo $row11['image'] ?>" data-rel="lightcase:gal" title="<?php echo $row11['title'] ?>"><i class="lnr lnr-move"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Portfolio Subpage -->

                <!-- Blog Subpage -->
                <section id="blog" class="sub-page">
                    <div class="sub-page-inner">
                        <div class="section-title">
                            <div class="main-title">
                                <div class="title-main-page">
                                    <h4>Blog</h4>
                                    <p>Compartimos nuestras noticias y blog</p>
                                </div>
                            </div>
                        </div>

                        <div class="section-content">
                            <div class="row blog-grid-flex">
                                <?php
                                $sql12 = "select visits,DATE_FORMAT(datetime,'%d/%m/%Y')  as fecha,image,title,blog_id,blog_category_id from blog limit 10";
                                $result12 = mysqli_query($conn, $sql12);

                                while ($row12 = mysqli_fetch_assoc($result12)) {
                                ?>

                                    <div class="col-md-4 col-sm-6 blog-item">
                                        <div class="blog-article">
                                            <div class="comment-like"> <span><i class="fas fa-eye" aria-hidden="true"></i><?php echo $row12['visits'] ?></span></div>
                                            <div class="article-img">
                                                <a href="blogs.php?idblog=<?php echo $row12['blog_id'] ?>"> <img src="cdn/blog/<?php echo $row12['image'] ?>" class="img-responsive" alt="<?php echo $row12['title'] ?>"></a>
                                            </div>
                                            <div class="article-link"> <a href="blogs.php?idblog=<?php echo $row12['blog_id'] ?>"><i class="lnr lnr-arrow-right"></i></a> </div>
                                            <div class="article-content">
                                                <h4>
                                                    <a href="blogs.php?idblog=<?php echo $row12['blog_id'] ?>">
                                                        <?php echo $row12['title'] ?>
                                                    </a>
                                                </h4>
                                                <div class="meta"> <span><?php echo $row12['fecha'] ?></span> <span><i>-</i> <a href="blogcategoria.php?idcategoriablog=<?php echo $row12['blog_category_id'] ?>">
                                                            <?php
                                                            $blog_category_id = $row12['blog_category_id'];
                                                            $querycat11 = "SELECT * FROM blog_categories where `blog_category_id` ='$blog_category_id'";
                                                            $resultcat11 = mysqli_query($conn, $querycat11);
                                                            $rowcat11 = mysqli_fetch_array($resultcat11);
                                                            $fcat11 = $rowcat11['title'];
                                                            echo $fcat11;
                                                            ?>
                                                        </a></span> </div>
                                                <p>
                                                    <?php echo $row12['title'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                                <div class="col-md-12 text-center">
                                    <a href="blogtotal.php" class="btn bt-submit">Ver todos los artículos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- /Blog Subpage -->

                <!-- Contact Subpage -->
                <section id="contact" class="sub-page">
                    <div class="sub-page-inner">
                        <div class="section-title">
                            <div class="main-title">
                                <div class="title-main-page">
                                    <h4>Contacto</h4>
                                    <p>*******</p>
                                </div>
                            </div>
                        </div>

                        <!-- /Contact Form -->

                        <!-- Contact Details -->
                        <div class="pt-50 pb-30">
                            <div class="section-head">
                                <h4>
                                    <span>Información de contacto</span>
                                    Búscame aquí
                                </h4>
                            </div>

                            <!-- Contact Info -->
                            <div class="sidebar-textbox row pb-50">
                                <div class="contact-info d-flex col-md-4">
                                    <div class="w-25">
                                        <div class="contact-icon">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="contact-text w-75">
                                        <h2>Teléfono</h2>
                                        <?php
                                        $query21 = "SELECT * FROM about WHERE `key`='phone'";
                                        $result21 = mysqli_query($conn, $query21);
                                        $row21 = mysqli_fetch_array($result21);
                                        echo  $row21['value'];

                                        ?></p>
                                    </div>
                                </div>
                                <div class="contact-info d-flex col-md-4">
                                    <div class="w-25">
                                        <div class="contact-icon">
                                            <i class="far fa-envelope-open"></i>
                                        </div>
                                    </div>
                                    <div class="contact-text w-75">
                                        <h2>Correo electrónico</h2>
                                        <?php
                                        $query22 = "SELECT * FROM about WHERE `key`='email'";
                                        $result22 = mysqli_query($conn, $query22);
                                        $row22 = mysqli_fetch_array($result22);

                                        $correos = $row22['value'];
                                        ?>

                                        <p><?php echo $correos; ?></p>

                                    </div>
                                </div>
                                <div class="contact-info d-flex col-md-4">
                                    <div class="w-25">
                                        <div class="contact-icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                    <div class="contact-text w-75">
                                        <h2>Dirección</h2>
                                        <p> <?php
                                            $query231 = "SELECT * FROM about WHERE `key`='address'";
                                            $result231 = mysqli_query($conn, $query231);
                                            $row231 = mysqli_fetch_array($result231);
                                            echo  $row231['value']; ?><br>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- /Contact info -->

                            <!-- Map Container -->
                            <div class="contact-map pt-50">
                                <!-- GOOGLE MAP -->
                                <div id="google-map"></div>

                            </div>
                            <!-- /Map Container -->

                            <!-- Social Media -->
                            <div class="pt-50">
                                <div class="social-media-block">
                                    <h4>REDES SOCIALES </h4>
                                    <ul class="social-media-links">
                                        <?php
                                        $query24 = "SELECT * FROM about WHERE `key`='facebook'";
                                        $result24 = mysqli_query($conn, $query24);
                                        $row24 = mysqli_fetch_array($result24);
                                        ?><br>
                                        <li><a href="<?php echo  $row24['value'] ?>"><i class="fab fa-facebook-f"></i></a></li>
                                        <?php
                                        $query26 = "SELECT * FROM about WHERE `key`='linkedin'";
                                        $result26 = mysqli_query($conn, $query26);
                                        $row26 = mysqli_fetch_array($result26);
                                        ?>
                                        <li><a href="<?php echo  $row26['value'] ?>"><i class="fab fa-linkedin-in"></i></a></li>
                                        <?php
                                        $query27 = "SELECT * FROM about WHERE `key`='youtube'";
                                        $result27 = mysqli_query($conn, $query27);
                                        $row27 = mysqli_fetch_array($result27);
                                        ?>
                                        <li><a href="<?php echo  $row27['value'] ?>"><i class="fab fa-youtube"></i></a></li>

                                    </ul>
                                </div>
                            </div>
                            <!-- /Social Media -->
                        </div>
                        <!-- /Contact Details -->
                    </div>
                </section>
                <!-- End Contact Subpage -->
            </div>
            <!-- /Page changer wrapper -->
        </div>
        <!-- /Main Content -->
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
            var style = [{
                "featureType": "landscape",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 65
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "poi",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 51
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.highway",
                "stylers": [{
                    "saturation": -100
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.arterial",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 30
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "road.local",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 40
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "transit",
                "stylers": [{
                    "saturation": -100
                }, {
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "administrative.province",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "on"
                }, {
                    "lightness": -25
                }, {
                    "saturation": -100
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "hue": "#ffff00"
                }, {
                    "lightness": -25
                }, {
                    "saturation": -97
                }]
            }];

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