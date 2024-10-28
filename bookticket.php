<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>AdSlide</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <meta property="og:title" content="Adslide - Event Registration" />
        <meta property="og:image" content="https://ahrefs.com/assets/img/adslide-logo.jpg" />
        <meta property="og:description" content="Register for the Fresher's 2024" />

        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
      if (window.location.href.indexOf("error=invalidURN") !== -1) {
          alert("Incorrect URN");
      }
      // this function is used for options in course year
      function updateYearOptions() {
            // Get the selected course and year elements
            var selectedCourse = document.getElementById("studcourse");
            var yearSelect = document.getElementById("studyear");

            // Clear existing options in the year select
            yearSelect.innerHTML = "";

            // Add options based on the selected course
            if (selectedCourse.value === "BCA" || selectedCourse.value === "BBA") {
                // Options for BCA and BBA(up to 3rd year)
                for (var i = 1; i <= 3; i++) {
                    var option = document.createElement("option");
                    option.text = i + "st Year";
                    option.value = i;
                    yearSelect.add(option);
                }
            } 
            else if (selectedCourse.value === "B.Tech") {
                // Options for B.Tech first year only
                for (var i = 1; i <= 1; i++) {
                    var option = document.createElement("option");
                    option.text = i + "st Year";
                    option.value = i;
                    yearSelect.add(option);
                }
            }
            else if (selectedCourse.value === "MBA" || selectedCourse.value === "MCA") {
                // Options for MBA and MCA
                for (var i = 1; i <= 2; i++) {
                    var option = document.createElement("option");
                    option.text = i + "st Year";
                    option.value = i;
                    yearSelect.add(option);
                }
            }
        }
    </script>
</head>
<body>
    <?php
    include_once('navbar.php');
    ?>

        <div class="container">
            <section id="image-banner"></section>
            <div class="event-text">
                <h4 class="section-heading text-uppercase">About this event:</h4>
                <p>This is our upcoming fresher's event for students of Sunstone 2024.
                We have an evening planned full of games, music, dance and above all, the competition for Mr & Mrs Freshers, all to boost your spirits!
                </p>
            </div>
            <form >

                <div class="form-row">
                <div class="col col-md-6 col-lg-6">
                    <input type="text" name="studurn1" id="studurn" required="" maxlength="16" class="form-control col-md-6" placeholder="URN">
                </div>
                <div class="col col-md-6 col-lg-6">
                    <input type="tel"onkeypress="return onlyNumberKey(event)" maxlength="10" name="studmobile1" required="" class="form-control my-2" placeholder="Mobile Number">
                </div>
                </div>
                <div class="form-row">
                    <div class= "col col-md-6 col-lg-6">
                    <select id="studcourse" name="studcourse1" onchange="updateYearOptions()" required="" class="form-control">
                    <option value="">Select Course</option>
                    <option value="BCA">BCA</option>
                    <option value="BBA">BBA</option>
                    <option value="MBA">MBA</option>
                    <option value="MCA">MCA</option>
                    <option value="B.Tech">B.Tech</option>
                    </select>
                    </div>
                    <div class="col col-md-6 col-lg-6">
                    <select id="studyear" name="studyear1" required="" class="form-control my-2">
                    <option value="">Select Year</option>
                    </select>  
                    </div>
                </div>
                <div class="row price px-2 fs-2">
                <p class="font-weight-bold col col-10 inline" id="price-left">Price:</p>
                <p class="font-weight-bold col col-2 inline text-right" id="price-right">₹300</p>
                </div>


                <div>
                <button type="submit" class="btn btn-warning">Pay Now</button>
                </div>
                
            </form>

            
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script>
      function onlyNumberKey(evt) {
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return false;
          return true;
      }
      const namecheck = document.getElementById("studname");
      namecheck.addEventListener("namecheck", function() {
        const regex = /^[a-zA-Z ]*$/;
        if (!regex.test(namecheck.value)) {
          namecheck.value = namecheck.value.replace(/[^a-zA-Z ]/g, "");
        }
      });
    </script>
    <?php
    include_once('footer.php')
    ?>
</body>
</html>