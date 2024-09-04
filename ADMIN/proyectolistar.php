<?php include("header.php"); ?>
<?php include("db.php"); ?>
   
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> Proyectos</h3>
        <div class="panel-options">
            <a href="proyectoagregar.php" class="btn btn-secondary btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar nuevo registro</a>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
            <table cellspacing="0" class="table table-small-font table-bordered table-striped" >
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Categoría </th>
                        <th>Imagen </th>
                        <th>Operaciones</th>
                    </tr>
                </thead>
                <tbody class="middle-align">
                    <?php
          $sql = "SELECT * FROM projects";
          $result = mysqli_query($conn, $sql);    

          while($row = mysqli_fetch_assoc($result)) { ?>
                                            <tr >
                            <td><?php echo $row['title'] ?></td>
                            <?php $namecategory = $row['project_category_id'] ?>
                                                    <?php
                                                    $querycat1 = "SELECT * FROM projects_categories where `project_category_id` ='$namecategory'";
                                                    $resultcat1 = mysqli_query($conn, $querycat1);
                                                    $rowcat1 = mysqli_fetch_array($resultcat1);
                                                    $fcat1 = $rowcat1['title'];
                                                    ?>
                            <td><?php echo $fcat1; ?></td>
                            <td>
                                <img src="..//cdn/projects/<?php echo $row['image'] ?>" class="img-circle img-inline userpic-32" width="28" />
                            </td>
                            <td>
                                <a href="procesaproyecto.php?idproyecto=<?php echo $row['project_id'] ?>&accion=editar" class="btn btn-orange btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Editar                                </a>

                                <a  href="procesaproyecto.php?idproyecto=<?php echo $row['project_id'] ?>&accion=eliminar" onclick=" return ConfirmDelete()" class="btn btn-danger btn-sm remove">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Eliminar                                </a>
                            </td>
                        </tr>
                                            
          <?php }
          ?>     
                </tbody>
            </table>
        </div>
            </div>     </div>


<script type="text/javascript">
     function ConfirmDelete(){
                
                
        var respuesta =confirm("Estas seguro de eliminar el elemento");
            if(respuesta === true){
                return true;
            }
            else{return false;}
    
    
    
    }
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