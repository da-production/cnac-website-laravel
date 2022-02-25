<!DOCTYPE html>

<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="CAISSE NATIONALE ASSURANCE CHÖMAGE, assurance chômage, prestations, indemnités, dispositif de soutien, création d'activité, réinsertion, formation reconversion, accompagnement, emploi, 35 50 ans, recherche emploi" name="keywords">
    <title>CNAC</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="{{ asset('assets/templates/landing/images/logo-cnac.png') }}" rel="shortcut icon" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    {{-- <link href="https://cdn.plyr.io/1.6.13/plyr.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/templates/landing/css/style.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/templates/landing/css/parcours.css')}} ">
</head>
<body class="palette-1">
    <div class="container-fluid position-fixed">
        <div class="row">
            <div class="col-4 lines ">
                <div class="row">
                    <div class="col-2 lines green"></div>
                    <div class="col-2 lines white"></div>
                    <div class="col-2 lines red"></div>
                    <div class="col-2 lines green"></div>
                    <div class="col-2 lines white"></div>
                    <div class="col-2 lines red"></div>
                </div>
            </div>
            <div class="col-4 lines ">
                <div class="row">
                    <div class="col-2 lines green"></div>
                    <div class="col-2 lines white"></div>
                    <div class="col-2 lines red"></div>
                    <div class="col-2 lines green"></div>
                    <div class="col-2 lines white"></div>
                    <div class="col-2 lines red"></div>
                </div>
            </div>
            <div class="col-4 lines ">
                <div class="row">
                    <div class="col-2 lines green"></div>
                    <div class="col-2 lines white"></div>
                    <div class="col-2 lines red"></div>
                    <div class="col-2 lines green"></div>
                    <div class="col-2 lines white"></div>
                    <div class="col-2 lines red"></div>
                </div>
            </div>
        </div>
    </div>

    <ul id="sticky-socials">
        <li class="facebook"><a href="#">facebook</a><i class="fab fa-facebook"></i></li>
        {{-- <li class="github"><a href="#">github</a><i class="fa fa-github"></i></li> --}}
        <li class="instagram"><a href="#">instagram</a><i class="fab fa-instagram"></i></li>
        <li class="linkedin"><a href="#">linkedin</a><i class="fab fa-linkedin"></i></li>
        {{-- @*<li class="pinterest"><a href="#">pinterest</a><i class="fa fa-pinterest"></i></li>*@ --}}
        <li class="twitter"><a href="#">twitter</a><i class="fab fa-twitter"></i></li>
        {{-- @*<li class="vimeo"><a href="#">vimeo</a><i class="fa fa-vimeo"></i></li>*@ --}}
        <li class="youtube"><a href="#">youtube</a><i class="fab fa-youtube"></i></li>
    </ul>
    <form runat="server">
        <div class="popup_container">
            <div class="display_flex">
                <div class="popup_content animated">
                    <div class="popup_body  ">
                        <img src="{{ asset('assets/templates/landing/images/ecnac.jpg') }}" alt="">
                        <a href="javascript" class="big-btn clear_popup"></a>
                        <a href="https://play.google.com/store/apps/details?id=dz.cnac.ecnac" target="_blank" class="big-btn"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="preloader">
                <img src="{{ asset('assets/templates/landing/images/preloader.png') }}">
                <div class="spinners"><span class="ouro"><span class="left"><span class="anim"></span></span><span class="right"><span class="anim"></span></span></span></div>
            </div>
            <!-- Starting Top Header-->
            <div class="header top-header" id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            {{-- <ul class="social-medias">
                                <li><a href="http://192.168.5.15/public/fr/"><img src="{{ asset('assets/templates/landing/images/icons/fb_svg_icon.svg') }}"> </a></li>
                                <li><a href="http://192.168.5.15/public/fr/"><img src="{{ asset('assets/templates/landing/images/icons/twitter_svg_icon.svg') }}"> </a></li>
                                <li><a href="http://192.168.5.15/public/fr/"><img src="{{ asset('assets/templates/landing/images/icons/google_plus_svg_icon.svg') }}"> </a></li>
                                <li><a href="http://192.168.5.15/public/fr/"><img src="{{ asset('assets/templates/landing/images/icons/youtube_svg_icon.svg') }}"> </a></li>

                            </ul> --}}
                            
                        </div>
                        <div class="col-md-6  col-sm-6">
                            <ul class="lang">
                                <li><i>Langue : </i></li>
                                <li><a href="http://192.168.5.15/public/fr">Français</a></li>
                                <li> | </li>
                                <li><a href="http://192.168.5.15/public/ar" class="cairo-right">العربية</a></li>
                                {{-- <li><div class="gcse-search"></div></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Header-->
            <!-- Banner starting-->
            <div class="bannerContainer">
                <div class="container" id="banner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center"><img src="{{ asset('assets/templates/landing/images/header.jpg') }}" width="100%" style="width: 100% !important;" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner-->
            <!-- Starting Main Header-->
            <header class="main-header">
                <div class="main-box">
                    <div class="auto-container-2">
                        <div class="nav-outer clearfix">
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon flaticon-menu-button"></span></button>
                                </div>
                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="menu-logo"><a href="javascript:void(0)"><img src="{{ asset('assets/templates/landing/images/logo-cnac.png') }}" alt="Alternate Text" /></a></li>
                                        <li class="current"><a href="">Accueil</a></li>
                                        <li class="current dropdown">
                                            <a href="javascript:void(0)">Présentation</a>
                                            <ul>
                                                {{-- <li><a href="http://192.168.5.15/public/fr/discours-dg">Lettre du Directeur Général</a></li> --}}
                                                <li><a href="">Qui sommes-nous ?</a></li>
                                                <li><a href="">Mot du Directeur Général</a></li>
                                                <li><a href="">Textes réglementaires</a></li>
                                                <li><a href="">Organisation</a></li>
                                            </ul>
                                        </li>
                                        <li class="current dropdown">
                                            <a href="javascript:void(0)">Missions de la CNAC</a>
                                            <ul>
                                                <li><a href="">Regime d'Assurance Chômage</a></li>
                                                <li><a href="">Dispositif 30-55 ans</a></li>
                                                <li><a href="">Mesures d'encouragement d'Aide à l'Emploi</a></li>
                                            </ul>
                                        </li>
                                        <li class="current dropdown">
                                            <a href="javascript:void(0)">E-Services</a>
                                            <ul>
                                                <li><a href="#services">Regime d'Assurance Chômage</a></li>
                                                <li><a href="#services">Dispositif 30-55 ans</a></li>
                                                <li><a href="#services">Mesures d'encouragement d'Aide à l'Emploi</a></li>
                                            </ul>
                                        </li>
                                        {{-- <li class="current dropdown">
                                            <a href="javascript:void(0)">ESPACE USAGERS</a>
                                            <ul>
                                                <li><a href="@Url.Action("PromoteurInfosUtiles", "Fr")">Promoteur</a></li>
                                                <li><a href="@Url.Action("AllocataireInfosUtiles", "Fr")">Allocataire</a></li>
                                                <li><a href="@Url.Action("EmployeurInfosUtiles", "Fr")">Employeur</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="current">
                                            <a href="">Autres Services</a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Starting Mobile-->
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                    <nav class="menu-box">
                        <div class="nav-logo"><a href="http://192.168.5.15/public/fr/"><img src="@Url.Content("assets/templates/landing/images/logo.png")" alt="" title=""> </a></div>
                        <ul class="navigation clearfix"> </ul>
                    </nav>
                </div>
                <!-- Ending Mobile -->
            </header>

            @yield('content')
            <!-- ending Main Header-->
            <section id="footer"></section>
            <div class="footer-area">
                <div class="white-bg-footer footer-widget py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="foot-title">
                                    <h3>Presentation</h3>
                                </div>
                                <div class="foot-content">
                                    <ul>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Qui sommes nous ?</a></li>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Mot du Directeur Général </a></li>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Textes réglementaires</a></li>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Organisation</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="foot-title">
                                    <h3>Services en ligne</h3>
                                </div>
                                <div class="foot-content">
                                    <ul>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Regime d'Assurance Chômage</a></li>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Dispositif 30-55 ans</a></li>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Mesures d'encouragement d'Aide à l'Emploi</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="foot-title">
                                    <h3>liens Utiles</h3>
                                </div>
                                <div class="foot-content">
                                    <ul>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Partenaires</a></li>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Organismes Sous Tutelle</a></li>
                                    </ul>
                                </div>
                            </div>
                            {{-- <div class="col-md-3">
                                <div class="foot-title">
                                    <h3>Espace Usagers</h3>
                                </div>
                                <div class="foot-content">
                                    <ul>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Promoteur: Informations utiles </a></li>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Promoteur: Services en ligne </a></li>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Allocataire: Informations utiles </a></li>
                                        <li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i> Employeur: Informations utiles </a></li>
                                    </ul>
                                </div>
                            </div> --}}
                            <div class="col-md-3">
                                <a class="twitter-timeline" data-width="255" data-height="300" data-theme="dark" href="https://twitter.com/CNAC_DG?ref_src=twsrc%5Etfw">Tweets CNAC</a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                            </div>
                            {{-- <div class="col-md-3 gallerie">
                                <div class="foot-title">
                                    <h3>CNAC Radio</h3>
                                </div>
                                <div class="foot-content">
                                    <div class="playlist">
                                        <div class="plyr">
                                            <audio controls></audio>
                                        </div>
                                        <ul class='playlist--list'>
                                            <li data-id="0">
                                                <div class="track-info">
                                                    <a class="play-track" data-audio="https://mymediaelements.github.io/mejs-player/audio/Rain.mp3">Rain (Amsterdon)</a><span class="artist">Akcent</span>
                                                </div>
                                            </li>
                                            <li data-id="1">
                                                <div class="track-info">
                                                    <a class="play-track" data-audio="https://mymediaelements.github.io/mejs-player/audio/Incomplete.mp3">Incomplete</a><span class="artist">Backstreet Boys</span>
                                                </div>
                                            </li>
                                            <li data-id="2">
                                                <div class="track-info">
                                                    <a class="play-track" data-audio="https://mymediaelements.github.io//mejs-player/audio/Despacito.mp3">Despacito</a><span class="artist"> Luis Fonsi - Daddy Yankee</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div style="display: none;">
                                        <svg xmlns="http://www.w3.org/2000/svg">
                                            <symbol id="plyr-captions-off" viewBox="0 0 18 18"><path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd" fill-opacity=".5" /></symbol>
                                            <symbol id="plyr-captions-on" viewBox="0 0 18 18">
                                                <path d="M1 1c-.6 0-1 .4-1 1v11c0 .6.4 1 1 1h4.6l2.7 2.7c.2.2.4.3.7.3.3 0 .5-.1.7-.3l2.7-2.7H17c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1H1zm4.52 10.15c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41C8.47 4.96 7.46 3.76 5.5 3.76c-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69zm7.57 0c1.99 0 3.01-1.32 3.28-2.41l-1.29-.39c-.19.66-.78 1.45-1.99 1.45-1.14 0-2.2-.83-2.2-2.34 0-1.61 1.12-2.37 2.18-2.37 1.23 0 1.78.75 1.95 1.43l1.3-.41c-.28-1.15-1.29-2.35-3.25-2.35-1.9 0-3.61 1.44-3.61 3.7 0 2.26 1.65 3.69 3.63 3.69z" fill-rule="evenodd" />

                                            </symbol>
                                            <symbol id="plyr-enter-fullscreen" viewBox="0 0 18 18"><path d="M10 3h3.6l-4 4L11 8.4l4-4V8h2V1h-7zM7 9.6l-4 4V10H1v7h7v-2H4.4l4-4z" /></symbol>
                                            <symbol id="plyr-exit-fullscreen" viewBox="0 0 18 18"><path d="M1 12h3.6l-4 4L2 17.4l4-4V17h2v-7H1zM16 .6l-4 4V1h-2v7h7V6h-3.6l4-4z" /></symbol>
                                            <symbol id="plyr-fast-forward" viewBox="0 0 18 18"><path d="M7.875 7.171L0 1v16l7.875-6.171V17L18 9 7.875 1z" /></symbol>
                                            <symbol id="plyr-muted" viewBox="0 0 18 18">
                                                <path d="M12.4 12.5l2.1-2.1 2.1 2.1 1.4-1.4L15.9 9 18 6.9l-1.4-1.4-2.1 2.1-2.1-2.1L11 6.9 13.1 9 11 11.1zM3.786 6.008H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z" />
                                            </symbol>
                                            <symbol id="plyr-pause" viewBox="0 0 18 18"><path d="M6 1H3c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1zM12 1c-.6 0-1 .4-1 1v14c0 .6.4 1 1 1h3c.6 0 1-.4 1-1V2c0-.6-.4-1-1-1h-3z" /></symbol>
                                            <symbol id="plyr-play" viewBox="0 0 18 18"><path d="M15.562 8.1L3.87.225C3.052-.337 2 .225 2 1.125v15.75c0 .9 1.052 1.462 1.87.9L15.563 9.9c.584-.45.584-1.35 0-1.8z" /></symbol>
                                            <symbol id="plyr-restart" viewBox="0 0 18 18"><path d="M9.7 1.2l.7 6.4 2.1-2.1c1.9 1.9 1.9 5.1 0 7-.9 1-2.2 1.5-3.5 1.5-1.3 0-2.6-.5-3.5-1.5-1.9-1.9-1.9-5.1 0-7 .6-.6 1.4-1.1 2.3-1.3l-.6-1.9C6 2.6 4.9 3.2 4 4.1 1.3 6.8 1.3 11.2 4 14c1.3 1.3 3.1 2 4.9 2 1.9 0 3.6-.7 4.9-2 2.7-2.7 2.7-7.1 0-9.9L16 1.9l-6.3-.7z" /></symbol>
                                            <symbol id="plyr-rewind" viewBox="0 0 18 18"><path d="M10.125 1L0 9l10.125 8v-6.171L18 17V1l-7.875 6.171z" /></symbol>
                                            <symbol id="plyr-volume" viewBox="0 0 18 18"><path d="M15.6 3.3c-.4-.4-1-.4-1.4 0-.4.4-.4 1 0 1.4C15.4 5.9 16 7.4 16 9c0 1.6-.6 3.1-1.8 4.3-.4.4-.4 1 0 1.4.2.2.5.3.7.3.3 0 .5-.1.7-.3C17.1 13.2 18 11.2 18 9s-.9-4.2-2.4-5.7z" /><path d="M11.282 5.282a.909.909 0 0 0 0 1.316c.735.735.995 1.458.995 2.402 0 .936-.425 1.917-.995 2.487a.909.909 0 0 0 0 1.316c.145.145.636.262 1.018.156a.725.725 0 0 0 .298-.156C13.773 11.733 14.13 10.16 14.13 9c0-.17-.002-.34-.011-.51-.053-.992-.319-2.005-1.522-3.208a.909.909 0 0 0-1.316 0zM3.786 6.008H.714C.286 6.008 0 6.31 0 6.76v4.512c0 .452.286.752.714.752h3.072l4.071 3.858c.5.3 1.143 0 1.143-.602V2.752c0-.601-.643-.977-1.143-.601L3.786 6.008z" /></symbol>
                                        </svg>
                                    </div>
                                </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="ts-footer-social text-center mb-30">
                                {{-- <ul>
                                    <li><a href="https://www.facebook.com/cnac.directiongenerale" target="_blank"><i class="fab fa-facebook"></i> </a></li>
                                    <li><a href="https://twitter.com/CNAC3" target="_blank"><i class="fab fa-twitter"></i> </a></li>
                                    <li><a href="@Url.Action("Index", "Fr")"><i class="fab fa-google-plus"></i> </a></li>
                                    <li><a href="@Url.Action("Index", "Fr")"><i class="fab fa-linkedin"></i> </a></li>
                                    <li><a href="@Url.Action("Index", "Fr")"><i class="fab fa-instagram"></i> </a></li>
                                </ul> --}}
                                <ul class="glossy">
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div><br>
                            <div class="footer-menu text-center mb-25">
                                <ul>
                                    <li><a href="">Accueil</a></li>
                                    <li><a href="">Questions Réponses</a></li>
                                    <li><a href="">SiteMap</a></li>
                                    <li><a href="javascript:void(0)" data-toggle="modal" data-target="#contact">Contact</a></li>
                                </ul>
                            </div>
                            <div class="copyright-text text-center">
                                <br>
                                <p>Copyright © 2021. Tous droits réservés.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div id="live-chat">
            <header class="clearfix">
                <h4>Besoin d'aide ?</h4><span class="chat-message-counter">?</span>
            </header>
            <div class="chat text-center">
                <p>Vous êtes un Visiteur ou un Promoteur et vous avez une question autour de votre facture, ou sur les offres proposées par la CNAC ?</p>
                <hr>
                <div class="btn-box mt-2 text-center"><a class="theme-btn btn-style-two" href="http://192.168.5.15/public/fr/">Accéder à la FAQ</a> <a class="theme-btn btn-style-two" href="http://192.168.5.15/public/fr/#reseau-national">Nous Contactez</a></div>
            </div>
        </div>
        <div class="light-box">
            <button class="light-btn " type="button"><img src="{{ asset('assets/templates/landing/images/light_off.svg') }}" alt=""></button>
        </div>
        <div class="modal-frame">
            <div class="modal">
                <div class="modal-inset">
                    <div class="button close"><i class="fas fa-times"></i></div>
                    <div class="modal-body"><img src="#" alt=""></div>
                </div>
            </div>
        </div>
        {{-- <button class="left-bottom switch-slider" type="role">
            <i class="fas fa-border-all"></i>
        </button> --}}
        <div class="modal-overlay"></div><!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
        <script src="https://cdn.plyr.io/1.6.13/plyr.js"></script>
        <script src="{{ asset('assets/templates/landing/js/vendors.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
        <script src="{{ asset('assets/templates/landing/js/map-script.js') }}"></script>
        <script src="{{ asset('assets/templates/landing/js/app.js?v=6762297') }}"></script>
        <script src="{{ asset('assets/templates/landing/parcours.js') }}"></script>
        <script src="{{ asset('assets/templates/landing/js/search_fr.js') }}"></script>
        <script async src="https://cse.google.com/cse.js?cx=0fa41df34dcea984a"></script>
        <script>
            $(function () {
                setTimeout(function () {
                    $("input.gsc-input").css({
                        background: 'white !important'
                    });
                    console.log($("input.gsc-input"));
                }, 1000);
            });
        </script>
    </form>
</body>
</html>