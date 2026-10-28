<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UI Button - Spark Admin Premium Bootstrap 5 Admin Dashboard Template</title>

  <!-- SEO Optimization -->
  <meta name="description" content="UI Button - Spark Admin Premium Bootstrap 5 Admin Dashboard Template">
  <meta name="author" content="Spark Admin Team">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="assets/images/favicon.ico">

  <!-- Local Third-Party Libraries (100% Offline Compatible) -->
  <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/libs/bootstrap-icons/bootstrap-icons.css">
  <link rel="stylesheet" href="assets/libs/apexcharts/apexcharts.css">
  <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">

  <!-- Main Design System & Custom Stylesheet -->
  <link rel="stylesheet" href="assets/css/main.css">
</head>

<body>

  <!-- ==========================================
         START: Sidebar Component
         Highly polished, dark-green navigation
         ========================================== -->
        @include('layouts.sidebar')
  <!-- ==========================================
         END: Sidebar Component
         ========================================== -->


  <!-- ==========================================
         START: Main Content Area
         ========================================== -->
  <div class="main-wrapper">


    <!-- END: Top Navbar Component -->
    @include('layouts.header')
    <!-- START: Page Header Banner -->
    <!-- END: Page Header Banner -->

    <!-- START: Main Components Grid Layout -->
   @yield('content')
    <!-- END: Main Components Grid Layout -->

    <!-- START: Footer Component -->
    @include('layouts.footer')
    <!-- END: Footer Component -->

  </div>
  <!-- ==========================================
         END: Main Content Area
         ========================================== -->

  <!-- Local Third-Party Libraries Script dependencies -->
  <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
  <script src="assets/libs/flatpickr/flatpickr.min.js"></script>

  <!-- Local dashboard interactions controller -->
  <script src="assets/js/dashboard.js"></script>
</body>

</html>
