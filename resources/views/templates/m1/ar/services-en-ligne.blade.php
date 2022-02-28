@extends("layouts.landing_$lang")

@section('content')

<!-- Starting breadcrumb-->
<section class="page-title">
    <div class="shape-layers"></div>
    <div class="auto-container">
        <h1 style="font-size: 30px !important">Services En Ligne</h1>
        <ul class="bread-crumb clearfix">
            <li class="bread-crumb clearfix"><a href="http://10.16.0.83:3000/">Accueil </a></li>
            <li>Services en ligne</li>
        </ul>
        <a href="#content" class="btn-slide-down">
            <i class="fa fa-arrow-down"></i>
        </a>
    </div>
</section>
<!-- End breadcrumb-->
<!-- Starting Services-->
<section class="top-features pt-5 pb-0">
    <div class="auto-container">
        <div class="row mb-5 mt-3">
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/parcour.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h3>Parcours</h3>
                    <a href="https://www.cnac.dz/p1/acceuil.html" target="_blank" class="article-Button">Lire Plus</a>
                </div>
            </div>
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/services.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h3>Services en Ligne</h3>
                    <a href="javascript:void(0)" target="_blank" class="article-Button">Lire Plus</a>
                </div>
            </div>
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/telechargement.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h3>Téléchargement</h3>
                    <a href="#telechargement" class="article-Button">Lire Plus</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection