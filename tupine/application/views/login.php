<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/css/bootstrap.min.css">
  <title>TSE Admission</title>
</head>


<body>
  <section>

    <nav class="navbar navbar-light" style="background-color: #EEEEEE;">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo base_url("")?>"><img src="<?php echo base_url("assets/logo-tupine.png")?>" height="120" alt="tupine logo" loading="lazy" /></a>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end p-5">
          <button class="btn  btn-danger me-md-5" style="width: 200px;" type="button">LOGIN</button>
        </div>
      </div>
    </nav>

  </section>

  <section>
    <div class="container-fluid">
      <div class="col-10">
        <div class="d-grid gap-2 mt-5 d-md-flex justify-content-md-end ">
         <a href="<?php echo base_url("Account/register")?>"> <button type="button" class="btn  btn-light me-md-5" style="border-radius:30px; border:1px solid #333333; width:150px;">Register</button></a>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-12">
          <div class="form-box ">
            <div class="form-header fs-3 d-md-flex justify-content-md-center col-6 mx-auto " style="border-bottom: 2px solid #DDDDDD; padding-bottom: 20px; padding-top: 20px;">
              <b>Login</b>
            </div>
            <div calss="container ">
              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="staticEmail" class="col-sm-2 col-form-label"><b>Email</b></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
              </div>
              <div class="mb-3 col-6 mx-auto">
                <label for="inputPassword" class="col-sm-2 col-form-label"><b>Password</b></label>
                <div class="col-sm-12">
                  <input type="password" class="form-control" id="password"  placeholder="Password">
                </div>
              </div>
            </div>
          </div>
          <div class="d-grid gap-2 d-md-flex justify-content-md-center mx-auto">
            <button class="btn  btn-secondary mt-5" id="submit" style="width: 300px;" type="button">Login</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container-fluid">
      <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

          <div class="container">

            <a class="navbar-brand mt-2 ms-2 ms-lg-0" href="#">
              <img src="<?php echo base_url("assets/tu-logo.png")?>" height="50" alt="" />
            </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ms-auto" style="text-align:left;">
                <li class="nav-item">
                  <p class=""><b>คณะวิศวกรรมศาสตร์</b><br>99 หมู่ 18, ถ.พหลโยธิน, ต.คลองหนึ่ง, อ.คลองหลวง,<br> จ.ปทุมธานี 12120 Tel. +66 (0) 2564 3001-9</p>

                </li>
              </ul>
            </div>

          </div>

        </nav>
      </div>
    </div>

  </section>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.6.0.js') ?>"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        $("#submit").click(function(e) {
            e.preventDefault();
            console.log('test')
            var data = {
                "email": $("#email").val(),
                "password": $("#password").val(), 
            }
            console.log(data);

            var send_data = {
                "url": "<?php echo base_url('Account/login') ?>",
                "method": "POST",
                "data": data
            }

            // console.log(response.message);

            $.ajax(send_data).done(function(response) {
                if (response.code == "0x0000-00000") {
                    $(".alert_modal_response").text(response.message);
                    window.location.href = "<?php echo base_url('Account/profile') ?>";
                } else if (response.code == "1x0000-00000") {
                    $(".alert_modal_response").text(response.message);
                } else if (response.code == "2x0000-00002") {
                    $(".alert_modal_response").text(response.message);
                }
                $('#alert_modal').modal('show');
            });
            return false;
        });
    </script>

</body>
