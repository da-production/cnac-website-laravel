@extends("layouts.landing_$lang")

@section('content')
    
    <!-- Starting breadcrumb-->
    <section class="page-title">
        <div class="shape-layers"></div>
        <div class="auto-container">
            <h1>التأمين عن البطالة</h1>
        </div>
    </section>
    <!-- End breadcrumb-->

    <!-- Starting Presentation-->
    <section class="faq-section pt-0 mt-5 rtl" id="content">
        <div class="auto-container">
            <div class="row">
                <!-- Accordion Column-->
                <div class="accordion-column col-lg-12 col-md-12 col-sm-12">
                    <p>بتاريخ السادس و العشرين (26) من شهر ماي 1994، و بموجب مرسومين تشريعيين منشورين بالجريدة الرسمية رقم (34) ، أُنشأ نظام التأمين عن البطالة لفائدة أجراء القطاع الاقتصادي الذين فقدوا مناصب عملهم بصفة لا إرادية و لأسباب إقتصادية إمّا بالتسريح الإجباري أم بتوقّف نشاط المستخِدم
                        تعدّ البطالة المتفشية لأسباب اقتصادية مع مطلّع سنة 1994 بمثابة خطر من مخاطر الضمان الاجتماعي كالمرض وحوادث العمل، إلخ ...</p>

                    <p>من جهة أخرى ، يسمح نظام التأمين عن البطالة المستخدمين العموميين و الخواص بحيازة آلية لمجابهة الصّعوبات الإقتصادية، المالية و التقنية التي تعرّض مصير مؤسساتهم للخطر بتقليص تعدادها و اضمحلال وظائفها المأجورة</p>
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
                    <h5>التأمين عن البطالة</h3>
                    <a href="http://www.cnac.dz:2021/rac/" class="article-Button">تسجيل</a>
                </div>
            </div>
            <div class="feature-block col-lg-1 col-md-6 col-sm-12 wow active fadeInUp">
            </div>
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/telechargement.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h5>تحميل</h3>
                        <a href="javascript:void(0)" id="telechargement" class="article-Button">عرض</a>
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
                                تحميل
                                <div class="icon icon_plus_alt2"></div>
                            </div>
                            <div class="acc-content" style="display: block; ">
                                <div class="content">
                                    <div class="text">
                                        <table class="table table-bordered rtl">
                                            <thead>
                                                <tr>
                                                    <th>عنوان</th>
                                                    <th>شكل</th>
                                                    <th>تحميل</th>
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