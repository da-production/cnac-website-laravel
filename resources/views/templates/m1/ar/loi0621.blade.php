@extends("layouts.landing_$lang")

@section('content')

    <!-- Starting breadcrumb-->
    <section class="page-title">
        <div class="shape-layers"></div>
        <div class="auto-container">
            <h1>Mesures d'Encouragement et d'Appui à la Promotion de l'Emploi</h1>
            <ul class="bread-crumb clearfix">
                <li class="bread-crumb clearfix"><a href="http://10.16.0.83:3000/">Missions de la CNAC </a></li>
                <li>Mesures d'encouragement d'Aide à l'Emploi</li>
            </ul>
            <a href="#content" class="btn-slide-down">
                <i class="fa fa-arrow-down"></i>
            </a>
        </div>
    </section>
    <!-- End breadcrumb-->
    <!-- Starting Presentation-->
    <section class="faq-section pt-0 mt-5" id="content">
        <div class="auto-container">
            <div class="row">
                <!-- Accordion Column-->
                <div class="accordion-column col-lg-12 col-md-12 col-sm-12">
                    <p class="mb-3">En application  à la loi n° 06-21 du 20 Dhu al-Qa'dah, 1427 AH correspondant au 11 décembre 2006 relative aux aux mesures d'encouragement et d'appui à la promotion de l'emploi, la Caisse Nationale d'Assurance Chômage accorde  des mesures incitatives pour promouvoir l'emploi en réduisant les charges sociales en faveur des employeurs Le travail du secteur économique, et il peut également inclure des employeurs d'autres secteurs à l'exception de ceux qui sont actifs dans l'exploration et la production d'hydrocarbures.</p>
                    <h5 class="da-title-4">AVANTAGES CONSENTIS À L’EMPLOYEUR</h5><br />
                    <ul class="ltr-list-caret">
                        <li>Différents niveaux d’allègement de la part patronale ;</li>
                        <li>Exonération de la cotisation globale de la sécurité à la charge de l’employeur ;</li>
                        <li>Subvention mensuelle à l’emploi ;</li>
                    </ul><br />
                    <h5 class="da-title-4">1. NIVEAUX D’ALLEGEMENT DE LA PART PATRONALE</h4>
                    <p>
                        L’employeur bénéficie d’abattement en cas de recrutements pour une durée au moins de 12 mois :
                        <ul class="ltr-list-caret">
                            <li>De 20% de sa quote part, pour les demandeurs d’emploi ;</li>
                            <li>De 28% de sa quote part pour les primo demandeurs ;</li>
                            <li>De 36% pour les recrutements effectués dans les régions des hauts plateaux et du sud ;</li>
                        </ul>
                    </p>
                    <p>
                        L’employeur bénéficie aussi d’abattement en cas de recrutements pour une durée au moins de 6 mois :
                        <ul class="ltr-list-caret">
                            <li>De 20 à 28% de sa quotte part, en cas de recrutement des demandeurs d’emploi et primo-demandeurs dans les secteurs du tourisme, de l’artisanat, de la culture de l’agriculture, dans les chantiers du bâtiment et travaux publics ainsi que les sociétés de services ;</li>
                            <li>De 36% de sa quotte part patronale, en cas de recrutement de toutes catégories de demandeurs d’emploi dans les régions des hauts plateaux et du sud ;</li>
                            <li>En cas de doublement d’effectif initial par l’employeur occupant 9 travailleurs au moins, déclarés à la CNAS, bénéficie d’un abattement fixé à 8 % pour une durée d’une année.</li>
                        </ul>
                    </p><br />
                    <h5 class="da-title-4">2. EXONERATION DE LA PART PATRONALE</h4>
                    <p>
                        Tout employeur qui engage des actions de formation et de perfectionnement en faveur de ses travailleurs, bénéficie de l’exonération de la cotisation globale pour des périodes modulées comme suit :
                        <ul class="ltr-list-caret">
                            <li>Un (01) mois pour une durée allant de 15 jours à 1 mois ;</li>
                            <li>Deux (02) mois pour une durée supérieure à 1 mois et égale à 2 mois ;</li>
                            <li>Trois (03) mois pour une durée supérieure à 2 mois ;</li>
                        </ul>
                    </p>
                    <p>La CNAC prend en charge la cotisation globale de l’employeur évaluée à (25%) pendant une période pouvant aller jusqu’à trois (03) mois.</p><br />
                    <h5 class="da-title-4">3. SUBVENTION MENSUELLE A L’EMPLOI </h4>
                    <p>Pour chaque demandeur d’emploi recruté sur la base d’un contrat pour une durée indéterminée (C.D.I), l’employeur bénéficie d’une subvention mensuelle à l’emploi d’un montant de 1000 dinars pour une durée maximale de trois (03) ans.</p>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- End Presentation-->


<!-- Starting Services-->
<section class="top-features pt-5 pb-0" id="services">
    <div class="auto-container">
        <div class="row mb-5 mt-3">
            <div class="feature-block col-lg-4 offset-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/wo-am-besten-franzoesisch-lernen-online-500.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h5>Mesures d'Encouragement <br />d'Aide à l'Emploi</h5>
                    <a href="http://www.cnac.dz:2021/rac/" class="article-Button">Inscription</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ending Services-->


@endsection