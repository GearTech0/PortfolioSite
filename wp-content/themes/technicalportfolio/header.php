<html>
  <head>
      <meta charset="utf-8" />
  <title>Portfolio Theme</title>
  <? wp_head(); ?>

</head>
<body>
  <div id="wrapper">
    <section id="header">
      <div class="container-fluid ptfio-header">
        <h1 id="title"> <?php bloginfo('name'); ?></h1>
        <h2><? wp_nav_menu(array(
            'theme_location' => 'primary'
        )); ?></h2>
      </div>
    </section>
