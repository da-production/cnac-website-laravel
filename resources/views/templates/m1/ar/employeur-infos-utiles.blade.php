@extends("layouts.landing_$lang")

@section('content')

<!-- Starting breadcrumb-->
<section class="page-title">
    <div class="shape-layers"></div>
    <div class="auto-container">
        <h1>Employeur</h1>
        <ul class="bread-crumb clearfix">
            <li class="bread-crumb clearfix"><a href="http://10.16.0.83:3000/">Accueil </a></li>
            <li>Employeur</li>
        </ul>
    </div>
</section>
<!-- End breadcrumb-->

<!-- Starting Presentation-->
<section class="faq-section">
    <div class="auto-container">
        <div class="row">
            <!-- Accordion Column-->
            <div class="accordion-column col-lg-12 col-md-12 col-sm-12">
                <div class="inner-column">
                    <div class="sec-title style-two text-center">
                        <span class="title">INFORMATIONS UTILES</span>
                        <h2>Introduction</h2>
                    </div>
                </div>
                <p class="text-center">En cas de compression des effectifs ou de cessation d'activité, les employeurs publics et privés relevant du secteur économique ont la possibilité de faire bénéficier leurs effectifs licenciés (pour raison économique) de notre dispositif d'Assurance Chômage.</p>
                <h3 class="text-success">Conditions</h3>
                <p>
                    Aux termes des dispositions du décret législatif n°94-11 du 26 Mai 1994, l'employeur doit satisfaire à deux obligations :
                    <ul class="ltr-list-caret">
                        <li>L'employeur doit être à jour de ses cotisations de sécurité sociale. Il doit produire dans le dossier d'admission une attestation de mise à jour. Dans le cas où il n'est pas à jour, il devra obtenir un échéancier de paiement dans les conditions prévues par les dispositions en vigueur.</li>
                        <li>l'employeur doit verser une Contribution dite d'Ouverture des Droits "C.O.D." pour chaque salarié.</li>
                    </ul>
                </p><br />
                <h5 class="text-dark">Montant de la contribution</h5>
                <p>Le montant de la COD est calculé à raison de 80% d'un mois de salaire par année d'ancienneté dans la limite globale de 12 mois de salaire, assurant ainsi la couverture d'une ancienneté maximale de 18 années. </p>
                <p>La C.O.D n'est pas due pour les 3 premières années d'ancienneté; ce qui veut dire que l'employeur n'est pas redevable de cette contribution pour tout salarié cumulant une ancienneté inférieure ou égale à 3 ans. </p><br />
                <h5 class="text-dark">Décompte de la C.O.D </h5>
                <p>Est assimilé à une année de travail donnant lieu au versement de 80% d'un mois de salaire toute période de travail supérieure à 6 mois et inférieure ou égale à une année. </p>
                <p>Toute période de travail comprise entre 1 jour et 6 mois au cours d'une année donne lieu à paiement d'une C.O.D égale à 40% d'un mois de salaire. </p>
                <p>Nous vous donnons la possibilité de réaliser une simulation pour le calcul du montant de la C.O.D.</p><br />
                <h3 class="text-success">Avantages</h3>
                <p>
                    La CNAC est à la disposition des employeurs du secteur économique public et privé pour leur fournir les aides et avantages suivants :
                    <ul class="ltr-list-caret">
                        <li>Toutes les informations relatives aux modalités de prise en charge des salariés licenciés de façon involontaire et pour raison économique dans le cadre d'une compression d'effectif ou d'une cessation d'activité.</li>
                        <li>L'assistance dans la constitution du dossier des licenciements pour motif économique en délivrant à l'employeur concerné les imprimés nécessaires.</li>
                        <li>La possibilité d’établir un échéancier de paiement de la contribution d’ouverture des droits (COD), sans intérêt lorsque l’employeur s’engage à rembourser dans un délai inférieur ou égal à quinze (15) mois.</li>
                        <li>L’exonération de la COD, lorsque l’ancienneté des salariés est inférieure ou égale à trois (03) ans.</li>
                    </ul>
                </p><br />
                <h3 class="text-success">Obligations</h3>
                <p>
                    Les employeurs ayant opté pour le volet social doivent :
                    <ul class="ltr-list-caret">
                        <li>Etablir, par lieu de travail, la liste nominative des salariés concernés par le licenciement et la faire viser par l’inspecteur du travail territorialement compétent.</li>
                        <li>Constituer pour chaque travailleur concerné un dossier comportant les pièces justificatives.</li>
                        <li>Constituer pour chaque travailleur concerné un dossier comportant les pièces justificatives.</li>
                        <li>Déposer la liste nominative des salariés concernés, accompagnée des dossiers de chacun d’entre eux et d’une demande d’admission signé par lui-même ou par son représentant, auprès des services de la CNAC compétents, dans la semaine qui suit la notification des décisions de licenciement.</li>
                        <li>S'acquitter de la Contribution d'Ouverture des droits calculée par les services concernés de la CNAC, ou bien établir une convention fixant les modalités de versement de la COD.</li>
                        <li>Obtenir les notifications d’admission et les adresser aux salariés concernés. Procéder à la première inscription des salariés comme demandeur d’emploi auprès de l’ANEM.</li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Presentation-->

@endsection