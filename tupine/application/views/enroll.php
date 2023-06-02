<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>TSE Admission</title>

</head>

<body>
    <section>
        <nav class="navbar navbar-light" style="background-color: #EEEEEE;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="<?php echo base_url("assets/logo-tupine.png") ?>" height="120" alt="tupine logo" loading="lazy" /></a>

                <div class="btn-group me-md-5" role="group">
                    <button class="btn  btn-danger me-md-5 dropdown-toggle " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width:150px;" type="button"><b><?php echo $users->firstname ?></b></button>
                    <ul class="dropdown-menu ">
                        <li><a class="dropdown-item" href="<?php echo base_url("") ?>">Profile</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url("Account/enroll") ?>">Eroll</a></li>
                        <li><a class="dropdown-item" href="<?php echo base_url("Account/logout") ?>">LOG OUT</a></li>

                    </ul>
                </div>
            </div>
        </nav>
    </section>

    <div class="container">

        <section>
            <div class="col-12 pt-3" style="border-bottom: 6px solid #BB0000;">
                <button class="btn btn-primary me-md-2 fs-5 " type="button" style="background-color:#BB0000; color: #FFFFFF; border:none; width:100px;">Profile</button>
            </div>
        </section>

        <section>
            <div class="row justify-content-evenly">
                <div class="col-10 p-3">
                    <div class="card">
                        <div class="card-header fs-5">
                            <b>High school CGPA and English test score</b>
                        </div>

                        <div class="container mt-4 mb-4">
                            <h5><b>Applicants Information</b></h5>
                            <div class="card-body mt-3" style="background-color: #EEEEEE; border-radius: 5px;">

                                <section>
                                    <div class="row">
                                        <div class="col-6">
                                            <b>First name *</b>
                                            <br>
                                            <div class="ms-3 mt-2"> <?php echo $users->firstname ?></div>
                                        </div>
                                        <div class="col-6">
                                            <b>Last name *</b>
                                            <br>
                                            <div class="ms-3 mt-2"> <?php echo $users->lastname ?></div>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <b><?php echo $users->idType ?> *</b>
                                            <br>
                                            <div class="ms-3 mt-2"> <?php echo $users->idCardInput ?></div>
                                        </div>
                                        <div class="col-6">
                                            <b>Date of Birth *</b>
                                            <br>
                                            <div class="ms-3 mt-2">
                                                <?php $birthday = $users->birthday ?>
                                                <?php echo date("d-m-Y", strtotime($birthday)); ?>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <b>Telephone number *</b>
                                            <br>
                                            <div class="ms-3 mt-2"> <?php echo $users->telephonenumber ?></div>
                                        </div>
                                        <div class="col-6">
                                            <b>Address *</b>
                                            <br>
                                            <div class="ms-3 mt-2"> <?php echo $users->address ?></div>
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <div class="row mt-3">
                                        <div class="col-6">
                                            <b>School name *</b>
                                            <br>
                                            <div class="ms-3 mt-2"> <?php echo $users->schoolname ?></div>
                                        </div>
                                        <div class="col-6">
                                            <b>Grade point average (GPA) *</b>
                                            <br>
                                            <div class="ms-3 mt-2"> <?php echo $users->grade ?></div>
                                        </div>
                                    </div>
                                </section>




                            </div>
                        </div>

                        <div class="container mt-4 mb-4">
                            <h5><b>High school CGPA and English test score</b></h5>
                            <div class="card-body mt-3" style="background-color: #EEEEEE; border-radius: 5px;">

                                <section>
                                    <b>1.High school CGPA <br>(Minimum 3.00 CGPA required for admission based on at least 6 semesters of high school)</b>
                                    <div class="row g-3 align-items-center mt-1">
                                        <div class="col-auto">
                                            <label for="inputPassword6" class="col-form-label">CGPA:</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" id="CGPA" class="form-control" placeholder="CGPA">
                                        </div>
                                    </div>
                                </section>

                                <section>
                                    <b>2.English score (Choose only one type)*</b>
                                    <div class="mt-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="engscore_type" value="TU-GET(PBT)" onclick="showContent()">
                                            <label class="form-check-label">TU-GET (PBT)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="engscore_type" value="TU-GET(CBT)" onclick="showContent()">
                                            <label class="form-check-label">TU-GET (CBT)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="engscore_type" value="TOEFL(PBT)" onclick="showContent()">
                                            <label class="form-check-label">TOEFL (PBT)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="engscore_type" value="TOEFL(IBT)" onclick="showContent()">
                                            <label class="form-check-label">TOEFL (IBT)</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="engscore_type" value="IELTS" onclick="showContent()">
                                            <label class="form-check-label">IELTS</label>
                                        </div>
                                    </div>

                                    <div id="TU-GET(PBT)" class="row mt-3 collapse">
                                        <div class="col-auto">
                                            <label for="engscore" class="col-form-label">TU-GET (PBT):</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="engscore" id="tugetInputP" class="form-control" placeholder="TU-GET (PBT)">
                                        </div>

                                    </div>

                                    <div id="TU-GET(CBT)" class="row mt-3 collapse">
                                        <div class=" col-auto ">
                                            <label for="engscore" class="col-form-label">TU-GET (CBT):</label>

                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="engscore" id="tugetInputC" class="form-control" placeholder="TU-GET (CBT)">
                                        </div>

                                    </div>

                                    <div id="TOEFL(PBT)" class="row mt-3 collapse">
                                        <div class="col-auto">
                                            <label for="engscore" class="col-form-label">TOEFL (PBT):</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text"  name="engscore" id="toeflInputP" class="form-control" placeholder="TOEFL (PBT)">
                                        </div>

                                    </div>

                                    <div id="TOEFL(IBT)" class="row mt-3 collapse">
                                        <div class="col-auto">
                                            <label for="engscore" class="col-form-label">TOEFL (IBT):</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="engscore" id="toeflInputI" class="form-control" placeholder="TOEFL (IBT)">
                                        </div>

                                    </div>

                                    <div id="IELTS" class="row collapse mt-3">
                                        <div class="col-auto">
                                            <label for="engscore" class="col-form-label">IELTS:</label>
                                        </div>
                                        <div class="col-auto">
                                            <input type="text" name="engscore" id="ieltsInput" class="form-control" placeholder="IELTS">
                                        </div>

                                    </div>
                                </section>

                                <section>
                                    <div class="mt-3">
                                        <b>3.Upload english test score.*</b>
                                    </div>
                                    <div class="mt-3">
                                        <input class="form-control" type="file" id="resulttest" multiple>
                                    </div>
                                </section>

                                <section>
                                    <div class="mt-3">
                                        <b>4.Upload application documents.*</b>
                                    </div>
                                    <div class="mt-3">
                                        <label class="form-label" style="font-size: 13px;">-A copy of Thai national ID card or a copy Passport.</label>
                                        <input class="form-control form-control-sm" id="copyidcard" type="file">
                                    </div>
                                    <div class="mt-3">
                                        <label class="form-label" style="font-size: 13px;">-A 1-inch color photograph, taken in last 6 months; Use a clear image of your face:Straigh face and do not wear a hat or glasses.</label>
                                        <input class="form-control form-control-sm" id="photocolor" type="file">
                                    </div>
                                    <div class="mt-3 mb-3">
                                        <label class="form-label" style="font-size: 13px;">-High school transcript(if you have other educational document, please combine into a single file to upload.)</label>
                                        <input class="form-control form-control-sm" id="transcript" type="file">
                                    </div>

                                </section>


                            </div>

                            <div class="d-grid gap-2 d-md-flex justify-content-md-center mx-auto">
                                <button class="btn  btn-danger mt-5" id="submit" type="submit" style="width: 150px;" >Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>



    <section>
        <button id="btn-back-to-top" type="button" class="btn btn-danger btn-floating btn-lg" style="position: fixed; bottom: 20px; right: 20px; display: none;">
            <b class="fas fa-arrow-up">TOP</b>
        </button>

        <script>
            let mybutton = document.getElementById("btn-back-to-top");

            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction();
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    mybutton.style.display = "block";
                } else {
                    mybutton.style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            mybutton.addEventListener("click", backToTop);

            function backToTop() {
                document.body.scrollTop = 0; // For Safari
                document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
            }
        </script>


    </section>

    <script>
        function showContent() {
            var selectedRadio = document.querySelector('input[name="engscore_type"]:checked');
            var content1 = document.getElementById('TU-GET(PBT)');
            var content2 = document.getElementById('TU-GET(CBT)');
            var content3 = document.getElementById('TOEFL(PBT)');
            var content4 = document.getElementById('TOEFL(IBT)');
            var content5 = document.getElementById('IELTS');

            if (selectedRadio.value === 'TU-GET(PBT)') {
                content1.classList.add('show');
            } else {
                content1.classList.remove('show');
            }

            if (selectedRadio.value === 'TU-GET(CBT)') {
                content2.classList.add('show');
            } else {
                content2.classList.remove('show');
            }

            if (selectedRadio.value === 'TOEFL(PBT)') {
                content3.classList.add('show');
            } else {
                content3.classList.remove('show');
            }

            if (selectedRadio.value === 'TOEFL(IBT)') {
                content4.classList.add('show');
            } else {
                content4.classList.remove('show');
            }

            if (selectedRadio.value === 'IELTS') {
                content5.classList.add('show');
            } else {
                content5.classList.remove('show');
            }
        }
    </script>

    <script>
        $("#submit").click(function(e) {
            e.preventDefault();

            var formData = new FormData();

            formData.append("cgpa", $("#cgpa").val());
            formData.append("engscore_type", $('input[name="engscore_type"]:checked').attr('id'));

            if ($('#tugetInputP').val() != '') {
                formData.append("engscore", $('#tugetInputP').val());
            } else if ($('#tugetInputC').val() != '') {
                formData.append("engscore", $('#tugetInputC').val());
            } else if ($('#toeflInputP').val() != '') {
                formData.append("engscore", $('#toeflInputP').val());
            } else if ($('#toeflInputI').val() != '') {
                formData.append("engscore", $('#toeflInputI').val());
            } else if ($('#ieltsInput').val() != '') {
                formData.append("engscore", $('#ieltsInput').val());
            }


            var picture_resulttest_files = $("#resulttest")[0].files;
            var picture_copyidcard_files = $("#copyidcard")[0].files;
            var picture_photocolor_files = $("#photocolor")[0].files;
            var picture_transcript_files = $("#transcript")[0].files;
            console.log(picture_resulttest_files);

            if (picture_resulttest_files.length > 0) {
                for (var i = 0; i < picture_resulttest_files.length; i++) {
                    formData.append("resulttest", picture_resulttest_files[0]);
                }
            }

            if (picture_copyidcard_files.length > 0) {
                for (var i = 0; i < picture_copyidcard_files.length; i++) {
                    formData.append("copyidcard", picture_copyidcard_files[0]);
                }
            }

            if (picture_photocolor_files.length > 0) {
                for (var i = 0; i < picture_photocolor_files.length; i++) {
                    formData.append("photocolor", picture_photocolor_files[0]);
                }
            }

            if (picture_transcript_files.length > 0) {
                for (var i = 0; i < picture_transcript_files.length; i++) {
                    formData.append("transcript", picture_transcript_files[0]);
                }
            }


            var send_data = {
                "url": "<?php echo base_url('Account/enroll') ?>",
                "method": "POST",
                "data": formData,
                "contentType": false,
                "processData": false

            }
            console.log(send_data);

            $.ajax(send_data).done(function(response) {
                //console.log(response);
                if (response.code == "0x0000-00000") {
                    $(".alert_modal_response").text(response.message);
                  
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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.6.0.js') ?>"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>