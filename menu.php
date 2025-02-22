
    <div class="container">
        <!-- <a class="navbar-brand" href="#page-top"><img class="logo" src="<?php echo get_template_directory_uri() ?>/images/logo-icon.png" alt="..." /></a> -->
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img class="logo" src="<?php echo get_theme_mod('logo_image') ?>" alt="logo">
        </a>
        <button class="navbar-toggler text-white border border-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fa fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                 <li class="nav-item"><a class="nav-link" href="https://tstwhitehouseltd.com">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="https://tstwhitehouseltd.com/why-us/">Why Us</a></li>
                <!--<li class="nav-item"><a class="nav-link" href="https://tstwhitehouseltd.com/about-us/">About Us</a></li>-->
                <!--<li class="nav-item dropdown git-mega-menu">-->
                <!--    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Products</a>-->
                <!--    <ul class="dropdown-menu">-->
                <!--        <li><a class="dropdown-item" href="https://tstwhitehouseltd.com/construction-buildings-materials/">Construction & Buildings Materials</a>-->
                <!--        </li>-->
                <!--        <li><a class="dropdown-item" href="https://tstwhitehouseltd.com/agro/">Agro</a></li>-->
                <!--    </ul>-->
                <!--</li>-->
                <li class="nav-item"><a class="nav-link" href="https://tstwhitehouseltd.com/our-projects">Our Projects</a></li>
            </ul>
            <span class="navbar-text text-white ms-md-4">
                <img src="<?php echo get_template_directory_uri() ?>/images/phone-icon.png" alt="">
                <?php echo get_theme_mod('header_contact_number') ?>
            </span>
        </div>
    </div>
