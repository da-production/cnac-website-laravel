@extends("layouts.landing_$lang")

@section('content')

<!-- Starting breadcrumb-->
<section class="page-title">
    <div class="shape-layers"></div>
    <div class="auto-container">
        <h1>Organismes Sous Tutelle</h1>
        <ul class="bread-crumb clearfix">
            <li class="bread-crumb clearfix"><a href="http://10.16.0.83:3000/">Accueil </a></li>
            <li>Organismes Sous Tutelle</li>
        </ul>
    </div>
</section>
<!-- End breadcrumb-->
<!-- Starting Presentation-->

<section class="faq-section pt-0">
    <div class="auto-container">

        <div class="fact-counter text-center">
            <div class="row d-flex justify-content-center">
                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="logos">
                                    <img src="{{ asset('assets/templates/landing/images/organismes/anem.png') }}">
                                </div>
                                <h5 class="text-center">ANEM</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="logos">
                                    <img src="{{ asset("assets/templates/landing/images/organismes/cacobath.png") }}">
                                </div>
                                <h5 class="text-center">CACOBATH</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="cnas-logo logos">
                                    <img src="{{ asset('assets/templates/landing/images/organismes/cnas.svg') }}">
                                </div>
                                <h5 class="text-center">CNAS</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="logos">
                                    <img src="{{ asset('assets/templates/landing/images/organismes/cnr.png') }}">
                                </div>
                                <h5 class="text-center">CNR</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="logos">
                                    <img src="{{ asset('assets/templates/landing/images/organismes/fnpos.png') }}">
                                </div>
                                <h5 class="text-center">FNPOS</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="logos">
                                    <img src="{{ asset('assets/templates/landing/images/organismes/inprp.png') }}">
                                </div>
                                <h5 class="text-center">INPRP</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="logos">
                                    <img src="{{ asset('assets/templates/landing/images/organismes/int.png') }}">
                                </div>
                                <h5 class="text-center">INT</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="logos">
                                    <img src="{{ asset('assets/templates/landing/images/organismes/logo-casnos-h.png') }}">
                                </div>
                                <h5 class="text-center">CASNOS</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="logos">
                                    <img src="{{ asset('assets/templates/landing/images/organismes/onaaph.png') }}">
                                </div>
                                <h5 class="text-center">ONAAPH</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="partenaires mx-0 col-lg-3 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="partenaire-box">
                        <div>
                            <a href="javascript:void(0)">
                                <div class="logos">
                                    <img src="{{ asset('assets/templates/landing/images/organismes/oprebatph.png') }}">
                                </div>
                                <h5 class="text-center">OPREBATPH</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End statistic-->

@endsection