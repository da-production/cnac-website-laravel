@extends("layouts.landing_$lang")

@section('content')

<!-- Starting breadcrumb-->
<section class="page-title">
    <div class="shape-layers"></div>
    <div class="auto-container">
        <h1>Parcours de création <br /> de la micro entreprise</h1>
        <ul class="bread-crumb clearfix">
            <li class="bread-crumb clearfix"><a href="http://10.16.0.83:3000/">Accueil </a></li>
            <li>Services</li>
        </ul>
    </div>
</section>
<!-- End breadcrumb-->
<!-- Starting Presentation-->

<section class="faq-section pt-0">
    <div class="container-fluid container-parcours">

        <section id="wrapper">
            <div class="content">
                <!-- Tab links -->
                <div class="tabs">
                    {{-- <a class="tablinks active" data-country="presentation">
                        <p data-title="Présentation">Présentation</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/presentation.svg')}}" alt="Alternate Text" />
                    </a>
                    <a class="tablinks" data-country="etape1">
                        <p data-title="Etape">Etape 1</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/folder.png') }}" alt="Alternate Text" />
                    </a>
                    <a class="tablinks" data-country="etape2">
                        <p data-title="">Etape 2</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/tablet.svg')}}" alt="Alternate Text" />
                    </a>
                    <a class="tablinks" data-country="etape3">
                        <p data-title="">Etape 3</p>
                            <img class="icon-hover" src="{{ asset('assets/templates/landing/images/quality-control.svg')}}" alt="Alternate Text" />
                        </a>
                    <a class="tablinks" data-country="etape4">
                        <p data-title="">Etape 4</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/folder(1).svg')}}" alt="Alternate Text" />
                    </a>
                    <a class="tablinks" data-country="etape5">
                        <p data-title="">Etape 5</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/teaching.svg')}}" alt="Alternate Text" />
                    </a>
                    <a class="tablinks" data-country="etape6">
                        <p data-title="">Etape 6</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/cash.svg')}}" alt="Alternate Text" />
                    </a> --}}
                    <a class="tablinks active" data-country="etape1">
                        <p data-title="">Etape 1</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/inventory.svg')}}" alt="Alternate Text" />
                    </a>
                    <a class="tablinks" data-country="etape2">
                        <p data-title="">Etape 2</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/engineer.svg')}}" alt="Alternate Text" />
                    </a>
                </div>

                <!-- Tab content -->
                <div class="wrapper_tabcontent">
                    <div id="presentation" class="tabcontent ">
                        <h3>Présentation</h3>
                        <h4 class="da-title-4">Présentation du Dispositif </h4>
                        <p class="mb-5">Les projets d’investissement sont initiés par les chômeurs promoteurs âgés de 30 à 55 ans dans le cadre du dispositif de soutien à la création et à l’extension d’activités :</p>

                        <h4 class="da-title-4">L’investissement en création </h4>
                        <p class="mb-5">C’est la réalisation, entièrement nouvelle, d’une entité économique (entreprise, unité, atelier, etc.) donnant lieu à une activité de production de biens ou de services.</p>

                        <h4 class="da-title-4">L’investissement en extension :</h4>
                        <p class="mb-5">C’est l’augmentation des capacités de production de biens par l’acquisition de nouveaux équipements ou matériels pour répondre à la demande du marché. L’extension vise essentiellement les activités génératrices de richesse et d’emplois.</p>

                        <div class="alert alert alert-dark  m-5">
                            <h5 class="text-center text-black-50">Important !</h5>
                            <p>Seules les activités de production de biens et de services sont éligibles.</p>
                            <p>Les activités commerciales (revente en l’état) sont exclues.</p>
                            <p>
                                Il s’agit des activités suivantes :
                                <ul class="ltr-list-caret">
                                    <li>Activités de commerce de gros et de détails ;</li>
                                    <li>Activités d’importation et d’exportation.</li>
                                </ul>
                            </p>
                            <p>Vous pouvez télécharger les listes des activités éligibles.</p>
                            <p>(CNRC, Activités libérales, agricoles, artisanales).</p>
                        </div>
                    </div>

                    <div id="etape1" class="tabcontent">
                        <h3>Etape 1</h3>
                        <p></p>
                    </div>

                    <div id="etape2" class="tabcontent">
                        <h3>Etape 2</h3>
                        <p>London is the capital of Great Britain. It is one of the greatest cities in the world. It is an important business and financial centre. It is an intellectual centre, too. Everywhere in London, there are open spaces: Hyde Park and Regent Park are the largest. The City is the oldest part of London. </p>
                    </div>

                    <div id="etape3" class="tabcontent">
                        <h3>Etape 3</h3>
                        <p>London is the capital of Great Britain. It is one of the greatest cities in the world. It is an important business and financial centre. It is an intellectual centre, too. Everywhere in London, there are open spaces: Hyde Park and Regent Park are the largest. The City is the oldest part of London. </p>
                    </div>

                    <div id="etape4" class="tabcontent">
                        <h3>Etape 4</h3>
                        <p>London is the capital of Great Britain. It is one of the greatest cities in the world. It is an important business and financial centre. It is an intellectual centre, too. Everywhere in London, there are open spaces: Hyde Park and Regent Park are the largest. The City is the oldest part of London. </p>
                    </div>

                    <div id="etape5" class="tabcontent">
                        <h3>Etape 5</h3>
                        <p>London is the capital of Great Britain. It is one of the greatest cities in the world. It is an important business and financial centre. It is an intellectual centre, too. Everywhere in London, there are open spaces: Hyde Park and Regent Park are the largest. The City is the oldest part of London. </p>
                    </div>

                    <div id="etape6" class="tabcontent">
                        <h3>Etape 6</h3>
                        <p>London is the capital of Great Britain. It is one of the greatest cities in the world. It is an important business and financial centre. It is an intellectual centre, too. Everywhere in London, there are open spaces: Hyde Park and Regent Park are the largest. The City is the oldest part of London. </p>
                    </div>

                    <div id="etape7" class="tabcontent active">
                        <h3>Etape 1</h3>
                        <p></p>
                    </div>

                    <div id="etape8" class="tabcontent">
                        <h3>Etape 2</h3>
                        <p></p>
                    </div>


                </div>
            </div>
        </section>
    </div>
</section>

@endsection