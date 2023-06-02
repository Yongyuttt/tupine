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
        <a class="navbar-brand" href="<?php echo base_url("") ?>"><img src="<?php echo base_url("assets/logo-tupine.png") ?>" height="120" alt="tupine logo" loading="lazy"></a>

        <div class="d-grid gap-2 d-md-flex justify-content-md-end p-5">
          <a href="<?php echo base_url("Account/login") ?>"><button class="btn  btn-danger me-md-5" style="width: 200px;" type="button">LOGIN</button></a>
        </div>
      </div>
    </nav>

  </section>



  <section>
    <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-12">
          <div class="form-box ">
            <div class="form-header fs-3 d-md-flex justify-content-md-center col-6 mx-auto mt-3 " style="border-bottom: 2px solid #DDDDDD; padding-bottom: 20px; padding-top: 20px;">
              <b>Login</b>
            </div>
            <div calss="container ">
              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="email" class="col-sm-2 col-form-label"><b>Email</b></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="email" placeholder="Email">
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto">
                <label for="password" class="col-sm-2 col-form-label"><b>Password</b></label>
                <div class="col-sm-12">
                  <input type="password" class="form-control" id="password" placeholder="Password">
                </div>
              </div>

              <div class="mb-4 col-6 mx-auto">
                <label for="c_password" class="col-sm-3 col-form-label"><b>Confirm password</b></label>
                <div class="col-sm-12">
                  <input type="password" class="form-control" id="c_password" placeholder="Confirm password">
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto">
                <b>Title</b><br>
                <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="radio" name="title" value="mr.">
                  <label class="form-check-label" for="inlineRadio1">Mr.</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="title" value="miss.">
                  <label class="form-check-label" for="inlineRadio2">Miss.</label>
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="firstname" class="col-sm-2 col-form-label"><b>First name</b></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="firstname" placeholder="First name">
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="lastname" class="col-sm-2 col-form-label"><b>Last name</b></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="lastname" placeholder="Last name">
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="firstnamethai" class="col-form-label"><b>First name ( for Thai students ) กรุณากรอกเป็นภาษาไทย</b></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="firstnamethai" placeholder="First name">
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="lastnamethai" class="col-form-label"><b>Last name ( for Thai students ) กรุณากรอกเป็นภาษาไทย</b></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="lastnamethai" placeholder="Last name">
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto">
                <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="radio" name="idType" value="Thai ID card" onclick="showContent()">
                  <label class="form-check-label">Thai ID card</label>
                </div>
                <div class="form-check form-check-inline mt-3">
                  <input class="form-check-input" type="radio" name="idType" value="Passport ID card" onclick="showContent()">
                  <label class="form-check-label">Passport</label>
                </div>
              </div>

              <div id="thaiid" class="collapse">
                <div class="mb-3 col-6 mx-auto">
                  <label class="col-form-label"><b>Thai ID card</b></label>
                  <div class="col-sm-12">
                    <input type="text" id="idCardInput" class="form-control" placeholder="Thai ID card">
                  </div>
                </div>
              </div>

              <div id="passportid" class="collapse">
                <div class="mb-3 col-6 mx-auto">
                  <label class="col-form-label"><b>Passport number (For Non-Thai)</b></label>
                  <div class="col-sm-12">
                    <input type="text" id="idPassportInput" class="form-control" placeholder="Passport number">
                  </div>
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="birthday" class="col-sm-2 col-form-label"><b>Date of Birth</b></label>
                <div class="col-sm-12">
                  <input type="date" class="form-control" id="birthday">
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="telephonenumber" class="col-sm-3 col-form-label"><b>Telephone number</b></label>
                <div class="col-sm-12">
                  <input type="tel" class="form-control" id="telephonenumber" placeholder="xxx-xxx-xxxx">
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="address" class="col-sm-3 col-form-label"><b>Address</b></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="address" placeholder="Address">
                </div>
              </div>

              <div class="mb-3 col-6 mx-auto mt-3">
                <label for="schoolname" class="col-sm-3 col-form-label"><b>School name</b></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="schoolname" placeholder="School name">
                </div>
              </div>

              <div class="col-6 mx-auto mt-3">
                <label for="grade" class="col-form-label"><b>Grade point average (GPA of 5 semesters)</b></label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="grade" placeholder="Grade point average (GPA)">
                </div>
              </div>

            </div>
          </div>

          <div class=" mt-3" style="display: flex; justify-content: center;">
            <div class="g-recaptcha" data-sitekey="6LemAFAmAAAAAOvpMHLBsYlNL6SVzJH039z_3N23" data-callback="onSubmit" data-action="submit">Submit</div>
          </div>

          <div class="d-grid gap-2 d-md-flex justify-content-md-center mx-auto">
            <button class="btn  btn-danger mt-5" id="submit" style="width: 150px;" type="button">Save</button>
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
              <img src="<?php echo base_url("assets/tu-logo.png") ?>" height="50" alt="">
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



  <script>
    function showContent() {
      var selectedRadio = document.querySelector('input[name="idType"]:checked');
      var content1 = document.getElementById('thaiid');
      var content2 = document.getElementById('passportid');

      if (selectedRadio.value === 'thaiid') {
        content1.classList.add('show');
      } else {
        content1.classList.remove('show');
      }

      if (selectedRadio.value === 'passsportid') {
        content2.classList.add('show');
      } else {
        content2.classList.remove('show');
      }
    }
  </script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  <script>
    $("#submit").click(function(e) {
      e.preventDefault();
      console.log('test')
      var testdata = "student"
      var data = {
        "id": null,
        "email": $("#email").val(),
        "password": $("#password").val(),
        "title": $('input[name="title"]:checked').val(),
        "firstname": $("#firstname").val(),
        "lastname": $("#lastname").val(),
        "firstnamethai": $("#firstnamethai").val(),
        "lastnamethai": $("#lastnamethai").val(),
        "idType": $('input[name="idType"]:checked').val(),
        "idCardInput": $("#idCardInput").val(),
        "idPassportInput": $("#idPassportInput").val(),
        "telephonenumber": $("#telephonenumber").val(),
        "address": $("#address").val(),
        "schoolname": $("#schoolname").val(),
        "birthday": $("#birthday").val(),
        "grade": $("#grade").val(),
        "urole": testdata,
        "created_at": null,
      }
      console.log(data);

      var send_data = {
        "url": "<?php echo base_url('Account/register') ?>",
        "method": "POST",
        "data": data
      }

      // console.log(response.message)

      $.ajax(send_data).done(function(response) {
        if (response.code == "0x0000-00000") {
          $(".alert_modal_response").text(response.message);
          window.location.href = "<?php echo base_url('Account/login') ?>";
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

  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
    function onSubmit(token) {
      document.getElementById("demo-form").submit();
    }
  </script>

</body>