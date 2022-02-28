@extends("layouts.landing_$lang")

@section('content')

<!-- Starting breadcrumb-->
<section class="page-title">
    <div class="shape-layers"></div>
    <div class="auto-container">
        <h1>Allocataire</h1>
        <ul class="bread-crumb clearfix">
            <li class="bread-crumb clearfix"><a href="http://10.16.0.83:3000/">Accueil </a></li>
            <li>Allocataire</li>
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
                        <h2>Vous avez perdu votre emploi pour des raisons économiques</h2>
                    </div>
                </div>
                <h3 class="text-success"> Conditions</h3>
                <h5 class="text-dark">Pour bénéficier de l'indemnité d'assurance chômage, il faut :</h5>
                <ul class="ltr-list-caret">
                    <li>être régi par un contrat de travail à durée indéterminée.</li>
                    <li>être affilié à la sécurité sociale durant une période cumulée d’au moins trois années</li>
                    <li>être adhérent et à jour des cotisations au régime d’assurance chômage depuis au moins de six (06) mois avant la cessation de la relation de travail.</li>
                    <li>figurer sur la liste nominative des salariés ayant fait l’objet d’un licenciement pour raison économique. Cette liste doit être obligatoirement visée par l’inspection du travail territorialement compétente.</li>
                    <li>ne pas avoir refusé un emploi ou une formation reconversion en vue d’un emploi.</li>
                    <li>ne pas bénéficier d’un revenu procuré par une activité professionnelle quelconque.</li>
                    <li>être inscrit comme demandeur d’emploi auprès des services compétent de l’ANEM depuis au moins deux mois.</li>
                    <li>être résidant en Algérie.</li>
                </ul><br />
                <h3 class="text-success"> Vos obligations</h3>
                <h5 class="text-dark">Présentation de l’ASE</h5>
                <p>Pour bénéficier de l’indemnité de l’assurance chômage, l’ex salarié admis à l’assurance chômage doit obligatoirement se faire délivrer par l'ANEM une attestation de sans emploi. Cette dernière doit être déposée auprès des services de la CNAC entre le 15 et le 25 de chaque mois.</p>
                <p>Seul l'intéressé peut procéder au pointage saufs cas de force majeure, tels que prévus par la loi. </p>
                <p>Le cumul de l'indemnité d'assurance chômage avec un autre revenu est exclu. </p><br />
                <h5 class="text-dark">Non cumul d’un autre revenu</h5>
                <p><b>Interdiction de cumuler l’indemnité d’assurance chômage avec d’autres revenus.</b></p>
                <p>Le bénéficiaire de l’indemnité d’assurance chômage n’a pas le droit de cumuler l’indemnité d’assurance chômage avec un autre revenu procuré par une activité salariée ou non salariée. </p><br />
                <h5 class="text-dark">Prescription</h5>
                <p>Le bénéficiaire de l’indemnité d’assurance chômage qui ne se manifeste pas pour déposer l’attestation de sans emploi auprès des services de la CNAC pendant une période de douze mois perd ses droits en la matière. </p>
                <p><b>Le bénéficiaire de l'indemnité d'assurance chômage qui durant la période de prise en charge a retrouvé un emploi régi par un contrat à durée déterminée doit faire la déclaration aux services de la CNAC.</b></p><br />
                <h5 class="text-dark">Déclaration de retour à l’emploi</h5>
                <p>Tout bénéficiaire de l’assurance chômage ayant retrouvé une activité (salariée ou non salariée) doit en faire la déclaration à la CNAC.</p><br />
                <h3 class="text-success"> Vos droits et avantages</h3>
                <h5 class="text-dark">Durée de prise en charge</h5>
                <p>
                    <ul class="ltr-list-caret">
                        <li>La durée de prise en charge est calculée sur l'ancienneté validée de chaque chômeur.</li>
                        <li>Elle est fixée à raison de deux (02) mois par année d’ancienneté validée chez le dernier employeur.</li>
                        <li>Elle ne peut être inférieure à douze (12), ni supérieure à trente six (36) mois.</li>
                        <li>La période de travail supérieure à six (06) mois est considérée comme une ancienneté ouvrant droit à deux mois de prise en charge.</li>
                        <li>La période de travail égale ou inférieure à six (06) mois équivaut à un (01) mois de prise en charge.</li>
                        <li>La durée de prise en charge par l'assurance chômage est répartie en quatre (04) périodes égales.</li>
                    </ul>
                </p>
                <p>Vous pouvez réaliser une simulation en ligne du calcul de la durée de prise en charge <a>ici</a></p><br />
                <h5 class="text-dark">Indemnité d’assurance chômage </h5>
                <p>L’indemnité d’assurance chômage est calculée en fonction du salaire de référence égale à la moitié du montant obtenu en additionnant le salaire mensuel moyen brut des douze derniers mois au salaire national minimum garanti. </p>
                <p>Salaire de référence : Salaire mensuel moyen + SNMG / 2</p>
                <p>
                    Pour chacune des quatre périodes de prise en charge le taux de calcul de l’indemnité d’assurance chômage est dégressif.
                    <ul class="ltr-list-caret">
                        <li>Première période : <b>100%</b> du salaire de référence</li>
                        <li>Deuxième période : <b>80%</b> du salaire de référence</li>
                        <li>Troisième période : <b>60%</b> du salaire de référence</li>
                        <li>Quatrième période : <b>40%</b> du salaire de référence</li>
                    </ul>
                </p>
                <p>Il vous est possible de réaliser une simulation en Line du calcul de votre indemnité d'assurance chômage mensuelle <a>ici</a></p><br />
                <h5 class="text-dark">Droits aux avantages de sécurité sociale</h5>
                <p>
                    Le bénéficiaire de l’assurance chômage aura droit :
                    <ul class="ltr-list-caret">
                        1/ Pendant la période de prise en charge : Le bénéficiaire de l’indemnité de l’assurance chômage a droit :
                        <li>Aux prestations en nature de l’assurance maladie et de l’assurance maternité</li>
                        <li>Aux allocations familiales</li>
                        <li>A la validation auprès du régime de retraite de la période de prise en charge par le régime d’assurance chômage comme période d’activité</li>
                        <li>Le cas échéant, à l’allocation décès en faveur des ayants droit</li>
                    </ul>
                    <ul class="ltr-list-caret">
                        2/ Après la période de prise en charge : A l’expiration de la période de prise en charge et pendant une durée d’une année, le bénéficiaire de l’indemnité de l’assurance chômage qui n’a pu se réinsérer dans la vie active continue de bénéficier :
                        <li>Des prestations en nature de l’assurance maladie (les prestations de l’assurance maternité sont exclues)</li>
                        <li>Des allocations familiales</li>
                    </ul>
                </p><br />
                <h5 class="text-dark">Recours</h5>
                <p>
                    Il est prévu un dispositif de recours qui comprend :
                    <ul class="ltr-list-caret">
                        <li>Une commission de recours préalable de wilaya</li>
                        <li>Une commission nationale de recours préalable</li>
                    </ul><b>Un délai de deux mois à compter de la date de réception de la notification de la décision contestée est accordé pour introduire un recours.</b>
                </p><br />
                <h5 class="text-dark">Bonification</h5>
                <p>La CNAC accorde une bonification d’un mois supplémentaire de prise en charge pour tout bénéficiaire de l’indemnité d’assurance chômage ayant retrouvé une activité salariée ou non salariée.</p><br />
                <h3 class="text-success">Aides à la réinsertion offertes par la CNAC</h3>
                <h5 class="text-dark">Formation et reconversion</h5>
                <p>
                    La formation reconversion est une mesure active pour le retour à l'emploi. La C.N.A.C ne veut pas se confiner au rôle de gestionnaire des prestations. En plus de l'indemnisation de ses allocataires, elle veut améliorer leurs « chances d'employabilité » pour leur permettre de se réinsérer rapidement dans le marché du travail. Comment améliorer leurs chances d'employabilité ?
                    <ul class="ltr-list-caret">
                        <li>Par l'amélioration de leurs qualifications professionnelles.</li>
                        <li>Par le développement de formations bien ciblées et porteuses avec un contenu et une pédagogie adaptée à leurs pré-requis professionnels.</li>
                        <li>Par la mise en place des instruments de gestion des actions de formation-reconversion en vue d'aboutir à l'acquisition et à la maîtrise de techniques de sélection et d'orientations fiables et précises</li>
                    </ul>
                </p><br />
                <h5 class="text-dark">Aide au retour à l’emploi</h5>
                <p><b class="text-dark">Le Centre de Recherche d'Emploi, C.R.E qu'est ce que c'est ?</b></p>
                <p>Une méthode de soutien et de recherche d'emploi de groupe qui a pour but de rendre le chercheur d'emploi autonome dans sa démarche de réinsertion professionnelle au marché du travail. </p>
                <p><b class="text-dark">Philosophie :</b></p>
                <p>L'apprentissage basé sur la répétition d'actions qui entraîne l'intériorisation des comportements. Le développement des attitudes et capacités nécessaires pour faire face à des situations difficiles. Une méthode d'enseignement de techniques comportementales dans la formation des compétences en recherche d'emploi. D'aider l'individu à développer une plus grande confiance en soi. La mise en valeur des qualités et des aptitudes professionnelles de l'individu. </p>
                <p><b class="text-dark">Historique :</b></p>
                <p>Le concept de Centre de Recherche d'Emploi a été développé au début de l'année 1998 par la CNAC à Alger comme opération pilote. Le concept d'origine canadienne fut adapté à l'environnement algérien et connut du succès sur un groupe de 12 personnes pour ensuite s'étendre dans plusieurs autres centres à travers le pays. Le concept a fait ses preuves et est maintenant mis en pratique dans 21 wilayas. </p>
                <p><b class="text-dark">Méthode :</b></p>
                <p>
                    Le CRE est un programme de groupe assisté où entre 12 et 15 participants se rencontrent quotidiennement pendant 3 semaines sous la direction d'un animateur compétent qui fournit le soutien, l'information et le matériel nécessaire au groupe. La méthode mise sur :
                    <ul class="ltr-list-caret">
                        <li>L'apprentissage par l'action</li>
                        <li>Une approche positive et une participation active</li>
                        <li>Le soutien et l'encouragement constant des participants par l'animateur et l'ensemble du groupe</li>
                        <li>Une connaissance des données concrètes du marché du travail</li>
                    </ul>
                </p>
                <p>
                    <b class="text-dark">Techniques :</b>
                    <ul class="ltr-list-caret">
                        <li>L'identification et l'évaluation des intérêts personnels, des aptitudes et compétences professionnelles des participants </li>
                        <li>Présentation de carte de présentation, de Curriculum Vitae, de lettres </li>
                        <li>Préparation et simulation d'appels téléphoniques et d'entrevues filmées avec les employeurs</li>
                    </ul>
                </p>
                <p><b class="text-dark">Clientèle :</b></p>
                <p>Tous prestataires de la CNAC ayant perdu leur emploi de façon involontaire et pour raisons économiques (compression d'effectif et /ou liquidation d'entreprise).</p>
                <p>Personnes ne possédant pas en matière de recherche d'emploi, les compétences et ou la confiance en soi nécessaire pour se mettre en valeur auprès des employeurs.</p>
                <p>Personnes désirant retrouver un emploi salarié. </p>
                <p><b class="text-dark">L'approche C.R.E :</b></p>
                <p>
                    Des analyses statistiques réalisées sur une période de 2 ans dans quelques wilayas démontrent que les CRE ont un taux apprécié d'efficacité de placement. Ce taux varie selon certains facteurs :
                    <ul class="ltr-list-caret">
                        <li>La conjoncture économique du moment</li>
                        <li>L'âge et le type des clients (taux de réussite généralement plus élevé chez les jeunes que chez les 45 ans et plus)</li>
                        <li>Le niveau d'instruction et les antécédents professionnels</li>
                        <li>La provenance des clients (milieu social ? favorisé ou défavorisé)</li>
                        <li>La durée de la période de chômage</li>
                        <li>La région géographique</li>
                    </ul>
                </p>
                <p><b class="text-dark">Personnel requis :</b></p>
                <p>En général, un Centre de Recherche d'Emploi nécessite les services de 4 personnes incluant des professionnels de l'animation (conseillers animateurs), et un support administratif (secrétaire). </p><br />
                <h5 class="text-success">Aide au travail indépendant</h5>
                <p>
                    Le Centre d'Aide au Travail Indépendant est un espace réservé aux porteurs de projets désireux de bénéficier d'un accompagnement dans leur démarche de création d'entreprises. Cet accompagnement sera dispensé au candidat créateur par une équipe de conseillers chargé de :
                    <ul class="ltr-list-caret">
                        <li><b class="text-dark">Informer</b> le candidat - créateur sur des différentes étapes de la création d'entreprise.</li>
                        <li><b class="text-dark">Orienter</b> le candidat - créateur pour permettre une prise de décisions éclairée sur des options fondamentales relatives à son projet.</li>
                        <li><b class="text-dark">Former</b> le candidat - créateur pour acquérir des connaissances fondamentales relatives à son projet. </li>
                        <li><b class="text-dark">Suivre</b> le candidat - créateur pour éviter les déviations qui pourraient interrompre son processus de création. </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End Presentation-->

@endsection