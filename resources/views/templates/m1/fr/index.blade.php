@extends("layouts.landing_$lang")

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
                                <a class="col-md-4 mb-3 animated fadeInUp" href="{{ route('AssuranceChomage') }}">
                                    <div class="card card--stacked">
                                        <h4>
                                            <p class="title card__title">Assurance Chômage</p>
                                        </h4>
                                        <p class="mb-0 link card__link">Consultez <i class="far fa-arrow-alt-circle-right"></i></p>
                                    </div>
                                </a>
                                <a class="col-md-4 mb-3 animated fadeInUp" href="{{ route('Dispositif3055') }}">
                                    <div class="card card--stacked">
                                        <h4>
                                            <p class="title card__title">Dispositif 30-55 ans</p>
                                        </h4>
                                        <p class="mb-0 link card__link">Consultez <i class="far fa-arrow-alt-circle-right"></i></p>
                                    </div>
                                </a>
                                <a class="col-md-4 mb-3 animated fadeInUp" href="{{ route('Loi0621') }}">
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


    <!-- Starting espace-presse-->
    <section class="pricing-section alternate pt-1 pb-0" id="espacepresse">
        <div class="anim-icons"><span class="icon icon-circle-1 wow zoomIn" data-wow-delay="600ms"></span></div>
        <div class="auto-container">
            <div class="sec-title text-center mb-0">
                <span class="title">---</span>
                <h2 class="mb-0">Espace Presse</h2>
            </div>
            <div class="row wrapper">
                <a href="{{ route('Communique') }}" class="panel " style="background-image: url({{ asset('assets/templates/landing/images/comm.jpg') }});">
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


@endsection