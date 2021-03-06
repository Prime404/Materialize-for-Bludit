<!DOCTYPE html>
<html>
<head>
  <?php include(THEME_DIR_PHP.'head.php'); ?>
</head>

<body>
  <!-- Load Bludit Plugins: Site Body Begin -->
  <?php Theme::plugins('siteBodyBegin'); ?>

  <!-- Navbar -->
  <?php include(THEME_DIR_PHP.'navbar.php'); ?>

  <!-- Content -->
  <section class="section">
  <div class="container">
    <div class="row">
      <!-- Blog Posts -->
      <div class="col l9 s12">
        <?php
        // Bludit content are pages
        // But if you order the content by date
        // These pages works as posts

        // $WHERE_AM_I variable detect where the user is browsing
        // If the user is watching a particular page/post the variable takes the value "page"
        // If the user is watching the frontpage the variable takes the value "home"
        if ($WHERE_AM_I == 'page') {
            include(THEME_DIR_PHP.'page.php');
        } else {
            include(THEME_DIR_PHP.'home.php');
        }
        ?>
      </div>

      <!-- Right Sidebar -->
      <div class="col l3 s12">
        <?php include(THEME_DIR_PHP.'sidebar.php'); ?>
      </div>
    </div>
  </div>
  </section>

  <!-- Footer -->
  <?php include(THEME_DIR_PHP.'footer.php'); ?>

  <!-- Javascript -->
  <?php
      // echo Theme::jquery();
  ?>

  <!-- Load Bludit Plugins: Site Body End -->
  <?php Theme::plugins('siteBodyEnd'); ?>
</body>
</html>
