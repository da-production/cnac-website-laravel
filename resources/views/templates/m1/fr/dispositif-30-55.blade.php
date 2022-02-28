@extends("layouts.landing_$lang")

@section('content')


<div class="access-right-box">
    <ul class="list-unstyled">
    <li><a title="Description" href="#description">Description<span aria-hidden="true" class="icon-chevron-right"></span></a></li>
    <li><a title="Service en Ligne" href="#services">Service en Ligne<span aria-hidden="true" class="icon-chevron-right"></span></a></li>
    </ul>
</div>
    <!-- Starting breadcrumb-->
    <section class="page-title">
        <div class="shape-layers"></div>
        <div class="auto-container">
            <h1 style="font-size: 30px !important">DISPOSITIF DE SOUTIEN A LA CREATION ET A L'EXTENSION D'ACTIVITES PAR LES CHOMEURS PROMOTEURS AGES DE 30 A 55 ANS.</h1>
            <ul class="bread-crumb clearfix">
                <li class="bread-crumb clearfix"><a href="{{ route('accueil') }}">Accueil </a></li>
                <li>Dispositif 30 - 55 ans</li>
            </ul>
        </div>
    </section>
    <!-- End breadcrumb-->
  
    <section class="faq-section pt-0 mt-5" id="content">
        <div class="auto-container" id="description">
            <div class="row">
                <!-- Accordion Column-->
                <div class="accordion-column col-lg-12 col-md-12 col-sm-12 mb-0">
                    <p>Instituée par le décret exécutif n° 94-188 du 06 juillet 1994 modifié et complété portant statut de la Caisse Nationale d’Assurance Chômage et  qui a vu ses missions étendues au financement de la micro entreprise  en vertu des dispositions du  décret exécutif n°04-01 du 03 janvier 2004.</p>
                    <p>Forte  de son expérience dans le domaine de l’accompagnement et de son réseau des Centres d’Appui au Travail Indépendant (CATI), lancé en 1998 à travers tout le territoire national, la Caisse nationale d’Assurance Chômage se mobilise et se prépare dans la perspective d'offrir à tout porteur de projet un espace adéquat pour l’accomplissement tant professionnel que social en adéquation avec le nouvel ancrage juridique régissant le dispositif de soutien à la création et à l'extension d'activités par les chômeurs promoteurs âgés de 30 à 55 ans  :</p>
                    <ul class="ltr-list-caret">
                        <li>Un décret présidentiel n°03-514 du 30 Décembre 2003 modifié et complété par le	décret présidentiel n°19-58 du 02fevrier 2019 relatif au soutien à la création et à l'extension d'activités par les chômeurs promoteurs âgés de trente (30) à cinquante (55) ans. </li>

                    </ul>
                    <p>Un décret exécutif n°04-02 du 10 dhou el kaada 1424 correspondant au 03 Janvier 2004 modifié et complété par le Décret exécutif n°18-192 du 22 juillet fixant les conditions et les niveaux des aides accordées aux chômeurs promoteurs, âgés de trente (30) à cinquante (55) ans</p>
                    <p>Cette assise juridique a permis à la CNAC de s’atteler avec la plus grande célérité à la mise en place de tous les mécanismes internes avec la construction concomitante d’un partenariat avec plusieurs ministères et institutions devant optimiser la concrétisation de ses nouvelles prérogatives.</p>
                    <p>Les services assurés aux promoteurs intègrent, à la fois, l’accompagnement personnalisé durant toutes les phases, et l’assistance lors de l’examen des projets par les comités de sélection et de validation et Financement.</p>
                    <p>Les investissements à réaliser dans ce cadre repose exclusivement sur des modes de financement de type : autofinancement ou le financement triangulaire, qui met en relation le promoteur, la banque et la CNAC. </p>
                    <p>Le seuil maximum du coût de l’investissement est fixé à 10 millions de dinars.</p>
                    <p>Il est prévu, en outre, toute une batterie d’aides ainsi que des avantages financiers en direction de toute personne qui satisfait aux conditions d’accès au dispositif notamment l’âge, la situation de chômage, la qualification ou le savoir –faire en relation avec l’activité projetée et la possibilité de participer financièrement au montage de son projet (accompagnement).</p>
                    <p>Et dans le souci de préserver les micro-entreprises nouvellement créées d'une mortalité précoce, des sessions de formation à la gestion d'entreprise en direction des chômeurs promoteurs sont assurées périodiquement par nos conseillers animateurs.</p>

                    <p>
                        En plus de cet appui, prévu d’octroyer aux promoteurs éligibles, plusieurs avantages qui sont :
                        <ul class="ltr-list-caret">
                            <li>La bonification à 100% des taux d’intérêts pour les prêts bancaires ;</li>
                            <li>Le bénéfice d’un prêt non rémunéré (sans intérêts) de la part de la CNAC ;</li>
                            <li>La possibilité d’extension du projet </li>
                        </ul>
                    </p>

                    <p>S’agissant des risques crédits des investissements, un fonds de garantie accompagne les banques partenaires et couvre les créances dues en principal et les intérêts à hauteur de 70%. (Avantages financiers)</p>

                </div>
            </div>
        </div>
</section>
    <!-- End Presentation-->

<div class="container">
    <hr class="style3">
</div>

<!-- Starting Services-->
<section class="top-features pt-5 pb-0 mt-1" id="services">
    <div class="auto-container">
        <div class="row mb-5 mt-3">
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/parcour.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h3>Parcours</h3>
                    <a href="" class="article-Button">Lire Plus</a>
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
                    <a href="javascript:void(0)" id="telechargement" class="article-Button">Lire Plus</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ending Services-->


<!-- Starting Telechargement-->
<section class="faq-section mt-0 pt-0">
    <div class="auto-container">
        <div class="row">
            <!-- Accordion Column-->
            <div class="accordion-column col-lg-12 col-md-12 col-sm-12 display-none">
                <div class="inner-column">
                    <ul class="accordion-box ">
                        <li class="accordion block">
                            <div class="acc-btn active" id="telechargement">
                                Telechargement
                                <div class="icon icon_plus_alt2"></div>
                            </div>
                            <div class="acc-content" style="display: block;">
                                <div class="content">
                                    <div class="text">
                                        <h4 class="text-dark mb-3"> Dispositif 30 - 55 ans</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Titre</th>
                                                    <th>Description</th>
                                                    <th>Format</th>
                                                    <th>Telecharger</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Liste des pièces constituant le dossier et Conditions d'accès</td>
                                                    <td>Liste des pièces constituant le dossier et Conditions d'accès</td>
                                                    <td>PDF</td>
                                                    <td><a href="{{ url(asset('assets/templates/landing/docs/cdnaccesdvmars2021.pdf')) }}" target="_blank" download="Liste des pièces constituant le dossier et Conditions d'accès"><i class="fa fa-download"></i> Telecharger</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Formulaire d’authentification</td>
                                                    <td>Formulaire d’authentification</td>
                                                    <td>PDF</td>
                                                    <td><a href="{{ url('assets/templates/landing/docs/formulaire_authentification.pdf') }}" target="_blank" download="Formulaire d’authentification"><i class="fa fa-download"></i> Telecharger</a></td>
                                                </tr>
                                                <tr>
                                                    <td>Formulaire d’inscription</td>
                                                    <td>Formulaire d’inscription</td>
                                                    <td>PDF</td>
                                                    <td><a href="{{ url('assets/templates/landing/docs/ficheidentificationdispo30_50mars2011.pdf') }}" target="_blank" download="Formulaire d’inscription"><i class="fa fa-download"></i> Telecharger</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>




@endsection