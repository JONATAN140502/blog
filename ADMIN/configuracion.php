<?php include("header.php"); ?>
<?php include("db.php"); ?>
            <div class="main-content">
<div class="panel-body">
    <div class="row">
        <form action="procesaconfiguracion.php" class="form-horizontal"  enctype="multipart/form-data" method="post">         

        <div class="col-md-12">

            <ul class="nav nav-tabs nav-tabs-justified">
                <li class="active">
                    <a href="#web-setting" data-toggle="tab">
                        <span class="visible"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Configuración del sitio web</span>
                    </a>
                </li>
                
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="web-setting">
                    <div>
                        .
                        <div class="form-group-separator"></div>
                        
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Correo electrónico del webmaster</label>
                            <div class="col-sm-10">
                                <?php
          $query1 = "SELECT * FROM settings where `key`='webmaster_email'";
  $result1 = mysqli_query($conn, $query1);

    $row1 = mysqli_fetch_array($result1);
 
 ?>
                                <input type="text" name="email" value="<?php echo $row1['value'] ?>" class="bg-focus form-control" data-required="true" />                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Fondo de la página de inicio </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="homebg">
                            </div>
                            <div class="col-sm-2">
                                <?php
          $query3 = "SELECT * FROM settings where `key`='home_bg'";
  $result3 = mysqli_query($conn, $query3);

    $row3 = mysqli_fetch_array($result3);
 
 ?>
                                                                    <img src="..//cdn/settings/<?php echo $row3['value'] ?>" class="img-inline userpic-32" width="40"/>
                                                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Acerca de mí imagen </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="aboutbg">
                            </div>
                            <div class="col-sm-2">
                                <?php
          $query4 = "SELECT * FROM settings where `key`='about_bg'";
  $result4 = mysqli_query($conn, $query4);

    $row4 = mysqli_fetch_array($result4);
 
 ?>
                                                                    <img src="..//cdn/settings/<?php echo $row4['value'] ?>" class="img-inline userpic-32" width="40"/>
                                                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                    </div>
                </div>
            </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label"></label>

                    <div class="col-sm-10">
                        <input type="submit" class="btn btn-secondary " name="enviar" value="Guardar">
                        <a href="index.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </div>
            </form>
            </div>
    

    
    </div>
</div>


                <footer class="main-footer sticky footer-type-1">
                    <div class="footer-inner">
                        <div class="footer-text">
                            <strong><a href="https://anthoncode.com">------</a></strong>.
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

