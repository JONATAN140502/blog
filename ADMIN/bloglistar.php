<?php include("header.php");?>
<?php include("db.php");?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"> Blog</h3>
        <div class="panel-options">
            <a href="blogagregar.php" class="btn btn-secondary btn-sm"><i class="fa fa-plus-square" aria-hidden="true"></i>  Agregar nuevo registro</a>
        </div>
    </div>
    <div class="panel-body">

        <table class="table table-bordered table-striped" id="datatable_">
            <thead>
                <tr>
                    <th> Título</th>
                    <th> Visitas</th>
                    <th> Creado</th>
                    <th>Operaciones</th>
                </tr>
            </thead>

            <tbody class="middle-align">
                <?php
                                        $sql12 = "select visits,DATE_FORMAT(datetime,'%d/%m/%Y')  as fecha,image,title,blog_id,blog_category_id from blog ";
                                        $result12 = mysqli_query($conn, $sql12);

                                        while ($row12 = mysqli_fetch_assoc($result12)) {
                                            ?>
                                    <tr>
                        <td><?php echo $row12['title']?></td>
                        <td><?php echo $row12['visits']?></td>
                        <td><?php echo $row12['fecha']?></td>

                        <td>
                            <a href="procesablog.php?idblog=<?php echo $row12['blog_id']?>&accion=editar" class="btn btn-orange btn-sm">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Editar                            </a>

                            <a  href="procesablog.php?idblog=<?php echo $row12['blog_id']?>&accion=eliminar" class="btn btn-danger btn-sm remove">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                                Eliminar                            </a>
                        </td>
                    </tr>
                                        <?php }?>              
                            </tbody>
        </table>
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
<?php include("footer.php"); ?>