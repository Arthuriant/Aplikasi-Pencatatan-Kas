

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  
  <div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 30rem; height: 35rem; border-radius: 35px;">
      <div class="card-body">
      <div class="container d-flex justify-content-center align-items-center">
      <img src="img/logo.png" style="width: 135px; height: 35px;" alt="Italian Trulli">
      </div>
      <div class="container d-flex justify-content-center align-items-center">
      <h5 class="card-title justify-content-center">Register</h5>
      </div>
        <form action="simpan_akun.php" method="POST">
              <br>
                <div class="form-group">
                  <input type="input" name="nama" placeholder="Nama" class="form-control" required>
                </div>

                <div class="form-group my-2">
                <input type="radio" id="role" name="role" value="admin">
                Admin
                <input type="radio" id="role" name="role" value="bendahara">
                Bendahara
                </div>
                
                <div class="form-group">
                  <input type="input" name="username" placeholder="username" class="form-control" required>
                </div>
                <br>
                <div class="form-group">
                  <input type="password" name="password" placeholder="password" class="form-control" required>
                </div>

                <br>
                
                <button type="submit" style="width: 28rem; border-radius: 35px;" class="btn btn-dark">Log In</button>
              </form>
            
                <div style="display: flex;justify-content: center;">
                  <div>Alredy Have Account?</div>
                  <a href="login.php">login</a>
                </div>

                <div style="text-align: center; border-bottom: 1px solid black; line-height: 0; margin: 20px 0;">
                  <span style="background: white; padding: 0 10px;">More Login Method</span>
                </div>


                <div class="container d-flex justify-content-center align-items-center"style="display: flex;justify-content: space-between; width: 50px;">
                <img src="img/facebook.png" style="width: 70px; height: 70px;" alt="Italian Trulli">
                <img src="img/google.png" style="width: 70px; height: 70px;" alt="Italian Trulli">
                <img src="img/twitter.png" style="width: 70px; height: 70px;" alt="Italian Trulli">
                </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
