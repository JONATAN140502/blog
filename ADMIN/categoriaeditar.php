<?php include("../header.php"); ?>
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
                <a href="http://localhost/potaf/admin/dashboard"><i class="fa-home"></i> Inicio</a>
            </li>
            <li class="active">
                <strong> Categorías de proyectos </strong>
            </li>
        </ol>
    </div>
</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Categorías de proyectos </h3>
    </div>
    <div class="panel-body">
                <form role="form" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Título</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Título" name="title"
                           value="">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Guardar">
                    <a href="http://localhost/potaf/admin/projects_categories" class="btn btn-danger">Cancelar</a>
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
        </div>

        <link rel="stylesheet" href="http://localhost/potaf/styles/admin/default/assets/js/select2/select2.css">
        <link rel="stylesheet" href="http://localhost/potaf/styles/admin/default/assets/js/select2/select2-bootstrap.css">
        <script src="http://localhost/potaf/styles/admin/default/assets/js/select2/select2.min.js"></script>
        <script src="http://localhost/potaf/styles/admin/default/assets/js/datepicker/bootstrap-datepicker.js"></script>

        <script type = "text/javascript" >
            jQuery(document).ready(function ($)
            {
                $(".s2example-1").select2({
                    placeholder: 'Select your category...',
                    allowClear: true
                }).on('select2-open', function ()
                {
                    $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
                });
            });
        </script>
    </body>
</html>