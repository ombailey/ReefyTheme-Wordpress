<!DOCTYPE html>
<html>

<head>
  <!-- Title of Page -->
  <title>Reef Bailey</title>
  <!-- Linking CSS, Fonts, Etc. -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Qwitcher+Grypen&family=Work+Sans&display=swap" rel="stylesheet" />
  <!-- Meta Info -->
  <meta name="author" content="Omar Bailey" />
  <meta charset="UTF-8" />
  <meta name="description" content="Reef Bailey personal website." />
  <meta name="keywords" content="Reef Bailey, Reef personal website" />
  <meta name="viewport" content="width=device-width, initial scale=1" />
  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/25ee0c3dc1.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>
<nav id="regular-screen" class="header-nav">
  <div class="name">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Sharif-Bailey-Logo.png" alt="Logo of hands" class="Reef_logo" />
    <h1>Reef Bailey</h1>
  </div>
  <?php wp_nav_menu(
    array(
      "theme_location" => "top-menu",
      "menu_class" => "3",
      "fallback_cb" => "false",
      "menu_id" => "1",
      "container_id" => "2",
      "container_class" => "nav-menu",
    )
  ) ?>
</nav>

<div class="mobile-layout">
  <nav id="mobile-header-nav">
    <div class="mobile-name">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Sharif-Bailey-Logo.png" alt="Logo of hands" class="Reef_logo" />
      <h1>Reef Bailey</h1>
    </div>
    <div class="mobile-menu">
      <i id="mobile-logo" class="fa-solid fa-bars" onclick="mobileToggle()"></i>
    </div>
  </nav>
  <?php wp_nav_menu(
    array(
      "theme_location" => "top-menu",
      "menu_class" => "3",
      "fallback_cb" => "false",
      "menu_id" => "1",
      "container_id" => "mobile-screen",
      "container_class" => "mobile-nav-menu",
    )
  ) ?>
</div>

<script>
  // let x = screen.width;
  // let mobile = document.getElementById("mobile-header-nav");
  // let regularScreen = document.getElementById("regular-screen")
  // if (x <= 450) {
  //   mobile.style.display = "flex";
  //   regularScreen.style.display = "none";
  // } else {
  //   mobile.style.display = "none";
  //   regularScreen.style.display = "flex";
  // }

  function mobileToggle() {
    let menu = document.getElementById("mobile-screen");
    if (menu.style.display === "block") {
      menu.style.display = "none";
    } else {
      menu.style.display = "block";
    }
  }
</script>