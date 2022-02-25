@extends('layouts.landing')

@section('content')
    
<nav id="scrollspy-navbar" class="scrollspy-navbar opned">
    <button class="close-scrollspy-btn" type="role">
        <i class="fas fa-indent"></i>
    </button>
    <ul class="scrollspy-nav-menu">
        <li>
            <a data-scroll="home" href="#home" class="scrollspy-dot active">
                <span>Accueil</span>
            </a>
        </li>
        {{-- <li>
            <a data-scroll="lettredg" href="#lettredg" class="scrollspy-dot">
                <span>Lettre DG</span>
            </a>
        </li> --}}
        <li>
            <a data-scroll="espacepresse" href="#espacepresse" class="scrollspy-dot">
                <span>Espace Presse</span>
            </a>
        </li>
        <li>
            <a data-scroll="reseau-national" href="#reseau-national" class="scrollspy-dot">
                <span>Réseau national</span>
            </a>
        </li>
        <li>
            <a data-scroll="footer" href="#footer" class="scrollspy-dot">
                <span>Pied de Page</span>
            </a>
        </li>
    </ul>
</nav>
<div class="container-fluid homes" id="home-slider">
    <div class="row">
        <div class="col-lg-12 ml-0 mr-0 pl-0 pr-0 home-silder position-relative">
            <div class="container">
                <div class="row justify-content-center align-content-center">
                    <div class="col-md-4 stick-image" >
                        <img loading="lazy"  src="assets/templates/landing/images/man-women.png">
                    </div>
                    <div class="col-md-8">
                        <section class="header-title row justify-content-center align-content-center flex-column">
                            <div class="container-fr-slogon">
                                <div class="left-fr-slogon">
                                    <span class="ensemble">Ensemble</span>
                                    <br>
                                    <span class="relevon">Relevons Le</span>
                                </div>
                                <div class="right-fr-slogon">
                                    <span class="defi">Défi</span>
                                </div>
                            </div>
                            <p class="text-center primary-color-2 mt-3">
                                Application Mobile E-CNAC disponible sur
                            </p>
                            <div class="text-center">
                                <a class="btn-sm btn-google" href="https://play.google.com/store/apps/details?id=dz.cnac.ecnac" target="_blank" title="Google Play">Télécharger</a>
                                <a class="btn-sm btn-detail" href="http://192.168.5.15/ECNAC/" target="_blank" title="Google Play">Détail</a>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <div class="bannerHeader">
                <img loading="lazy"  src="{{ asset('assets/templates/landing/images/managed-services-banner-6.jpg') }}">
            </div>
            <section class="countdown-section mb-3">
                <div class="auto-container">
                    <div class="outer-box wow fadeInUp clearfix">
                        <div class="container ">
                            <div class="row">
                                <a class="col-md-4 mb-3 animated fadeInUp" href="">
                                    <div class="card card--stacked">
                                        <h4>
                                            <p class="title card__title">Assurance Chômage</p>
                                        </h4>
                                        <p class="mb-0 link card__link">Consultez <i class="far fa-arrow-alt-circle-right"></i></p>
                                    </div>
                                </a>
                                <a class="col-md-4 mb-3 animated fadeInUp" href="">
                                    <div class="card card--stacked">
                                        <h4>
                                            <p class="title card__title">Dispositif 30-55 ans</p>
                                        </h4>
                                        <p class="mb-0 link card__link">Consultez <i class="far fa-arrow-alt-circle-right"></i></p>
                                    </div>
                                </a>
                                <a class="col-md-4 mb-3 animated fadeInUp" href="">
                                    <div class="card card--stacked">
                                        <h4>
                                            <p class="title card__title">Mesures d'encouragement d'Aide à l'Emploi</p>
                                        </h4>
                                        <p class="mb-0 link card__link">Consultez <i class="far fa-arrow-alt-circle-right"></i></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- Starting Dg Section-->
{{-- <section class="about-section pt-5 " id="lettredg">
    <div class="parallax-scene parallax-scene-1 anim-icons"><span class="parallax-layer icon icon-mic" data-depth="0.20"></span><span class="parallax-layer icon icon-mic" data-depth="0.20"></span><span class="parallax-layer icon icon-mic-2" data-depth="0.30"></span><span class="parallax-layer icon icon-mic-2" data-depth="0.40"></span><span class="parallax-layer icon icon-speaker" data-depth="0.50"></span><span class="parallax-layer icon icon-speaker-2" data-depth="0.60"></span></div>
    <div class="auto-container">
        <div class="row">
            <div class="content-column col-lg-6 col-md-12 col-sm-12">
                <div class="inner-column" itemscope itemtype="https://schema.org/Organization">
                    <div class="sec-title">
                        <span class="title">Une Institution, Des mÃ©tiers et des Hommes</span>
                        <h2 itemprop="director">Lettre du Directeur General</h2>
                        <div class="text">
                            Dans le cadre de la mise en œuvre du plan d’action sectoriel du Ministère du travail, de l'emploi et de la sécurité sociale, qui est déterminé à écarter le spectre du chômage, ainsi que de moderniser les procédures de prise en charge des préoccupations des usagers, j'ai le plaisir de vous accueillir dans ce site électronique de la Caisse Nationale d'Assurance Chômage www.cnac.dz
                        </div>
                    </div>
                    <div class="btn-box"><a class="theme-btn btn-style-da" href=""><span class="btn-title">Lire Plus</span></a></div>
                </div>
            </div>
            <div class="image-column col-lg-6 col-md-12 col-sm-12">
                <div class="image-box">
                    <figure class="image-1 wow fadeIn"><img loading="lazy"  src="{{ asset('assets/templates/landing/images/profile_dg.png') }}" width="700px" height="700px" alt=""></figure>
                    <figure class="image-2 wow fadeInRight"><img loading="lazy"  src="{{ asset('assets/templates/landing/images/dg.jpg') }}" width="250" alt=""></figure>
                </div>
            </div>
        </div>
    </div>
</section> --}}

    <!-- Starting espace-presse-->
    <section class="pricing-section alternate pt-1 pb-0" id="espacepresse">
        <div class="anim-icons"><span class="icon icon-circle-1 wow zoomIn" data-wow-delay="600ms"></span></div>
        <div class="auto-container">
            <div class="sec-title text-center mb-0">
                <span class="title">---</span>
                <h2 class="mb-0">Espace Presse</h2>
            </div>
            <div class="row wrapper">
                <a href="" class="panel " style="background-image: url({{ asset('assets/templates/landing/images/comm.jpg') }});">
                    <div class="bar"></div>
                    <h3>Communiqué</h3>
                </a>
                <a href="" class="panel " style="background-image: url({{ asset('assets/templates/landing/images/ao.jpg') }});">
                    <div class="bar"></div>
                    <h3>Appels d'Offres</h3>
                </a>
                <a href="" class="panel " style="background-image: url({{ asset('assets/templates/landing/images/discour-dg.jpg') }});">
                    <div class="bar"></div>
                    <h3>Discours DG</h3>
                </a>
            </div>
            {{-- <div class="row">
                    <!-- Communiqué-->
                    <div class="pricing-block style-two col-lg-4 col-md-12 col-sm-12 wow fadeInLeft">
                        <div class="inner-box da-card-md-1">
                            <div class="upper-box clearfix text-center">
                                <h3 class="title ">Communiqué</h3>
                            </div>
                            <div class="lower-content">
                                <div class="text text-center"><img loading="lazy"  src="@Url.Content("assets/templates/landing/images/icons/file.svg")" width="100" alt="Alternate Text" /></div>
                                <div class="btn-box text-center"><a class="theme-btn btn-style-da" href="http://10.16.0.83:3000/communique.html"><span class="btn-title">Lire plus</span></a></div>
                            </div>
                        </div>
                    </div>
                    <!-- Dossier Presse-->
                    <div class="pricing-block style-two col-lg-4 col-md-12 col-sm-12 wow fadeInLeft">
                        <div class="inner-box da-card-md-1">
                            <div class="upper-box clearfix text-center">
                                <h3 class="title ">Dossier Presse</h3>
                            </div>
                            <div class="lower-content">
                                <div class="text text-center"><img loading="lazy"  src="@Url.Content("assets/templates/landing/images/icons/pdf-file.svg")" wid width="100" alt="Alternate Text" /></div>
                                <div class="btn-box text-center"><a class="theme-btn btn-style-da" href="http://10.16.0.83:3000/dossier-presse.html"><span class="btn-title">Lire plus</span></a></div>
                                <!-- Dossier Presse-->
                            </div>
                        </div>
                    </div>
                    <div class="pricing-block style-two col-lg-4 col-md-12 col-sm-12 wow fadeInLeft">
                        <div class="inner-box da-card-md-1">
                            <div class="upper-box clearfix text-center">
                                <h3 class="title ">Discours DG</h3>
                            </div>
                            <div class="lower-content">
                                <div class="text text-center"><img loading="lazy"  src="{{ asset('assets/templates/landing/images/icons/employee.svg') }}" width="100" alt="Alternate Text" /></div>
                                <div class="btn-box text-center"><a class="theme-btn btn-style-da" href="http://10.16.0.83:3000/discours-dg.html"><span class="btn-title">Lire plus</span></a></div>
                            </div>
                        </div>
                    </div>
                </div> --}}
        </div>
    </section>
    <!-- End espace-presse-->
    <!-- Starting espace-presse-->
    <section class="pricing-section alternate pt-1" id="espacepresse">
        <div class="anim-icons"><span class="icon wow zoomIn" data-wow-delay="600ms"></span></div>
        <div class="auto-container">
            <div class="sec-title text-center mb-0">
                <span class="title">---</span>
                <h2 class="mb-0">Espace Media</h2>
            </div>
            <div class="row wrapper">
                <a class="panel " style="background-image: url({{ asset('assets/templates/landing/images/success-story-header_STAGE_SMALL.jpg') }});">
                    <div class="bar"></div>
                    <h3>Success Story</h3>
                </a>
                <a class="panel " style="background-image: url({{ asset('assets/templates/landing/images/event.jpg') }});">
                    <div class="bar"></div>
                    <h3>CNAC Evenements</h3>
                </a>
            </div>

        </div>
    </section>
    <!-- End espace-presse-->
    <!-- ts map direction start-->
    <section class="ts-map-direction mb-5 wow fadeInUp" data-wow-duration="1.5s" data-wow-delay="400ms">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <h2 class="column-title"><span></span> Contact</h2>
                    <div class="ts-map-tabs">
                        {{-- <ul class="nav" role="tablist">
                            <li class="nav-item"><a class="nav-link active" href="#profile" role="tab" data-toggle="tab">Address /Contact</a></li>
                        </ul> --}}
                        <!-- Tab panes-->
                        <div class="tab-content direction-tabs">
                            <div class="tab-pane active" role="tabpanel" id="buzz">
                                <div class="direction-tabs-content">
                                    <h3>Direction Générale</h3>
                                    <p class="derecttion-vanue">97, bd Colonel Bouguera, El-Biar,-ALGER</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="contact-info-box">
                                                <div>
                                                    <p><strong>Téléphone:</strong> 023 37 72 91 / 023 37 73 12 / 023 37 72 93 / 023 37 72 82 / 023 37 72 94</p>
                                                    <p><strong>Fax:</strong> 023 37 73 01</p>
                                                    <p><strong>mail:</strong> contact@cnac.dz</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="ts-map">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe loading="lazy"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2932.347813116332!2d3.0295778942184084!3d36.76791024229115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzbCsDQ2JzA0LjEiTiAzwrAwMSc1Mi44IkU!5e0!3m2!1sfr!2sfr!4v1462970358304"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br>
    <!-- Starting Réseau national-->
    <section class="pricing-section alternate py-1" id="reseau-national">
        <div class="anim-icons"><span class="icon icon-circle-1 wow zoomIn" data-wow-delay="600ms"></span></div>
        <div class="auto-container">
            <div class="sec-title text-center mb-0">
                <span class="title">---</span>
                <h2>Réseau national</h2>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" placeholder="Trouvez votre wilaya" id="search-wilaya">
                    </div>
                </div>
                <!-- Communiqué-->
                <div class="col-sm-12 wow fadeInLeft">
                    <table class="table">
                        <tr>
                            <th>Wilaya</th>
                            <th>Type</th>
                            <th>Numero</th>
                            <th>Fax</th>
                            <th>Email</th>
                            <th>Adresse</th>
                            <th>Map</th>
                        </tr>
                        <tbody id="output"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- End Réseau national-->

    <!-- Starting statistic-->
    {{-- <section class="ionic-bg py-5">
            <div class="auto-container">
                <div class="text-center">
                    <div class="row clearfix">
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="46">0</span> %</div>
                            <h4 class="counter-title">Promoteurs financés ont moins <br> de 55 ans.</h4>
                        </div>
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box"><span class="count-text" data-speed="3000" data-stop="29">0</span> +</div>
                            <h4 class="counter-title">En moyenne projets sont financés  <br> par jour.</h4>
                        </div>
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box"><span class="count-text byDay" data-speed="3000" data-stop=""></span> +</div>
                            <h4 class="counter-title">En moyenne de visiteur <br> par jour.</h4>
                        </div>
                        <div class="counter-column col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="count-box"><span class="count-text totals" data-speed="3000" data-stop=""></span> +</div>
                            <h4 class="counter-title">Total visiteurs <br> 2019 / 2020</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
    <!-- End statistic-->

@endsection