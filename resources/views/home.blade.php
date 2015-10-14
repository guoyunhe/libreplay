<!DOCTYPE html>
<html>
    <head>
        <title>LibreApps</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.min.css">
        <link rel="stylesheet" href="css/header.css">
        <style>

        </style>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/ripples.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.1.1/flickity.pkgd.min.js"></script>
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
                <a class="navbar-brand" href="javascript:void(0)">LibreApps</a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <form class="navbar-form navbar-left">
                    <input class="form-control col-lg-8" placeholder="Search..." type="text">
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

        <h2 class="section-header">
            <div class="container-fluid">
                New &amp; Updated
                <a class="btn btn-info btn-sm pull-right">View more</a>
            </div>
        </h2>

        <div class="app-list js-flickity"
             data-flickity-options='{"freeScroll": true, "wrapAround": true, "pageDots": false}'>
            <a class="app panel">
                <img class="icon" src="img/icon/freecad.png">
                <div class="name">FreeCAD</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/digikam.png">
                <div class="name">digiKam</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/amarok.png">
                <div class="name">Amarok</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/kdenlive.png">
                <div class="name">Kdenlive</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/audacity.png">
                <div class="name">Audacity</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/krita.png">
                <div class="name">Krita</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/netbeans.png">
                <div class="name">NetBeans</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/scilab.png">
                <div class="name">Scilab</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/wine.png">
                <div class="name">Wine</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/virtualbox.png">
                <div class="name">VirtualBox</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/libreoffice.png">
                <div class="name">LibreOffice</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/firefox.png">
                <div class="name">Firefox</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/transmission.png">
                <div class="name">Transmission</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
        </div>

        <h2 class="section-header">
            <div class="container-fluid">
                Top Rated
                <a class="btn btn-info btn-sm pull-right">View more</a>
            </div>
        </h2>

        <div class="app-list js-flickity"
             data-flickity-options='{"freeScroll": true, "wrapAround": true, "pageDots": false}'>
            <a class="app panel">
                <img class="icon" src="img/icon/blender.png">
                <div class="name">Blender</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/gimp.png">
                <div class="name">GIMP</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/inkscape.png">
                <div class="name">Inkscape</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/calibre.png">
                <div class="name">calibre</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/vlc.png">
                <div class="name">VLC</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/eclipse.png">
                <div class="name">Eclipse</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/octave.png">
                <div class="name">GNU Octave</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/telegram.png">
                <div class="name">Telegram</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/owncloud.png">
                <div class="name">ownCloud</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/scribus.png">
                <div class="name">Scribus</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/librecad.png">
                <div class="name">LibreCAD</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/filezilla.png">
                <div class="name">Filezilla</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
            <a class="app panel">
                <img class="icon" src="img/icon/kile.png">
                <div class="name">Kile</div>
                <div class="rate">
                    <div class="rate-background">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                    <div class="rate-value">
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                        <i class="mdi-action-grade"></i>
                    </div>
                </div>
            </a>
        </div>


        <div class="intro">
            <div class="container">
                <h1>The Power of Freedom</h1>
                <p>
                    LibreApps is the great collection of pure free/libre software applications for your favorite
                    GNU/Linux operating system.
                </p>
                <p>
                    19,292 FOSS applications in one place
                </p>
                <p>
                    98,076 reviews from 18,802 users
                </p>
                <p>
                    <a class="btn btn-primary btn-lg">Get The App</a>
                    <a class="btn btn-default btn-lg">What's free software?</a>
                </p>
            </div>
        </div>

        <h2 class="section-header">
            <div class="container-fluid">
                Featured Screenshots
            </div>
        </h2>
        <div  class="gallery js-flickity"
              data-flickity-options='{ "imagesLoaded": true, "percentPosition": false, "wrapAround": true, "pageDots": false }'>
            <a class="item">
                <div class="float">
                    <img class="icon" src="img/icon/gimp.png"/>
                    <span class="text">
                        <span class="name">GIMP</span>
                        <span class="desc">Image retouching and editing, free-form drawing, resizing, cropping and more...</span>
                    </span>
                </div>
                <img class="screenshot" src="img/screenshot/gimp.png"/>
            </a>
            <a class="item">
                <div class="float">
                    <img class="icon" src="img/icon/freecad.png"/>
                    <span class="text">
                        <span class="name">FreeCAD</span>
                        <span class="desc">An open-source parametric 3D CAD modeler</span>
                    </span>
                </div>
                <img class="screenshot" src="img/screenshot/freecad.jpg"/>
            </a>
            <a class="item">
                <div class="float">
                    <img class="icon" src="img/icon/inkscape.png"/>
                    <span class="text">
                        <span class="name">Inkscape</span>
                        <span class="desc">Professional vector graphics editor.</span>
                    </span>
                </div>
                <img class="screenshot" src="img/screenshot/inkscape.png"/>
            </a>
            <a class="item">
                <div class="float">
                    <img class="icon" src="img/icon/calibre.png"/>
                    <span class="text">
                        <span class="name">calibre</span>
                        <span class="desc">The one stop solution for all your e-book needs. Comprehensive e-book software.</span>
                    </span>
                </div>
                <img class="screenshot" src="img/screenshot/calibre.png"/>
            </a>
            <a class="item">
                <div class="float">
                    <img class="icon" src="img/icon/blender.png"/>
                    <span class="text">
                        <span class="name">Blender</span>
                        <span class="desc">The open source 3D graphics and animation software.</span>
                    </span>
                </div>
                <img class="screenshot" src="img/screenshot/blender.jpg"/>
            </a>
            <a class="item">
                <div class="float">
                    <img class="icon" src="img/icon/libreoffice.png"/>
                    <span class="text">
                        <span class="name">LibreOffice</span>
                        <span class="desc">The office suite the community has been dreaming for years.</span>
                    </span>
                </div>
                <img class="screenshot" src="img/screenshot/libreoffice.png"/>
            </a>
            <a class="item">
                <div class="float">
                    <img class="icon" src="img/icon/eclipse.png"/>
                    <span class="text">
                        <span class="name">Eclipse</span>
                        <span class="desc">A powerful IDE. A universal toolset for development.</span>
                    </span>
                </div>
                <img class="screenshot" src="img/screenshot/eclipse.png"/>
            </a>
        </div>

        <h2 class="section-header">
            <div class="container-fluid">
                Upvoted Reviews
            </div>
        </h2>

        <div class="js-flickity"
             data-flickity-options='{ "imagesLoaded": true, "percentPosition": false, "wrapAround": true, "pageDots": false }'>
            <div class="review">
                <div class="panel">
                    <div class="panel-body">
                        <img class="icon" src="img/icon/libreoffice.png">
                        <span class="name">LibreOffice</span>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <p class="header">
                            <img class="avatar" src="http://lorempixel.com/64/64/people/1/">
                            <span class="text">
                                <span class="username">Lisa</span>
                                <span class="rate">
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                </span>
                                <span class="date">
                                    23 Sep 2015
                                </span>
                            </span>
                            <span class="vote">
                                <i class="mdi-action-thumbs-up-down"></i> 199
                            </span>
                        </p>
                        <p>
                            Aliquam eget lacinia mauris. Maecenas venenatis hendrerit nunc et condimentum. Suspendisse cursus augue vitae enim placerat, at mattis magna posuere. Etiam ultrices lobortis feugiat. Quisque tincidunt mauris at lorem feugiat ullamcorper. Suspendisse blandit augue ligula, vitae volutpat sem mollis id. Fusce id euismod tellus. Nulla facilisi. Morbi quis interdum tellus, nec mollis purus. Pellentesque risus neque, imperdiet at tempor a, imperdiet nec eros. Aliquam vitae congue diam, ut consectetur arcu. Mauris interdum vitae tortor non laoreet. Curabitur facilisis arcu eget felis dignissim interdum. In hac habitasse platea dictumst. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="review">
                <div class="panel">
                    <div class="panel-body">
                        <img class="icon" src="img/icon/telegram.png">
                        <span class="name">Telegram</span>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <p class="header">
                            <img class="avatar" src="http://lorempixel.com/64/64/people/2/">
                            <span class="text">
                                <span class="username">BoomV5</span>
                                <span class="rate">
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                </span>
                                <span class="date">
                                    23 Sep 2015
                                </span>
                            </span>
                            <span class="vote">
                                <i class="mdi-action-thumbs-up-down"></i> 199
                            </span>
                        </p>
                        <p>
                            Morbi quis nisi sed est rhoncus elementum consectetur id lorem. Proin id orci dapibus risus varius finibus. Morbi sit amet eros eu mi semper posuere. Maecenas viverra, metus ac hendrerit pellentesque, augue risus egestas turpis, at posuere neque odio ac ipsum. Curabitur vel eros id nulla sollicitudin posuere. Praesent odio elit, ullamcorper nec eros aliquam, ultricies dignissim diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras eu nisi ornare, consectetur enim at, eleifend massa. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="review">
                <div class="panel">
                    <div class="panel-body">
                        <img class="icon" src="img/icon/scilab.png">
                        <span class="name">Scilab</span>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <p class="header">
                            <img class="avatar" src="http://lorempixel.com/64/64/people/3/">
                            <span class="text">
                                <span class="username">Kai</span>
                                <span class="rate">
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                </span>
                                <span class="date">
                                    23 Sep 2015
                                </span>
                            </span>
                            <span class="vote">
                                <i class="mdi-action-thumbs-up-down"></i> 199
                            </span>
                        </p>
                        <p>
                            Maecenas eget ligula diam. Aliquam sed purus vel felis hendrerit euismod. Nulla sit amet erat ipsum. Aliquam venenatis elementum tellus, id iaculis diam elementum non. Fusce elementum lectus ultrices, iaculis justo vitae, ultrices lectus. Integer sagittis orci non imperdiet imperdiet. Nam erat mi, pharetra at elit eu, sollicitudin convallis ante. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="review">
                <div class="panel">
                    <div class="panel-body">
                        <img class="icon" src="img/icon/blender.png">
                        <span class="name">Blender</span>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <p class="header">
                            <img class="avatar" src="http://lorempixel.com/64/64/people/4/">
                            <span class="text">
                                <span class="username">Sand Tiger</span>
                                <span class="rate">
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                </span>
                                <span class="date">
                                    23 Sep 2015
                                </span>
                            </span>
                            <span class="vote">
                                <i class="mdi-action-thumbs-up-down"></i> 199
                            </span>
                        </p>
                        <p>
                            Mauris volutpat tortor neque, vel luctus metus elementum vel. Mauris lacinia laoreet nunc, vitae sollicitudin mauris faucibus sagittis. Cras pellentesque scelerisque elementum. Nulla vel posuere nunc, quis consectetur dui. Pellentesque ut ullamcorper risus. Sed sodales ipsum sit amet augue rhoncus vehicula. Mauris vestibulum vulputate tellus nec maximus. Sed in tempor risus. In hac habitasse platea dictumst. Sed magna quam, lobortis ac efficitur sit amet, congue eu elit. Cras faucibus faucibus mi, sit amet eleifend ante mollis at. Pellentesque vitae aliquam dolor, sed dignissim nisl. Donec mollis, libero quis ultricies tincidunt, tellus metus aliquet odio, eu feugiat sapien purus id libero. Proin congue egestas dolor eget euismod. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="review">
                <div class="panel">
                    <div class="panel-body">
                        <img class="icon" src="img/icon/gimp.png">
                        <span class="name">GIMP</span>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <p class="header">
                            <img class="avatar" src="http://lorempixel.com/64/64/people/5/">
                            <span class="text">
                                <span class="username">Mono</span>
                                <span class="rate">
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                </span>
                                <span class="date">
                                    23 Sep 2015
                                </span>
                            </span>
                            <span class="vote">
                                <i class="mdi-action-thumbs-up-down"></i> 199
                            </span>
                        </p>
                        <p>
                            Duis tempus nisi pharetra, pretium erat sed, placerat nunc. Integer tincidunt odio tincidunt massa finibus vehicula. Nulla aliquam neque at nisl molestie ultrices. Maecenas fermentum euismod eleifend. Integer et aliquam tellus, sed condimentum sem. Aliquam ac ante sapien. Maecenas commodo sem id condimentum maximus. Phasellus venenatis turpis laoreet erat dapibus aliquet. 
                        </p>
                    </div>
                </div>
            </div>

            <div class="review">
                <div class="panel">
                    <div class="panel-body">
                        <img class="icon" src="img/icon/vlc.png">
                        <span class="name">VLC</span>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-body">
                        <p class="header">
                            <img class="avatar" src="http://lorempixel.com/64/64/people/7/">
                            <span class="text">
                                <span class="username">Ninja</span>
                                <span class="rate">
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                    <i class="mdi-action-grade"></i>
                                </span>
                                <span class="date">
                                    23 Sep 2015
                                </span>
                            </span>
                            <span class="vote">
                                <i class="mdi-action-thumbs-up-down"></i> 199
                            </span>
                        </p>
                        <p>
                            Sed eleifend arcu et eros fringilla, sit amet molestie massa cursus. Curabitur finibus posuere enim, in dapibus urna interdum tincidunt. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus urna nisi, ullamcorper quis fringilla in, posuere ut nisi. Phasellus hendrerit quam eros, interdum laoreet ante placerat id. Nulla scelerisque purus id mauris ultrices, non pharetra metus finibus. Praesent pulvinar imperdiet arcu quis mattis. 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="intro platform">
            <img class="logo" src="img/logo/gnu.png">
            <img class="logo" src="img/logo/linux.png">
            <img class="logo" src="img/logo/kde.png">
            <img class="logo" src="img/logo/gnome.png">
            <img class="logo" src="img/logo/archlinux.png">
            <img class="logo" src="img/logo/centos.png">
            <img class="logo" src="img/logo/debian.png">
            <img class="logo" src="img/logo/fedora.png">
            <img class="logo" src="img/logo/opensuse.png">
            <img class="logo" src="img/logo/ubuntu.png">
        </div>

    </body>
</html>