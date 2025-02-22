<div class="container">
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
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>">Home</a></li>
            <li class="nav-item dropdown git-mega-menu">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">our concerns</a>
                <ul class="dropdown-menu p-3 bg-dark" style="top:75px">
                    <li><a class="dropdown-item" href="<?php echo home_url(); ?>/real-state">Real Estate</a></li>
                    <li><a class="dropdown-item"
                            href="<?php echo home_url(); ?>/construction-buildings-materials">Building Materials</a>
                    </li>
                    <li><a class="dropdown-item" href="<?php echo home_url(); ?>/agro">Essential Agro Commodities</a>
                    </li>
                    <li><a class="dropdown-item" href="<?php echo home_url(); ?>/upcoming-projects">Mega Structure</a></li>
                </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>/about-us">about us</a></li>
        </ul>
        <span class="text-white ms-md-4">
            <button type="button" class="btn btn-outline-white" style="border-radius: 0;"><a class="nav-link" href="#contact">Let’s Connect</a></button>
        </span>
    </div>
</div>
</div>