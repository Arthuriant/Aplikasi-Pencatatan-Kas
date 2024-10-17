<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Pasien</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH PEMASUKAN
            </div>
            <div class="card-body">
              <form action="simpan-pemasukan.php" method="POST">
                
                <div class="form-group">
                  <label>ID Pemasukan</label>
                  <input type="text" name="id_pemasukan" placeholder="Masukkan ID Pemasukan" class="form-control" required>
                </div>

                <div class="form-group">
                <label>Tanggal</label>
                <input type="text" name="tanggal" id="tanggal" placeholder="Masukkan Tanggal" class="form-control datepicker" required>
                </div>



                <div class="form-group">
                  <label>Keterangan</label>
                  <input type="text" name="keterangan" placeholder="Masukkan Keterangan" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Catatan</label>
                  <input type="text" name="catatan" placeholder="Masukkan Catatan" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Jumlah</label>
                  <input type="text" name="jumlah" placeholder="Masukkan Jumlah" class="form-control" required>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
            <script>
        $(document).ready(function(){
            $('.datepicker').datepicker({
            format: 'yyyy-mm-dd', // format tanggal yang diinginkan
            autoclose: true,
            todayHighlight: true
            });
        });
        </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>
