<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
  <body class="gradient-bg">
      
    <div class="container-fluid mt-5">

      <div class="row">
        <div class="col-md-3">
            <div class="container text-center pt-5">
              <img src="asset/rocket2.png" id="rocketLogo">
            </div>
            <div class="container mt-4 text-center text-white">
              <h2 class="contentTitle">Selamat Datang</h2>
              <p>Halo para developer! apakah kamu sudah siap untuk berkreasi!?</p>
            </div>
        </div>
        <div class="col-md-9">
          <div class="container half-circle press-form pb-3 pt-1">
          <ul class="nav nav-pills justify-content-end" id="myTab" role="tablist">
              <li class="nav-item">
                  <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
              </li>
          </ul>
          <h2 class="text-center contentTitle">Formulir Data Team</h2>
          <form method="post" action="insertdata.php">
            <div class="form-group">
                <label for="nama">Nama <span class="text-danger">*</span></label>
                <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" aria-describedby="helpId" required>
              </div>
              <div class="form-group">
                <label for="email">Email <span class="text-danger">*</span></label>
                <input type="email" id="email" name="email" class="form-control" aria-describedby="helpId" required>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat" class="form-control" autocomplete="off" aria-describedby="helpId">
              </div>
              <div class="form-group">
                <label for="role">Role / Pekerjaan <span class="text-danger">*</span></label>
                <textarea id="role" rows="2" id="role" name="role" class="form-control" required></textarea>
              </div>
                <?php
                  session_start();
                ?>
                <?php if(isset($_SESSION["notification"])): ?>
                  <div class="notification" style="color: green;">
                    <?php echo $_SESSION["notification"]; ?>
                  </div>
                  <?php
                  // hapus pesan
                  unset($_SESSION["notification"]);
                endif;
                ?>
              <div class="form-group text-right">
                <button type="submit" id="buttonSubmit" class="btn btn-primary">Kirim</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

      <script>
        document.getElementById('email').addEventListener('input', function () {
        this.setCustomValidity('');
      });

        document.getElementById('email').addEventListener('invalid', function () {
          if (this.value === '') {
            this.setCustomValidity('Mohon isi email anda.');
          } else {
            this.setCustomValidity('Email tidak valid.');
          }
        });
      </script>

      <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>