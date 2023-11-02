<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MovieRecommenderHUB</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.jpg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


    
</head>

<body>

    @include('layouts._header')

    @yield('content')
    @include('layouts._sidebar')

    @include('layouts._footer')








    

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <script>
    // JavaScript to handle button clicks and form display
    document.addEventListener("DOMContentLoaded", function () {
      const questionContainer = document.getElementById("question-container");
      const responseForm = document.getElementById("response-form");
  
      const happyButton = document.getElementById("happy-button");
      const neutralButton = document.getElementById("neutral-button");
      const sadButton = document.getElementById("sad-button");
  
      // Function to show the response form
      function showResponseForm() {
        questionContainer.style.display = "none";
        responseForm.style.display = "block";
      }
  
      // Event listeners for button clicks
      happyButton.addEventListener("click", showResponseForm);
      neutralButton.addEventListener("click", showResponseForm);
      sadButton.addEventListener("click", showResponseForm);
    });
  </script>

<style>
    /* Add this CSS to center the elements and adjust the top margin */
    .row {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  
    #question-container {
      margin-top: 1px; /* Adjust the top margin as needed */
    }

    .main {
      flex-grow: 1;
    }
  </style>

</body>

</html>