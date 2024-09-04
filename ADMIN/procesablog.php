<?php
include('db.php');
if (isset($_POST['accion'])) {
       $date1 = date('Y-m-d H:i:s');
    if (($_POST['accion'])==="Guardar") {
      $autor = $_POST['author'];
$title = $_POST['title'];
 $categoria = $_POST['blog_category_id'];
$descipcor = $_POST['short_description'];
$descripcion = $_POST['description'];
$etiquetas = $_POST['meta_keywords'];
$foto= $_FILES["image"]["name"];
         $ruta= $_FILES["image"]["tmp_name"];  
        $fold= "..//cdn/blog/".$foto;
          copy($ruta, $fold);
        $query = "INSERT INTO `blog` (`title`, `description`, `image`,  `author`, 
            `short_description`, `blog_category_id`, `meta_keywords`,`datetime`)
            VALUES ('$title', '$descripcion', '$foto',  '$autor', '$descipcor', '$categoria', '$etiquetas','$date1');
"; 
        mysqli_query($conn, $query);
    header('Location:bloglistar.php');
     }
 
  if(($_POST['accion'])==="update") {
$id = $_POST['idblog'];
 $autor = $_POST['author'];
$title = $_POST['title'];
 $categoria = $_POST['blog_category_id'];
$descipcor = $_POST['short_description'];
$descripcion = $_POST['description'];
$etiquetas = $_POST['meta_keywords'];
        if (($_FILES['image']['name'] != null)){
      $foto= $_FILES["image"]["name"];
         $ruta= $_FILES["image"]["tmp_name"];  
        $fold= "..//cdn/blog/".$foto;
          copy($ruta, $fold);
        $query = " UPDATE `blog` SET `title` = '$title', `description` = '$descripcion', `image` = '$foto', 
            `author` = '$autor', `short_description` = '$descipcor', 
            `blog_category_id` = '$categoria', `meta_keywords` = '$etiquetas' WHERE (`blog_id` = '$id');

";
        mysqli_query($conn, $query);
        }else{
            $foto1= $_POST['imagen']; 
                $query = " UPDATE `blog` SET `title` = '$title', `description` = '$descripcion', `image` = '$foto1', 
            `author` = '$autor', `short_description` = '$descipcor', 
            `blog_category_id` = '$categoria', `meta_keywords` = '$etiquetas' WHERE (`blog_id` = '$id');

";
        mysqli_query($conn, $query); 
        }
    
 header('Location:bloglistar.php');
}
 
 
 
}
elseif  (($_GET['accion'])==="eliminar") {
       $id = $_GET['idblog']; 
       $query = "DELETE FROM `blog` WHERE `blog_id`='$id'";
        mysqli_query($conn, $query);  
        header('Location:bloglistar.php');
    }
    

elseif  (($_GET['accion'])==="editar") {
      
     ?>
<?php include("header.php"); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Blog</h3>
    </div>
    <div class="panel-body">
        <form role="form" class="form-horizontal" action="procesablog.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <?php     if  (isset($_GET['idblog'])) {
  $idblog1 =$_GET['idblog'];
  $queryp = "select blog_id,image,title,description,author,blog_category_id,short_description,meta_keywords from blog where  blog_id='$idblog1'";
  $resultp = mysqli_query($conn, $queryp);
  $rowp = mysqli_fetch_array($resultp);
  $categoria=$rowp['blog_category_id'];
  
  $queryp1 = "select * from blog_categories where blog_category_id='$categoria'";
  $resultp1 = mysqli_query($conn, $queryp1);
  $rowp1 = mysqli_fetch_array($resultp1);
  
} ?>
                <label class="col-sm-2 control-label" for="field-1">Autor <span class="required">*</span> </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Autor" name="author"
                           value="<?php echo $rowp['author'] ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Categoría</label>

                <div class="col-sm-10">
                    <select name="blog_category_id" class="form-control">

<option value="<?php echo $categoria ?>" selected="selected"><?php echo $rowp1['title'] ?></option>
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
                           value="<?php echo $rowp['title'] ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Descripción breve <span class="required">*</span></label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Descripción breve" name="short_description"><?php echo $rowp['short_description'] ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Descripción <span class="required">*</span></label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Descripción" name="description"><?php echo $rowp['description'] ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>


            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Imagen destacada <span class="required">*</span></label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="col-sm-2">
                                            <img src="..//cdn/blog/<?php echo $rowp['image'] ?>" class="img-inline userpic-32" width="40"/>
                                    </div>
            </div>
            <div class="form-group-separator"></div>
<input type="hidden" name="accion" value="update">
             <input type="hidden" name="imagen" value="<?php echo  $rowp['image'] ;?>"> 
              <input type="hidden" name="idblog" value="<?php echo  $rowp['blog_id']?>"> 

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Etiquetas</label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Etiquetas" name="meta_keywords"><?php echo $rowp['meta_keywords'] ?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Guardar">
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
<?php
}


else {
    header('Location:proyectolistar.php');
}
?>
