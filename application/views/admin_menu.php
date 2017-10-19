<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>IS IT Catalogue Admin | PRODUK</title>

    <!-- Core CSS - Include with every page -->
    <link href="<?php echo base_url().'assets/sb/css/bootstrap.min.css'?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/sb/font-awesome/css/font-awesome.css'?>" rel="stylesheet">

    <!-- Page-Level Plugin CSS - Tables -->
    <link href="<?php echo base_url().'assets/sb/css/plugins/dataTables/dataTables.bootstrap.css'?>" rel="stylesheet">

    <!-- SB Admin CSS - Include with every page -->
    <link href="<?php echo base_url().'assets/sb/css/sb-admin.css'?>" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url().'Ctrl_admin/index'?>">IS IT Catalogue</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li>
                  <span>Welcome, <?php echo $this->session->userdata('username'); ?>!</span>
                </li>

                <li>
                   <a href="<?php echo site_url('admin_login/logout')?>" title="Keluar"><i class="fa fa-power-off fa-fw"></i></a>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default navbar-static-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="side-menu">
                      <li>
                          <a href="#"><i class="fa fa-table fa-fw"></i> Produk<span class="fa arrow"></span></a>
                          <ul class="nav nav-second-level">
                              <li>
                                  <a href="<?php echo base_url().'index.php/c_database/menu'?>">Daftar Produk</a>
                              </li>
                          </ul>
                          <ul class="nav nav-second-level">
                           <li>
                             <a href="<?php echo base_url().'index.php/c_database/add_apps'?>">Tambah Produk</a>
                           </li>
                          </ul>
                          <!-- /.nav-second-level -->
                         </li>
                    </ul>
                    <!-- /#side-menu -->
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Produk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover"><!--id="dataTables-example"-->
                                    <thead>
                                        <tr>
                                            <th style="width:100px">ID Produk</th>
                                            <th style="width:200px">Nama</th>
                                            <th style="width:150px">Genre</th>
                                            <th style="width:150px">Harga</th>
                                            <th>Spesifikasi</th>
                                            <th style="width:100px">Lakukan</th>
                                        </tr>
                                    </thead>
                                      <?php 
                                      if (!empty($data))
                                      {
                                        foreach ($data as $m) { ?>
                                        <tr>
                                        <td><?php echo $m['id_aplikasi'] ?></td>
                                        <td><?php echo $m['nama_aplikasi'] ?></td>
                                        <td><?php echo $m['genre_apps'] ?></td>
                                        <td><?php echo "Rp ".number_format($m['harga_apps'], 0, "," , ".") ?></td>
                                        <td><?php echo $m['spesifikasi_apps'] ?></td>
                                        <td align='center'>
                                        <a href="<?php echo base_url().'index.php/c_database/edit_menu/'.$m['id_aplikasi']; ?>">
                                        <button type="button" class="btn btn-outline btn-primary btn-sm">Edit</button>
                                         </a>

                                         <a href="<?php echo base_url().'index.php/c_database/delete_menu/'.$m['id_aplikasi']; ?>">
                                         <button type="button" class="btn btn-outline btn-primary btn-sm">Delete</button>

                                        </a>
                                        </td>
                                        </tr>
                                    <?php } } ?>
                                    </tbody>
                                       
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <a href="<?php echo base_url().'index.php/c_database/add_apps'?>">
                              <button type="button" class="btn btn-outline btn-primary btn-lg btn-block">Tambah Produk</button>
                            </a>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
            <br>

    </div>
    <!-- /#wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/sb/js/jquery-1.10.2.js'?>"></script>
    <script src="<?php echo base_url().'assets/sb/js/bootstrap.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/sb/js/plugins/metisMenu/jquery.metisMenu.js'?>"></script>

    <!-- Page-Level Plugin Scripts - Tables -->
    <script src="<?php echo base_url().'assets/sb/js/plugins/dataTables/jquery.dataTables.js'?>"></script>
    <script src="<?php echo base_url().'assets/sb/js/plugins/dataTables/dataTables.bootstrap.js'?>"></script>

    <!-- SB Admin Scripts - Include with every page -->
    <script src="<?php echo base_url().'assets/sb/js/sb-admin.js'?>"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

</body>

</html>
