<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.min.css">
        <link rel="stylesheet" href="/css/app.css">
        <link rel="icon" type="image/svg+xml" href="/img/logo/libreapps/256.svg">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.pkgd.min.js"></script>
        <script type="text/javascript" src="/js/app.js"></script>
        <script>
            $(function () {
                $.material.init(); // Initialize Bootstrap Material effects
            });
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="javascript:void(0)">
                    <img class="logo" src="/img/logo/libreapps/256.svg">
                    LibreApps
                </a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <form class="search-form navbar-form navbar-left">
                    <input class="search-input form-control col-lg-8" placeholder="Search..." type="search">
                </form>
                <ul class="nav navbar-nav">
                    <li><a href="javascript:void(0)">Tags</a></li>
                    <li><a href="javascript:void(0)">Collections</a></li>
                    <li><a href="javascript:void(0)">Help</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown user-menu">
                        <a href="bootstrap-elements.html" data-target="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img class="avatar" src="http://lorempixel.com/64/64/people/1/">
                            Yunhe <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)">Applications</a></li>
                            <li><a href="javascript:void(0)">Profile</a></li>
                            <li><a href="javascript:void(0)">Notification</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)">Log out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        @yield('main')
        
        <footer>
            
        </footer>
    </body>
</html>