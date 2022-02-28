@extends("layouts.landing_$lang")

@section('content')

<section class="page-title">
    <div class="shape-layers"></div>
    <div class="auto-container">
        <h1>Discours Directeur Generale</h1>
    </div>
</section>
<!-- End breadcrumb-->

<!-- Starting Presentation-->
<section class="faq-section">
    <div class="auto-container">
        <div class="row">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Titre de l'événement</th>
                        <th scope="col">Date d'événement</th>
                        <th>Fichier</th>
                    </tr>
                </thead>
                <tfoot class="thead-dark">
                    <tr>
                        <th scope="col">Titre de l'événement</th>
                        <th scope="col">Date d'événement</th>
                        <th>Fichier</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Titre</td>
                        <td>20/20/2019</td>
                        <td><a class="btn btn-sm btn-primary text-light" download="Titre" href="http://www.google.com"><i class="fa fa-file-pdf"></i> Télécharger</a></td>
                    </tr>
                    <tr>
                        <td>Titre</td>
                        <td>20/20/2019</td>
                        <td><a class="btn btn-sm btn-primary text-light" download="Titre" href="http://www.google.com"><i class="fa fa-file-pdf"></i> Télécharger</a></td>
                    </tr>
                    <tr>
                        <td>Titre</td>
                        <td>20/20/2019</td>
                        <td><a class="btn btn-sm btn-primary text-light" download="Titre" href="http://www.google.com"><i class="fa fa-file-pdf"></i> Télécharger</a></td>
                    </tr>
                    <tr>
                        <td>Titre</td>
                        <td>20/20/2019</td>
                        <td><a class="btn btn-sm btn-primary text-light" download="Titre" href="http://www.google.com"><i class="fa fa-file-pdf"></i> Télécharger</a></td>
                    </tr>
                    <tr>
                        <td>Titre</td>
                        <td>20/20/2019</td>
                        <td><a class="btn btn-sm btn-primary text-light" download="Titre" href="http://www.google.com"><i class="fa fa-file-pdf"></i> Télécharger</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<!-- End Presentation-->

@endsection