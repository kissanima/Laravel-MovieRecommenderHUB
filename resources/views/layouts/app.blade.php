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
    document.addEventListener('DOMContentLoaded', function () {
      const questionContainer = document.getElementById('question-container');
      const occasionContainer = document.getElementById('occasion-container');
      const genreContainer = document.getElementById('genre-container');
      const ageContainer = document.getElementById('age-container');
      const recommendationContainer = document.getElementById('recommendation-container');
    
      const hideContainers = () => {
        [questionContainer, occasionContainer, genreContainer, ageContainer, recommendationContainer]
          .forEach(container => container.style.display = 'none');
      };
    
      const showContainer = (container) => {
        hideContainers();
        container.style.display = 'block';
      };
    
      const clearAndDisplayRecommendations = async (response) => {
        recommendationContainer.innerHTML = '';
    
        try {
          const recommendations = await response.json();
    
          recommendations.forEach(movie => {
            const movieCard = document.createElement('div');
            movieCard.textContent = movie.title; // Customize this based on your movie object structure
            recommendationContainer.appendChild(movieCard);
          });
    
          recommendationContainer.style.display = 'block';
        } catch (error) {
          console.error('Error parsing JSON:', error);
        }
      };
    
      const addClickListenerToShowContainer = (button, container) => {
        button.addEventListener('click', () => showContainer(container));
      };
    
      const addClickListenerToShowRecommendations = (button, genre, age) => {
        button.addEventListener('click', async () => {
          const response = await fetch(`/recommendations?genre=${genre}&age=${age}`);
          clearAndDisplayRecommendations(response);
        });
      };
    
      // Attach event listeners
      addClickListenerToShowContainer(document.getElementById('happy-button'), occasionContainer);
      addClickListenerToShowContainer(document.getElementById('neutral-button'), occasionContainer);
      addClickListenerToShowContainer(document.getElementById('sad-button'), occasionContainer);
    
      addClickListenerToShowContainer(document.getElementById('occasion-alone'), genreContainer);
      addClickListenerToShowContainer(document.getElementById('occasion-date'), genreContainer);
      addClickListenerToShowContainer(document.getElementById('occasion-friends'), genreContainer);
      addClickListenerToShowContainer(document.getElementById('occasion-partner'), genreContainer);
      addClickListenerToShowContainer(document.getElementById('occasion-family'), genreContainer);
    
      addClickListenerToShowContainer(document.getElementById('genre-action'), ageContainer);
      addClickListenerToShowContainer(document.getElementById('genre-comedy'), ageContainer);
      addClickListenerToShowContainer(document.getElementById('genre-romantic'), ageContainer);
    
      addClickListenerToShowRecommendations(document.getElementById('genre-all'), 'all', 'any');
    
      addClickListenerToShowRecommendations(document.getElementById('age-any'), 'all', 'any');
      addClickListenerToShowRecommendations(document.getElementById('age-3'), 'all', '3');
      addClickListenerToShowRecommendations(document.getElementById('age-5'), 'all', '5');
      addClickListenerToShowRecommendations(document.getElementById('age-10'), 'all', '10');
      addClickListenerToShowRecommendations(document.getElementById('age-20'), 'all', '20');
    });
    </script>
    
  
  
  

<style>

    .row {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }
  
    #question-container {
      margin-top: 1px;
    }

    .main {
      flex-grow: 1;
    }
  </style>

</body>

</html>