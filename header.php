<!doctype html>
<html lang="en">
    <head>
        <title><?php bloginfo('name');?><?php wp_title() ?></title>
        <!-- Required meta tags -->
        <link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri();?>/img/Group 1.png">
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"/>

            <!-- Bootstarp Icon CDN -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

            <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">

            <?php wp_head(); ?>
    </head>
<!-- Start Header Section -->
    <body>
      <section class="hero-section border-bottom">
           <div class="container">
             <div class="row">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="http://localhost/psdtowp/home"><img src="<?php echo get_template_directory_uri();?>/img/Group 1.png" class="img-fluid w-100" alt=""></a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                     
                    <ul class="navbar-nav mb-2 mb-lg-0 gap-3 text-dark fw-bold">

                    <?php 
                    
                    wp_nav_menu(array('theme_location'=>'primary-menu')) 
                    
                    ?>
                        </ul>
                        
                      </div>
                    </div>
                  </nav>
            </div>
           </div>
      </section>
        <!-- End Header Section -->
