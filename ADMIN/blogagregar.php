<?php include("header.php");?>
<?php include("db.php");?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Blog</h3>
    </div>
    <div class="panel-body">
        <form  action="procesablog.php" role="form" class="form-horizontal" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Autor <span class="required">*</span> </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Autor" name="author"
                           >
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Categoría</label>

                <div class="col-sm-10">
                    <select name="blog_category_id" class="form-control">
<option value="" selected="selected">Seleccionar ...</option>
<?php
 $sql1 = "SELECT * FROM blog_categories ";
                                        $result1 = mysqli_query($conn, $sql1);

                                        while ($row = mysqli_fetch_assoc($result1)) { ?>
<option value="<?php echo $row['blog_category_id'] ?>"> <?php echo $row['title'] ?></option>
<?php }?>
</select>                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Título <span class="required">*</span> </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Título" name="title"
                           value="">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Descripción breve <span class="required">*</span></label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Descripción breve" name="short_description"></textarea>
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
                <label class="col-sm-2 control-label" for="field-1"> Imagen destacada <span class="required">*</span></label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="col-sm-2">
                                    </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Etiquetas</label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Etiquetas" name="meta_keywords"></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="accion" value="Guardar">
                    <a href="bloglistar.php" class="btn btn-danger">Cancelar</a>
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
    
    
    
<?php include("footer.php"); ?>