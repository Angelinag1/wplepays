<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?> <?php wp_title('|',true,'left'); ?></title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php wp_head(  ) ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-SaPXLF98XkzgxJ/NmwJ/aD60MBaduM4/Gww4yxMbK88Gt0a1YZEtID7S9X0Ku+gO3qNkt/jowdG5sr1e5KO/ew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    </head>
    <body <?php body_class( );?> >

        <header class="sticky-top">
            <!-- BARRE DE MENU -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark row">

                <div class="container navbar-brand">
                    <!-- Image logo -->
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo">
                    </a>

                    <?php wp_nav_menu
                    ( 
                        array(
                            'theme_location' => 'top-menu',
                            'menu_class' => 'top-bar navbar-nav mr-auto'
                        )
                    ); ?>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- BARRE DE RECHERCHE -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="ml-auto">
                        <?= get_search_form(); ?>
                    </div>
                </div>

            </nav>
                
            
        </header>