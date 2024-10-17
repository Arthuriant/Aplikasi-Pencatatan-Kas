<?php 
include('../../../koneksi.php');

$id = $_GET['id'];

// Make sure to sanitize the input to prevent SQL Injection
$id = intval($id); // Convert to integer

$query = "SELECT * FROM pemasukan WHERE id_pemasukan = $id LIMIT 1";

$result = mysqli_query($conn, $query);

if (!$result) {
    // Output error message
    die("Query failed: " . mysqli_error($conn));
}

// Fetch the data
$row = mysqli_fetch_array($result);

// Check if row is found
if (!$row) {
    die("Data not found!");
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Pasien</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        EDIT PASIEN
                    </div>
                    <div class="card-body">
                        <form action="update-pemasukan.php" method="POST">

                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="text" name="tanggal" value="<?php echo htmlspecialchars($row['tanggal']); ?>" placeholder="Ubah Tanggal Pemasukan" class="form-control">
                                <input type="hidden" name="id_pemasukan" value="<?php echo htmlspecialchars($row['id_pemasukan']); ?>">
                            </div>

                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" value="<?php echo htmlspecialchars($row['keterangan']); ?>" placeholder="Masukkan Keterangan" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Catatan</label>
                                <textarea class="form-control" name="catatan" placeholder="Masukkan Catatan Pemasukan" rows="4"><?php echo htmlspecialchars($row['catatan']); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Jumlah</label>
                                <input type="text" name="jumlah" value="<?php echo htmlspecialchars($row['jumlah']); ?>" placeholder="Masukkan Tanggal Pemasukan" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-success">UPDATE</button>
                            <button type="reset" class="btn btn-warning">RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>