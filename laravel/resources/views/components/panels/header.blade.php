<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" style="width: 10%" href="/"><img src="img/logo.png" alt="" style="width: 60%"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item <?=  ($_SERVER['REQUEST_URI'] == '/') ? 'active' : ''?>"><a class="nav-link" href="/">Главная</a></li>
                        <li class="nav-item <?=  ($_SERVER['REQUEST_URI'] == '/about') ? 'active' : ''?>"><a class="nav-link" href="/about">Обо мне</a></li>
                        <li class="nav-item <?= ($_SERVER['REQUEST_URI'] == '/portfolio') ? 'active' : ''?>"><a class="nav-link" href="/portfolio">Портфолио</a></li>
                        <li class="nav-item <?=  ($_SERVER['REQUEST_URI'] == '/contact') ? 'active' : ''?>"><a class="nav-link" href="/contact">Контакты</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
