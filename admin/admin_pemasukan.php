<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    
    <!-- jQuery and Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-light sidebar sidebar-light accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <img src="../img/logo.png" style="width: 135px; height: 35px;" alt="Logo">
                </div>
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">Uang Kas</div>

            <li class="nav-item">
                <a class="nav-link" href="admin_pembayaran.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pembayaran</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="sidebar-heading">Catatan</div>

            <li class="nav-item">
                <a class="nav-link" href="admin_pengeluaran.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengeluaran</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="admin_pemasukan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pemasukan</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">Pengguna</div>

            <li class="nav-item">
                <a class="nav-link" href="admin_users.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Users</span>
                </a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <p class="text-center font-weight-bold" style="font-size: 50px;">CATATAN PEMASUKAN</p>
                <div class="container" style="margin-top: 30px">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">DATA ANGGOTA</div>

                                <div class="card-body">
                                    <a class="btn btn-primary" href="controller/pemasukan/tambah-pemasukan.php">Tambah Pemasukan</a>
                                    <br>


                                    <br>

                                    <table class="table table-bordered" id="myTable">
                                        <thead>
                                            <tr>
                                            <th>ID PEMASUKAN</th>
                                            <th>TANGGAL</th>
                                            <th>KETERANGAN</th>
                                            <th>CATATAN</th>
                                            <th>JUMLAH</th>
                                            <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                include('../koneksi.php');
                                                $no = 1;
                                                $query = mysqli_query($conn, "SELECT * FROM pemasukan");
                                                while ($row = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id_pemasukan'] ?></td>
                                                <td><?php echo $row['tanggal'] ?></td>
                                                <td><?php echo $row['keterangan'] ?></td>
                                                <td><?php echo $row['catatan'] ?></td>
                                                <td><?php echo $row['jumlah'] ?></td>
                                                <td class="text-center">
                                                    <a href="controller/pemasukan/edit-pemasukan.php?id=<?php echo $row['id_pemasukan'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                                    <a href="controller/pemasukan/hapus-pemasukan.php?id=<?php echo $row['id_pemasukan'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages -->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script>
       
