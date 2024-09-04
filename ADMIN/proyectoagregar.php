<?php include("header.php");?>
<?php include("db.php");?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Proyectos</h3>
    </div>
    <div class="panel-body">
        <form action="procesaproyecto.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">Categoría</label>

                <div class="col-sm-10">
                    <select name="project_category_id" class="form-control">
<option value="" selected="selected">Seleccionar ...</option>
<?php 
                                 $sql9 = "SELECT * FROM projects_categories";
                                    $result9 = mysqli_query($conn, $sql9);

                                    while ($row9 = mysqli_fetch_assoc($result9)) {
 ?>
<option value="<?php  echo $row9['project_category_id']; ?>"><?php  echo $row9['title']; ?></option>
                                    <?php }?>
</select>                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Título</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Título" name="title"
                           value="">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Enlace</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enlace" name="link"
                           value="">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Publicado</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control datepicker" placeholder="Publicado " name="datetime"
                               data-format="yyyy-mm-dd"
                               value="">

                        <div class="input-group-addon">
                            <a href="#"><i class="linecons-calendar"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Imagen destacada</label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="col-sm-2">
                                    </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Descripción </label>

                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description"></textarea>

                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="accion" value="Guardar">
                    <a href="proyectolistar.php" class="btn btn-danger">Cancelar</a>
                </div>
            </div>


        </form>

    </div>
</div>
<script src="assets/js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.replace('description');
    });
</script>
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