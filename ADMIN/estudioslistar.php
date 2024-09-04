<?php include("header.php"); ?>
            <div class="main-content">
                <div class="page-title">

    <div class="breadcrumb-env">
        <ul class="user-info-menu left-links list-inline list-unstyled">
            <li class="hidden-sm hidden-xs">
                <a href="#" data-toggle="sidebar">
                    <i class="fa-bars"></i>
                </a>
            </li>
        </ul>
        <ol class="breadcrumb bc-1" >
            <li>
                <a href="http://localhost/potaf/admin/dashboard"><i class="fa-home"></i>  Inicio</a>
            </li>
            <li class="active">
                <strong>Estudios</strong>
            </li>
        </ol>

    </div>

</div>

<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> Estudios</h3>
        <div class="panel-options">
            <a href="http://localhost/potaf/admin/education/manage" class="btn btn-secondary btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>   Agregar nuevo registro</a>
        </div>
    </div>
    <div class="panel-body">

        <div class="table-responsive" data-pattern="priority-columns" data-focus-btn-icon="fa-asterisk" data-sticky-table-header="true" data-add-display-all-btn="true" data-add-focus-btn="true">
            <table cellspacing="0" class="table table-small-font table-bordered table-striped" >
                <thead>
                    <tr>
                        <th> Escuela</th>
                        <th> Campo</th>
                        <th> Duración</th>
                        <th> Operaciones</th>
                    </tr>
                </thead>

                <tbody class="middle-align">
                                            <tr id="3">
                            <td>Universidad Nacional Pedro Ruiz Gallo</td>
                            <td>IT Sloutions</td>
                            <td>2018-08-08 -  Actual </td>
                            <td>
                                <a href="http://localhost/potaf/admin/education/manage/3" class="btn btn-orange btn-sm">
                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                    Editar                                </a>
                                <a class="btn btn-danger btn-sm remove">
                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                    Eliminar                                </a>
                            </td>
                        </tr>
                                    </tbody>
            </table>
        </div>
            </div>
</div>
<script type="text/javascript">
    $(".remove").click(function(){
        var id = $(this).parents("tr").attr("id");
        if(confirm('¿Está seguro de eliminar este registro?'))
        {
            $.ajax({
               url: 'http://localhost/potaf/admin/education/delete/'+id,
               type: 'DELETE',
               error: function() {
                  alert('Algo está mal');
               },
               success: function(data) {
                    $("#"+id).remove();
                    alert("Registro eliminado con éxito");  
               }
            });
        }
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
        </div>
<?php include("footer.php"); ?>