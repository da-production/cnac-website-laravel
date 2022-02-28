@extends("layouts.landing_$lang")

@section('content')

<!-- Starting breadcrumb-->
<section class="page-title">
    <div class="shape-layers"></div>
    <div class="auto-container">
        <h1>Autre Services</h1>
        <ul class="bread-crumb clearfix">
            <li class="bread-crumb clearfix"><a href="">Accueil </a></li>
            <li>Autre Services</li>
        </ul>
    </div>
</section>
<!-- End breadcrumb-->
<!-- Starting Services-->
<section class="top-features pt-5 pb-0">
    <div class="auto-container">
        <div class="row mb-5 mt-3">


            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/araacom.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h3>Araacom</h3>
                    <a href="" class="article-Button">Consultez</a>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection