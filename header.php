<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Index - Kelly Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css?v=1.1" rel="stylesheet">

  <!-- BDSans-Regular betűtípus definíció csak a fejléc számára -->
  <style>
    @font-face {
      font-family: 'BDSans-Regular';
      src: url('assets/fonts/BDSans-Regular.woff2') format('woff2'),
           url('assets/fonts/BDSans-Regular.woff') format('woff');
      font-weight: normal;
      font-style: normal;
      font-display: swap;
    }

    /* Fejléc navigáció betűtípusának felülírása */
    #header #navmenu a,
    #header #navmenu a:focus {
      font-family: 'BDSans-Regular', sans-serif;
    }

    /* Mobil navigáció ikon betűtípusa */
    #header .mobile-nav-toggle {
      font-family: 'BDSans-Regular', sans-serif;
    }

    /* Közösségi linkek és sötét mód gomb betűtípusa */
    #header .header-social-links a,
    #header .theme-toggle {
      font-family: 'BDSans-Regular', sans-serif;
    }
  </style>
</head>

<body class="light-mode">
  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
      <!-- Logo -->
      <div>
        <!-- Logó helye -->
      </div>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="index.php" class="active">Kezdőoldal</a></li>
          <li><a href="about.php">Rólam</a></li>
          <li><a href="services.php">Szolgáltatások</a></li>
          <li><a href="price_list.php">Árlista</a></li>
          <li><a href="gallery.php">Galéria</a></li>
          <li><a href="gyik.php">GyIK</a></li>
          <li><a href="contact.php">Kapcsolat</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links d-flex align-items-center">
        <a href="https://www.tiktok.com/@ritaharaga"><i class="bi bi-tiktok"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100049239237135"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/permanentmakeuprita/"><i class="bi bi-instagram"></i></a>
        <button class="theme-toggle" onclick="toggleTheme()">🌙</button>
      </div>
    </div>
  </header>

  <script>
    // Inicializálja a módot a localStorage alapján
    document.addEventListener('DOMContentLoaded', () => {
      const savedTheme = localStorage.getItem('theme') || 'light-mode';
      document.body.classList.add(savedTheme);
      document.querySelector('.theme-toggle').textContent = savedTheme === 'light-mode' ? '🌙' : '☀️';
    });

    function toggleTheme() {
      const body = document.body;
      const button = document.querySelector('.theme-toggle');
      
      if (body.classList.contains('light-mode')) {
        body.classList.remove('light-mode');
        body.classList.add('dark-mode');
        button.textContent = '☀️';
        localStorage.setItem('theme', 'dark-mode');
      } else {
        body.classList.remove('dark-mode');
        body.classList.add('light-mode');
        button.textContent = '🌙';
        localStorage.setItem('theme', 'light-mode');
      }
    }
  </script>