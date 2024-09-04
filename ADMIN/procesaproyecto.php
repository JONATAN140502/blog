<?php
include('db.php');
if (isset($_POST['accion'])) {

    if (($_POST['accion'])==="Guardar") {
       $title = $_POST['title'];
 $categoria = $_POST['project_category_id'];
 $link = $_POST['link'];
 $datetime= $_POST['datetime'];

        $descripcion = $_POST['description'];
        
      $foto= $_FILES["image"]["name"];
         $ruta= $_FILES["image"]["tmp_name"];  
        $fold= "..//cdn/projects/".$foto;
          copy($ruta, $fold);
        $query = "INSERT INTO `projects` (`project_category_id`, `title`, 
            `image`, `link`, `datetime`, `description`) VALUES ('$categoria', '$title', '$foto', '$link', 
                '$datetime', '$descripcion');
"; mysqli_query($conn, $query);
    header('Location:proyectolistar.php');
     }
 
  if(($_POST['accion'])==="update") {
   $id = $_POST['idproyecto'];   
 $title = $_POST['title'];
 $categoria = $_POST['project_category_id'];
 $link = $_POST['link'];
 $datetime= $_POST['datetime'];

        $descripcion = $_POST['description'];
        if (($_FILES['image']['name'] != null)){
      $foto= $_FILES["image"]["name"];
         $ruta= $_FILES["image"]["tmp_name"];  
        $fold= "..//cdn/projects/".$foto;
          copy($ruta, $fold);
        $query = " UPDATE `projects` SET `project_category_id` = '$categoria', `title` = '$title', 
            `image` = '$foto', `link` = '$link', `datetime` = '$datetime', `description` = '$descripcion'
            WHERE (`project_id` = '$id')
";
        mysqli_query($conn, $query);
        }else{
            $foto1= $_POST['imagen']; 
                 $query = " UPDATE `projects` SET `project_category_id` = '$categoria', `title` = '$title', 
            `image` = '$foto1', `link` = '$link', `datetime` = '$datetime', `description` = '$descripcion'
            WHERE (`project_id` = '$id')
";
        mysqli_query($conn, $query); 
        }
    
 header('Location:proyectolistar.php');
}
 
 
 
}
elseif  (($_GET['accion'])==="eliminar") {
       $id = $_GET['idproyecto']; 
       $query = "DELETE FROM `projects` WHERE `project_id`='$id'";
        mysqli_query($conn, $query);  
        header('Location:proyectolistar.php');
    }
    

elseif  (($_GET['accion'])==="editar") {
       $id = $_GET['idproyecto']; 
 $query = "Select *  FROM `projects` WHERE `project_id` = '$id';";
       $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
     ?>
<?php include("header.php"); ?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Proyectos</h3>
    </div>
    <div class="panel-body">
        <form  action="procesaproyecto.php" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label">Categoría</label>

                <div class="col-sm-10">
                    <select name="project_category_id" class="form-control">
                        <?php 
                        $idcateg=$row['project_category_id'];
                                 $sql91 = "SELECT * FROM projects_categories where project_category_id='$idcateg'";
                                 $result91= mysqli_query($conn, $sql91);
                                 $row91 = mysqli_fetch_array($result91);
                                 ?>
                                    
<option value="<?php  echo $row91['project_category_id'];?>"><?php  echo $row91['title']; ?></option>
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
                           value="<?php  echo $row['title']; ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Enlace</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enlace" name="link"
                           value="<?php  echo $row['link']; ?>">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Publicado</label>
                <div class="col-sm-10">
                    <div class="input-group">
                        <input type="text" class="form-control datepicker" placeholder="Publicado " name="datetime"
                               data-format="yyyy-mm-dd"
                               value="<?php  echo $row['datetime']; ?>">

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
                                            <img src="..//cdn/projects/<?php  echo $row['image']; ?>" class="img-inline userpic-32" width="40"/>
                                    </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Descripción </label>

                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="description"><?php  echo $row['description']; ?></textarea>

                </div>
            </div>
            <input type="hidden" name="accion" value="update">
             <input type="hidden" name="imagen" value="<?php  echo $row['image']; ?>"> 
              <input type="hidden" name="idproyecto" value="<?php  echo $row['project_id']; ?>">
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Guardar">
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
<?php
}


else {
    header('Location:proyectolistar.php');
}
?>
