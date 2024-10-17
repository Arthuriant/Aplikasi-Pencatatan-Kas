<?php

class UangKas {
    private $conn;
    // Constructor to initialize the database connection
    public function __construct($dbConnection) {
        $this->conn = $dbConnection;
    }
    // Method to fetch data from the database
    public function getData() {
        $query = "SELECT * FROM uang_kas";
        return mysqli_query($this->conn, $query);
    }
}
include('../koneksi.php'); // Assuming this file establishes the $conn variable
$uangKas = new UangKas($conn);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UangKas - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
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
                <img src="../img/logo.png" style="width: 135px; height: 35px;" alt="Italian Trulli">
                </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="admin_dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Uang Kas
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="admin_pembayaran.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pembayaran</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Catatan
            </div>

            <!-- Nav Item - Pages Collapse Menu -->

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="admin_pengeluaran.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengeluaran</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="admin_pemasukan.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pemasukan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <div class="sidebar-heading">
                Pengguna
            </div>

            <li class="nav-item">
                <a class="nav-link" href="admin_users.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Users</span></a>
            </li>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">


                <!-- Topbar -->
            
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-center mb-4 ">
                        <h1 class="pt-3 h3 mb-0 text-gray-800">Welcome to Dashboard UangKas</h1>
                    </div>
                    <?php 
    include('../koneksi.php');
    $kas = mysqli_query($conn, "SELECT SUM(week1 + week2 + week3 + week4) AS total_uang_kas FROM uang_kas");
    $pemasukan = mysqli_query($conn, "SELECT SUM(jumlah) AS total_pemasukan FROM pemasukan");
    $pengeluaran= mysqli_query($conn, "SELECT SUM(jumlah) AS total_pengeluaran FROM pengeluaran");
        while($kasrow = mysqli_fetch_array($kas) ) {
            $pemasukanrow = mysqli_fetch_array($pemasukan);
            $pengeluaranrow = mysqli_fetch_array($pengeluaran);
            $total = $kasrow['total_uang_kas'] + $pemasukanrow['total_pemasukan'] - $pengeluaranrow['total_pengeluaran'];
        ?>

                    <div class="row">
                        <div class="container d-flex justify-content-center align-items-center"style="display: flex;justify-content: space-between;">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Pembayaran Uang Kas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo  number_format($kasrow['total_uang_kas'], 2, ',', '.') . "</h3>";?></div>
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                    Bulan ini</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Pemasukkan</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo  number_format($pemasukanrow['total_pemasukan'], 2, ',', '.') . "</h3>";?></div>
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Bulan ini</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Pengeluaran</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo  number_format($pengeluaranrow['total_pengeluaran'], 2, ',', '.') . "</h3>";?></div>
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Bulan ini</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Pengeluaran</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo  number_format($total, 2, ',', '.') . "</h3>";?></div>
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Bulan ini</div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>

                    <?php } ?>

                    <!-- Table Dasboard Content Start -->
                    <p class="text-center font-weight-bold" style="font-size: 50px;">CATATAN UANG KAS</p>
    <div class="container" style="margin-top: 30px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA ANGGOTA
            </div>

<br>
 <table class="table table-bordered" id="myTable">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nama</th>
      <th scope="col">Week1</th>
      <th scope="col">Week2</th>
      <th scope="col">Week3</th>
      <th scope="col">Week4</th>
    </tr>
  </thead>
  <tbody>
    <?php 
      include('../koneksi.php');
      $no = 1;
      $query = mysqli_query($conn,"SELECT * FROM uang_kas");
      while($row = mysqli_fetch_array($query)){
    ?>

    <tr>
      <!-- Form should wrap all the inputs and button -->
      <form action="controller/kas/update_kas.php" method="POST">
        <td><?php echo $no++ ?></td>
        <input type="hidden" name="id_anggota" value="<?php echo $row['id_anggota'] ?>">
        <td><?php echo $row['nama_anggota'] ?></td>
        <input type="hidden" name="nama_anggota" value="<?php echo $row['nama_anggota'] ?>">
        <td><input style="width: 100px;border: none;background-color: transparent;" type="text" name="week1" value="<?php echo $row['week1'] ?>" placeholder="Masukkan Kode" class="form-control" required></td>
        <td><input style="width: 100px;border: none;background-color: transparent;" type="text" name="week2" value="<?php echo $row['week2'] ?>" placeholder="Masukkan Kode" class="form-control" required></td>
        <td><input style="width: 100px;border: none;background-color: transparent;" type="text" name="week3" value="<?php echo $row['week3'] ?>" placeholder="Masukkan Kode" class="form-control" required></td>
        <td><input style="width: 100px;border: none;background-color: transparent;" type="text" name="week4" value="<?php echo $row['week4'] ?>" placeholder="Masukkan Kode" class="form-control" required></td>
      </form>
    </tr>

    <?php } ?>
  </tbody>
</table>
            </div>
          </div>
      </div>
    </div>





            </div>
                    <!-- Table Dashboard Content End -->






            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; UangKas 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

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

</body>

</html>