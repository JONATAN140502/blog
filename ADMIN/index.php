<?php include("header.php"); ?>
<?php include("db.php"); ?>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">PANEL</h3>
        <div class="panel-options">
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-primary"  data-count=".num" data-from="0" data-to="7" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-eye"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="xe-label">
                            <span> Vistas</span>
                             <?php
          $query = "SELECT SUM(visits) as vis FROM blog";
  $result = mysqli_query($conn, $query);

    $vis = mysqli_fetch_array($result);
 
 ?>
                            <strong class=""><?php  echo $vis['vis']?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span>Total Vistas  </span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-progress-counter-pink" data-count=".num" data-from="0" data-to="2" data-duration="2">
                    <div class="xe-background">
                        <i class="fa fa-magic"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-magic"></i>
                        </div>
                        <div class="xe-label">
                            <span>Servicios</span>
                            <?php  $query1 = "SELECT count(*) as cant from  services";
  $result1 = mysqli_query($conn, $query1);

    $row1 = mysqli_fetch_array($result1);
 
 ?>
                            <strong class=""><?php  echo $row1['cant']?></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="56" data-fill-unit="%" data-fill-property="width" data-fill-duration="2" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span>Total Servicios</span>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-counter-block-success"  data-count=".num" data-from="0" data-to="5" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-tags" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-tags" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> Proyectos</span>
                             <?php  $query2 = "SELECT count(*) as cant from  projects";
  $result2 = mysqli_query($conn, $query2);

    $row2 = mysqli_fetch_array($result2);
 
 ?>
                            <strong class=""><?php  echo $row2['cant']?></strong>
                        </div>
                    </div>

                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>

                    <div class="xe-lower">
                        <span>Total Proyectos</span>
                    </div>

                </div>
            </div>

            <div class="col-sm-3">
                <div class="xe-widget xe-progress-counter xe-counter-block-purple"  data-count=".num" data-from="0" data-to="3" data-suffix="" data-duration="3">
                    <div class="xe-background">
                        <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                    </div>
                    <div class="xe-upper">
                        <div class="xe-icon">
                            <i class="fa fa-newspaper-o" aria-hidden="true"></i>
                        </div>
                        <div class="xe-label">
                            <span> Publicaciones de blog</span>
                            
                            <?php  $query3 = "SELECT count(*) as cant from blog";
  $result3 = mysqli_query($conn, $query3);

    $row3 = mysqli_fetch_array($result3);
 
 ?>
                            <strong class="p-lg-0"><h4><?php  echo $row3['cant']?></h4></strong>
                        </div>
                    </div>
                    <div class="xe-progress">
                        <span class="xe-progress-fill"  data-fill-from="0" data-fill-to="82" data-fill-unit="%" data-fill-property="width" data-fill-duration="3" data-fill-easing="true"></span>
                    </div>
                    <div class="xe-lower">
                        <span>Total Publicaciones de blog</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/widgets.js"></script>
                <footer class="main-footer sticky footer-type-1">
                    <div class="footer-inner">
                        <div class="footer-text">
                            <strong><a href="https://anthoncode.com">-----</a></strong>.
                        </div>
                        <div class="go-up">
                            <a href="#" rel="go-top">
                                <i class="fa-angle-up"></i>
                            </a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
<?php include("footer.php"); ?>