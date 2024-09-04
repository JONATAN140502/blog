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
                <strong> Estudios </strong>
            </li>
        </ol>
    </div>
</div>
<!-- Admin Table-->
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">Estudios </h3>
    </div>
    <div class="panel-body">
                <form role="form" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Escuela</label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Escuela" name="school"
                           value="Universidad Nacional Pedro Ruiz Gallo">
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Campo </label>

                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Campo" name="field"
                           value="IT Sloutions">
                </div>
            </div>
            <div class="form-group-separator"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1"> Imagen <span class="required">*</span></label>

                <div class="col-sm-8">
                    <input class="form-control" type="file" name="image" >
                </div>
                <div class="col-sm-2">
                                            <img src="http://localhost/potaf//cdn/resume/544.jpg" class="img-inline userpic-32" width="40"/>
                                    </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Descripción </label>

                <div class="col-sm-10">
                    <textarea class="form-control" placeholder="Descripción" name="description"
                              >UNPRG</textarea>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="field-1">Fecha desde </label>

                <div class="col-sm-4">
                    <div class="input-group">
                        <input type="text" class="form-control datepicker" placeholder="Fecha desde " name="from_date"
                               data-format="yyyy-mm-dd"
                               value="2018-08-08">

                        <div class="input-group-addon">
                            <a href="#"><i class="linecons-calendar"></i></a>
                        </div>
                    </div>
                </div>
                <label class="col-sm-2 control-label" for="field-1">Fecha hasta </label>

                <div class="col-sm-4">
                    <div class="input-group disapear_it">
                        <input type="text" class="form-control datepicker" placeholder="Fecha hasta " name="to_date"
                               data-format="yyyy-mm-dd"
                               value="2019-03-19">

                        <div class="input-group-addon">
                            <a href="#"><i class="linecons-calendar"></i></a>
                        </div>
                    </div>
                    <div class="padd-top-7">
                        <input type="checkbox" name="current" value="1" checked="checked" class='current' /> Actualmente estudio                    </div>
                </div>
            </div>
            <div class="form-group-separator"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                    <input type="submit" class="btn btn-secondary " name="submit" value="Guardar">
                    <a href="http://localhost/potaf/admin/education" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </form>
    </div>
</div>

<script type="text/javascript">
    $(function ()
    {
        $('.current').change(function ()
        {
            if ($(this).is(':checked')) {
                $(".disapear_it").hide();

            }
            else {
                $(".disapear_it").show();
            }
        });
        if ($('.current').is(':checked')) {
            $(".disapear_it").hide();

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