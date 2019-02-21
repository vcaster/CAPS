<div class="header-top">
    <header>
        <div class="top-head ml-lg-auto text-center">
            <div class="row top-vl">

                <div class="col-md-4">
                    <span>Welcome Back!</span>
                </div>
                <div class="col-md-3 sign-btn">
                    <a  href="<?php echo URLROOT ?>/pages/login">
                            <i class="fas fa-lock"></i> Sign In</a>
                </div>
                <div class="col-md-3 sign-btn">
                    <a  href="<?php echo URLROOT ?>/pages/register">
                            <i class="far fa-user"></i> Register</a>
                </div>
                <div class="search col-md-2">
                    <div class="mobile-nav-button">
                        <button id="trigger-overlay" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                    <!-- open/close -->
                    <div class="overlay overlay-door">
                        <button type="button" class="overlay-close">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </button>

                    </div>
                    <!-- open/close -->
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="logo">
                <h1>
                    <a class="navbar-brand" href="<?php echo URLROOT ?>/pages/index">
                        <i class="fab fa-codepen"></i> Replenish</a>
                </h1>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                        <i class="fas fa-bars"></i>
                    </span>

            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-lg-auto text-center">
                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/OOP_Moonsys/pages/index') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo URLROOT ?>/pages/index">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item  <?php echo ($_SERVER['REQUEST_URI'] == '/OOP_Moonsys/pages/how') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo URLROOT ?>/pages/how">How it works</a>
                    </li>
                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/OOP_Moonsys/pages/employer_single') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo URLROOT ?>/pages/employer_single"><?php echo SITENAME ?></a>
                    </li>

                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/OOP_Moonsys/pages/services') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo URLROOT ?>/pages/services">Services</a>
                    </li>

                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/OOP_Moonsys/pages/contact') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo URLROOT ?>/pages/contact">Contact</a>
                    </li>

                    <li class="nav-item <?php echo ($_SERVER['REQUEST_URI'] == '/OOP_Moonsys/pages/about') ? 'active' : ''; ?>">
                        <a class="nav-link" href="<?php echo URLROOT ?>/pages/about">About</a>
                    </li>

                </ul>

            </div>
        </nav>
    </header>
</div>
