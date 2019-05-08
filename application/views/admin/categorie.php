<!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Data table</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id Categorie</th>
                                            <th>Nom</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($categories as $w) {?>
                                        <tr>
                                            <td><?php echo $w['Id_Categorie']?></td>
                                            <td><?php echo $w['Categorie']?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>js/main.js"></script>


    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/jszip/dist/jszip.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>vendors/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="<?php echo base_url().'/assets/admin/page/'?>js/init-scripts/data-table/datatables-init.js"></script>


</body>

</html>
