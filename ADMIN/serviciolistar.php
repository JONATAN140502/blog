<?php include("header.php"); ?>
<?php include("db.php"); ?>
   
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> Servicios</h3>
        <div class="panel-options">
            <a href="servicioagregar.php" class="btn btn-success" ><i class="fa fa-plus-square" aria-hidden="true"></i> Agregar nuevo registro</a>
        </div>
    </div>
    <div class="panel-body">

        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
            <table cellspacing="0" class="table table-small-font table-bordered table-striped" >
                <thead>
                    <tr>
                        <th> Título</th>
                        <th> Operaciones</th>
                    </tr>
                </thead>

                <tbody class="middle-align">
                    
                     <?php
          $sql = "SELECT * FROM services";
          $result = mysqli_query($conn, $sql);    

          while($row = mysqli_fetch_assoc($result)) { ?>
                                            <tr>
                            <td><img src="..//cdn/services/<?php echo$row['image']  ?>" class="img-circle img-inline userpic-32" width="28" /><?php echo$row['title']  ?></td>
                            <td>
                                <a href="procesaservicio.php?idservicio=<?php echo$row['service_id'] ?>&accion=editar" class="btn btn-orange btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Editar                                </a>
                                <a  href="procesaservicio.php?idservicio=<?php echo$row['service_id']?>&accion=eliminar"class="btn btn-danger btn-sm remove" onclick=" return ConfirmDelete()">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Eliminar                                </a>
                            </td>
                        </tr>
                        <?php } ?>                   
                                    </tbody>
            </table>
        </div>
            </div>
</div>

<div class="modal fade" id="exampleModalagregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
       
      
    </div>
  </div>
</div>


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