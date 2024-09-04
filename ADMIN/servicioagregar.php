<?php include("header.php"); ?>
         
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Servicios </h3>
    </div>
    <div class="panel-body">
        <form role="form" action="procesaservicio.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Título</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Título" name="title"
                           >
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Descripción <span class="required">*</span></label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Descripción" name="description"></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Imagen</label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="imagen" >
                </div>
                <div class="col-sm-2">
                                    </div>
            </div>
            <div class="form-group-separator"></div>


            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="accion" value="Guardar">
                    <a href="serviciolistar.php" class="btn btn-danger">Cancelar</a>
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