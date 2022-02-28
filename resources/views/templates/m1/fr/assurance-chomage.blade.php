@extends("layouts.landing_$lang")

@section('content')
    
    <!-- Starting breadcrumb-->
    <section class="page-title">
        <div class="shape-layers"></div>
        <div class="auto-container">
            <h1>REGIME D’ASSURANCE CHOMAGE</h1>
            <ul class="bread-crumb clearfix">
                <li class="bread-crumb clearfix"><a href="http://10.16.0.83:3000/">Missions de la CNAC </a></li>
                <li>Assurance Chomage</li>
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
                    <p>Premier métier de la Caisse Nationale d’Assurance chômage dès sa création en 1994, la CNAC met en application le régime juridique d’indemnisation du chômage au profit des travailleurs salariés ayant perdu involontairement leur emploi pour des raisons économiques. </p>
                   
                    <p>Pour bénéficier de l'indemnité d'assurance chômage, le salarié doit :</p>
                    <ul class="ltr-list-caret">
                        <li>	Etre régi par un contrat de travail à durée indéterminée (CDI) ;</li>
                        <li>	Etre affilié à la sécurité sociale durant une période cumulée d'au moins trois années ;</li>
                        <li>	Etre adhérent et à jour des cotisations au régime d'assurance chômage depuis au moins six (06) mois avant la cessation de la relation de travail.</li>
                        <li>	Figurer sur la liste nominative des salariés ayant fait l'objet d'un licenciement pour raison économique. Cette liste doit être obligatoirement visée par l'inspection du travail territorialement compétente.</li>
                    </ul><br />
                    <p>Les autres conditions qui s'appliquent au bénéfice de l'assurance chômage sont :</p>
                    <ul class="ltr-list-caret">
                        <li>	Ne pas avoir refusé un emploi ou une formation reconversion en vue d'un emploi.</li>
                        <li>	Ne pas bénéficier d'un revenu procuré par une activité professionnelle quelconque.</li>
                        <li>	Etre inscrit comme demandeur d'emploi auprès des services compétents de l'ANEM depuis au moins deux mois.</li>
                        <li>	Etre résidant en Algérie.</li>
                    </ul><br />
                    <h5 class="da-title-4">I-	Droits et avantages de l'assurance chômage</h5> <br />
                    <br />
                    <h6 class="da-title-4">1/ Durée de prise en charge :</h6>
                    <ul class="ltr-list-caret">
                        <li>	La durée de prise en charge est calculée sur l'ancienneté validée de chaque chômeur.</li>
                        <li>	Elle est fixée à raison de deux (02) mois par année d'ancienneté validée chez le dernier employeur.</li>
                        <li>	Elle ne peut être inférieure à douze (12) mois, ni supérieure à trente six (36) mois.</li>
                        <li>	La période de travail supérieure à six (06) mois est considérée comme une ancienneté ouvrant droit à deux mois de prise en charge</li>
                        <li>	La période de travail égale ou inférieure à six (06) mois équivaut à un (01) mois de prise en charge. </li>
                        <li>	La durée de prise en charge par l'assurance chômage est répartie en quatre (04) périodes égales.</li>
                    </ul><br />
                    <h6 class="da-title-4 mb-1">2/ Indemnités :</h6>
                    <ul>
                        <p>L'indemnité d'assurance chômage est calculée en fonction du « salaire de référence » égale à <span class="text-primary">la moitié du montant obtenu en additionnant le salaire mensuel moyen brut des douze (12) derniers mois au salaire national minimum garanti.</span></p>
                        <p><strong>Salaire de référence</strong> = <b class="text-primary">(Salaire Mensuel Moyen+SNMG)/2</b> :</p>
                        <p>Pour chacune des quatre périodes de prise en charge, le taux de calcul de l'indemnité d'assurance chômage est dégressif et s'établit comme suit :</p>
                        <ul class="ltr-list-caret">
                            <li>	Première période 	: 100 % du salaire de référence</li>
                            <li>	Deuxième période 	: 80% du salaire de référence</li>
                            <li>	Troisième période 	: 60 % du salaire de référence</li>
                            <li>	Quatrième période 	: 50% du salaire de référence</li>
                        </ul>
                    </ul>
                    <br /><br />
                    <h5 class="da-title-4">II- Droits aux avantages de sécurité Sociale :</h5>
                    <p>Le bénéficiaire de l'assurance chômage aura droit :</p>
                    <h6 class="da-title-4">1/ Pendant la période de prise en charge :</h3>
                    <p>Le bénéficiaire de l'indemnité de l'assurance chômage a droit aux :</p>
                    <ul class="ltr-list-caret">
                        <li>	prestations en nature de l'assurance maladie et de l'assurance maternité,</li>
                        <li>	aux allocations familiales et à la validation auprès du régime de retraite de la période de prise en charge par le régime d'assurance chômage comme période d'activité. Le cas échéant, à l'allocation décès en faveur des ayants droit.</li>
                    </ul>
                    <h6 class="da-title-4">2/ Après la période de prise en charge :</h6>
                    <p>A l'expiration de la période de prise en charge et pendant une durée d'une année, le bénéficiaire de l'indemnité de l'assurance chômage qui n'a pas pu se réinsérer dans la vie active continue de bénéficier des prestations en nature de l'assurance maladie (les prestations de l'assurance maternité sont exclues) et des allocations familiales.</p>
                        <div class="alert alert-info">
                            <p><b class="text-primary">Recours :</b> Il est prévu un dispositif de recours qui comprend deux niveaux : </p>
                            <p>Une commission de recours préalable de wilaya et une commission nationale de recours préalable.</p>
                            <p><b class="text-primary">Observation :</b> Un délai de deux mois, à compter de la date de réception de la notification de la décision contestée, est accordé pour introduire un recours.</p>
                        </div>
                    <h5 class="da-title-4">III Obligations : </h5><br /> <br />
                    <h6 class="da-title-4">1/ Présentation de l'attestation de sans emploi "ASE" :</h6>
                    <ul class="ltr-list-caret">
                        <li>o	Pour bénéficier de l'indemnité de l'assurance chômage, l'ex salarié admis à l'assurance chômage doit obligatoirement se faire délivrer par l'ANEM une attestation de sans emploi.</li>
                        <li>o	Cette dernière doit être déposée auprès des services de la CNAC entre le 15 et le 25 de chaque mois.</li>
                        <li>o	Seul l'intéressé peut procéder au pointage sauf cas de force majeure, tels que prévus par la loi.</li>
                        <li>o	Le cumul de l'indemnité d'assurance chômage avec un autre revenu est exclu.</li>
                    </ul>
                    <h6 class="da-title-4">2/ Non cumul d'un autre revenu :</h6>
                    <p>Le bénéficiaire de l'indemnité d'assurance chômage n'a pas le droit de cumuler l'indemnité d'assurance chômage avec un autre revenu procuré par une activité salariée.</p>
                    <h6 class="da-title-4">3/ Déclaration de retour à l'emploi : </h6>
                    <p>Tout bénéficiaire de l'assurance chômage ayant retrouvé un emploi doit en faire la déclaration à la CNAC.</p>
                   
                </div>
            </div>
        </div>
    </section>
    <!-- End Presentation-->


    <!-- Starting Services-->
<section class="top-features pt-5 pb-0 mt-5" id="services">
    <div class="auto-container">
        <div class="row mb-5 mt-3">
            <div class="feature-block col-lg-4 offset-1 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/assurance_chomage.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h5>Régime d’Assurance Chômage</h3>
                    <a href="http://www.cnac.dz:2021/rac/" class="article-Button">Inscription</a>
                </div>
            </div>
            <div class="feature-block col-lg-1 col-md-6 col-sm-12 wow active fadeInUp">
            </div>
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/telechargement.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h5>Téléchargement</h3>
                        <a href="javascript:void(0)" id="telechargement" class="article-Button">Lire Plus</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Ending Services-->

   <!-- Starting Telechargement-->
<section class="faq-section mt-0 pt-0 display-none">
    <div class="auto-container">
        <div class="row">
            <!-- Accordion Column-->
            <div class="accordion-column col-lg-12 col-md-12 col-sm-12">
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
                                        <h4 class="text-dark mb-3"> Assurance Chômage</h4>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Titre</th>
                                                    <th>Format</th>
                                                    <th>Telecharger</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Demande d’octroi de la subvention mensuelle a l’emploi</td>
                                                    <td>PDF</td>
                                                    <td><a href="{{ asset('assets/templates/landing/docs/cdnaccesdvmars2021.pdf') }}" target="_blank" download="Liste des pièces constituant le dossier et Conditions d'accès"><i class="fa fa-download"></i> Telecharger</a></td>
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