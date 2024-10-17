<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        /* Add some spacing between cards */
        .card {
            margin-bottom: 20px; /* Add space below each card */
        }
    </style>
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

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">Uang Kas</div>
            <li class="nav-item">
                <a class="nav-link" href="admin_pembayaran.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pembayaran</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
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

            <!-- Divider -->
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
                <p class="text-center font-weight-bold" style="font-size: 50px;">PENGGUNA</p>
                <div class="container-fluid">
                    <div class="row">
                        <?php 
                          include('../koneksi.php');
                          $query = mysqli_query($conn, "SELECT * FROM users");
                          while ($row = mysqli_fetch_array($query)) {
                        ?>
                        <div class="col-md-4">
                            <form action="controller/kas/update_kas.php" method="POST">
                                <div class="card border-bottom-dark" style="border-radius: 15px;">
                                    <div class="card-body">
                                    <h5 class="card-title" style="font-weight: bold;">Users</h5>
                                        <div class="form-group d-flex align-items-center">
                                            <label for="nama_anggota" class="mr-1" style="margin-bottom: 0;">Nama:</label>
                                            <input type="input" name="nama_anggota" value="<?php echo $row['nama']; ?>" class="form-control" id="nama_anggota" style="border: none; background-color: transparent; flex: 1;">
                                        </div>
                                        <div class="form-group d-flex align-items-center">
                                            <label for="role" class="mr-1" style="margin-bottom: 0;">Role:</label>
                                            <input type="input" name="role" value="<?php echo $row['role']; ?>" class="form-control" id="role" style="border: none; background-color: transparent; flex: 1;">
                                        </div>
                                        <div class="form-group d-flex align-items-center">
                                            <label for="username" class="mr-1" style="margin-bottom: 0;">Username:</label>
                                            <input type="input" name="username" value="<?php echo $row['username']; ?>" class="form-control" id="username" style="border: none; background-color: transparent; flex: 1;">
                                        </div>
                                        <div class="form-group d-flex align-items-center">
                                            <label for="password" class="mr-1" style="margin-bottom: 0;">Password:</label>
                                            <input type="input" name="password" value="<?php echo $row['password']; ?>" class="form-control" id="password" style="border: none; background-color: transparent; flex: 1;">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- End of Main Content -->
            </div>
        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>
        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>
        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
    </div>
</body>

</html>
