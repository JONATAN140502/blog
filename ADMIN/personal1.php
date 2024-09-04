<?php include("header.php"); ?>
 <?php include("db.php"); ?>   
    
<div class="panel-body">
    <div class="row">
        <form  action="procesapersonal.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="tabs-vertical-env">

                <ul class="nav tabs-vertical">
                    <li class="active"><a href="#v-about" data-toggle="tab"><i class="fa fa-user"></i> Acerca de mí</a></li>
                    <li><a href="#v-contact" data-toggle="tab"><i class="fa fa-phone"></i> Información de contacto</a></li>
                    
                    <li><a href="#v-social" data-toggle="tab"><i class="fa fa-share-alt"></i> Enlaces sociales</a></li>
                </ul>

                <div class="tab-content">

                    <div class="tab-pane active" id="v-about">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Nombre</label>
                            <div class="col-sm-10">
                                 <?php
          $query = "SELECT * FROM about WHERE `key` = 'avatar'";
  $result = mysqli_query($conn, $query);

    $row = mysqli_fetch_array($result);
 
 $query1 = "SELECT * FROM about WHERE `key` = 'name'";
  $result1 = mysqli_query($conn, $query1);

    $ro1w = mysqli_fetch_array($result1);
 ?>
                                <input type="text" name="name" value="<?php echo $ro1w['value'] ?>" class="bg-focus form-control" >                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Imagen de perfil </label>
                            <div class="col-sm-8">
                                <input type="file" class="form-control" name="avatar">
                            </div>
                            <div class="col-sm-2">
                                                                    <img src="..//cdn/about/<?php echo $row['value'] ?>" class="img-inline userpic-32" width="40"/>
                                                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Nacionalidad</label>
                            <div class="col-sm-10">
                                <?php
                                      
                                        $query4 = "SELECT * FROM about WHERE `key`='nationality'";
                                        $result4 = mysqli_query($conn, $query4);
                                        $row4 = mysqli_fetch_array($result4);
                                        
                                         $query5 = "SELECT * FROM about WHERE `key`='about_me'";
                                        $result5 = mysqli_query($conn, $query5);
                                        $row5 = mysqli_fetch_array($result5);
                                        
                                        ?>
                                <input type="text" name="nationality" value="<?php echo $row4['value'] ?>" class="bg-focus form-control" >                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Acerca de mí</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="about_me"><?php echo $row5['value'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Mis  Dedicaciones</label>
                            <div class="col-sm-10">
                                <?php
                                      
                                        $query3 = "SELECT * FROM about WHERE `key`='dedi'";
                                        $result3 = mysqli_query($conn, $query3);
                                        $row3 = mysqli_fetch_array($result3);
                                        
                                        ?>
                                <textarea class="form-control" name="position_typing"><?php echo $row3['value'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        
                        <div class="form-group-separator"></div>

                        
                        <div class="form-group-separator"></div>

                    </div>


                    <div class="tab-pane" id="v-contact">
                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Dirección</label>
                            <div class="col-sm-10">
                                <?php
                                        
                                         $query6 = "SELECT * FROM about WHERE `key`='address'";
                                        $result6= mysqli_query($conn, $query6);
                                        $row6 = mysqli_fetch_array($result6);
                                        
                                        ?>
                                <textarea class="form-control" name="address"><?php echo $row6['value'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Ubicación</label>
                            <div class="col-sm-5">
                                <?php
                                        
                                         $query7 = "SELECT * FROM about WHERE `key`='latitude'";
                                        $result7= mysqli_query($conn, $query7);
                                        $row7 = mysqli_fetch_array($result7);
                                        
                                        ?>
                                <input type="text" name="latitude" value="<?php echo $row7['value'] ?>" class="bg-focus form-control" >                            </div>
                            <div class="col-sm-5">
                                 <?php
                                        
                                         $query8 = "SELECT * FROM about WHERE `key`='longitude'";
                                        $result8= mysqli_query($conn, $query8);
                                        $row8 = mysqli_fetch_array($result8);
                                        
                                        ?>
                                <input type="text" name="longitude" value="<?php echo $row8['value'] ?>" class="bg-focus form-control" >                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Teléfono</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="phone"> <?php 
                                                     $query21 = "SELECT * FROM about WHERE `key`='phone'";
                                        $result21 = mysqli_query($conn, $query21);
                                        $row21 = mysqli_fetch_array($result21);
                                        echo  $row21['value'];
                                                    
                                                    ?></textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Correo electrónico</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="email">
                                                    <?php 
                                                     $query22 = "SELECT * FROM about WHERE `key`='email'";
                                        $result22 = mysqli_query($conn, $query22);
                                        $row22 = mysqli_fetch_array($result22);
                                      
                                            echo $row22['value'];
                                                  ?> </textarea>
                            </div>
                        </div>
                        <div class="form-group-separator"></div>
  </div>
                   
                    <div class="tab-pane" id="v-social">

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> Facebook</label>
                            <div class="col-sm-10">
                                 <?php 
                                                $query24 = "SELECT * FROM about WHERE `key`='facebook'";
                                        $result24 = mysqli_query($conn, $query24);
                                        $row24 = mysqli_fetch_array($result24);
                                     ?>
                                <input type="text" name="facebook" value="<?php echo  $row24['value']?>" class="bg-focus form-control" >                            </div>
                        </div>
                        <div class="form-group-separator"></div>


                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> linkedin</label>
                            <div class="col-sm-10">
                                <?php 
                                                $query26 = "SELECT * FROM about WHERE `key`='linkedin'";
                                        $result26 = mysqli_query($conn, $query26);
                                        $row26 = mysqli_fetch_array($result26);
                                     ?>
                                <input type="text" name="linkedin" value="<?php echo  $row26['value']?>" class="bg-focus form-control" >                            </div>
                        </div>
                        <div class="form-group-separator"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label" for="field-1"> youtube</label>
                            <div class="col-sm-10">
                                <?php 
                                                $query27 = "SELECT * FROM about WHERE `key`='youtube'";
                                        $result27 = mysqli_query($conn, $query27);
                                        $row27 = mysqli_fetch_array($result27);
                                     ?> 
                                <input type="text" name="youtube" value="<?php echo  $row27['value']?>" class="bg-focus form-control" >                            </div>
                        </div>
                        <div class="form-group-separator"></div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" class="btn btn-secondary " name="guardar" value="Guardar">
                            <a href="personal1.php" class="btn btn-danger">Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>

        </form>

    </div>	
</div>	
                <footer class="main-footer sticky footer-type-1">
                    <div class="footer-inner">
                        <div class="footer-text">
                            <strong><a href="https://anthoncode.com">JONATANMAYANGA 2022</a></strong>.
                        </div>
                        <div class="go-up">
                            <a href="#" rel="go-top">
                                <i class="fa-angle-up"></i>
                            </a>
                        </div>
                    </div>
                </footer>
            </div>
    
<?php include("footer.php"); ?>