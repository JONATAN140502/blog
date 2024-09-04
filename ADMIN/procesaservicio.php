<?php
include('db.php');
if (isset($_POST['accion'])) {

    if (($_POST['accion'])==="Guardar") {
        $title = $_POST['title'];
        $descripcion = $_POST['description'];
        
      $foto= $_FILES["imagen"]["name"];
         $ruta= $_FILES["imagen"]["tmp_name"];  
        $fold= "..//cdn/services/".$foto;
          copy($ruta, $fold);
        $query = "INSERT INTO `services` ( 
            `title`, `description`, `image`) VALUES ( '$title', '$descripcion', '$foto')";
        mysqli_query($conn, $query);
    header('Location:serviciolistar.php');
     }
 
  if(($_POST['accion'])==="update") {
   $id = $_POST['idservicio'];   
 $title = $_POST['title'];
 $descripcion = $_POST['description'];
        if (($_FILES['image']['name'] != null)){
      $foto= $_FILES["image"]["name"];
         $ruta= $_FILES["image"]["tmp_name"];  
        $fold= "..//cdn/services/".$foto;
          copy($ruta, $fold);
        $query = "UPDATE `services` SET `title` = '$title', `description` = '$descripcion', `image` = '$foto' 
            WHERE (`service_id` = '$id')
";
        mysqli_query($conn, $query);
        }else{
            $foto1= $_POST['imagen']; 
           $query = "UPDATE `services` SET `title` = '$title', `description` = '$descripcion', `image` = '$foto1' 
            WHERE (`service_id` = '$id')
";
        mysqli_query($conn, $query); 
        }
    
 header('Location:serviciolistar.php');
}
 
 
 
}
elseif  (($_GET['accion'])==="eliminar") {
       $id = $_GET['idservicio']; 
        
       $query = "DELETE FROM `services` WHERE `service_id` = '$id';";
        mysqli_query($conn, $query);  
        header('Location:serviciolistar.php');
    }
    

elseif  (($_GET['accion'])==="editar") {
       $id = $_GET['idservicio']; 
 $query = "Select *  FROM `services` WHERE `service_id` = '$id';";
       $result = mysqli_query($conn, $query);
  $row = mysqli_fetch_array($result);
    $id = $row['service_id'];
    $nombre= $row['title'];
            $descripcion= $row['description'];
            $imagen= $row['image'];
          
            ?>
<?php include("header.php"); ?>
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
                           value="<?php echo  $nombre ;?>">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Descripción <span class="required">*</span></label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Descripción" name="description"><?php echo  $descripcion ;?></textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Imagen</label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="col-sm-2">
                                            <img src="..//cdn/services/<?php echo  $imagen ;?>" class="img-inline userpic-32" width="40"/>
                                    </div>
            </div>
            <div class="form-group-separator"></div>
            <input type="hidden" name="accion" value="update">
             <input type="hidden" name="imagen" value="<?php echo  $imagen ;?>"> 
              <input type="hidden" name="idservicio" value="<?php echo  $id?>"> 

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Guardar">
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
<?php
}


else {
    header('Location:serviciolistar.php');
}
?>
