@extends("layouts.landing_$lang")

@section('content')


<!-- Starting breadcrumb-->
<section class="page-title">
    <div class="shape-layers"></div>
    <div class="auto-container">
        <h1>جهاز دعم و توسيع النّشاطات من طرف البطالين ذوي المشاريع البالغين ما بين ثلاثين وخمسة و خمسين سنة</h1>
    </div>
</section>
<!-- End breadcrumb-->
<!-- Starting Presentation-->
<section class="faq-section rtl">
    <div class="auto-container">
        <div class="row">
            <!-- Accordion Column-->
            <div class="accordion-column col-lg-12 col-md-12 col-sm-12">
                
                <p class="cairo-right">بتجربته المستوفية في مجال المرافقة عبر شبكة مراكزه المدعّمة للعمل الحرّ المنشأة سنة 1998 بكامل التراب الوطني، عكّف الصندوق الوطني للتأمين عن البطالة (ص.و.ت.ب) على تخصيص و إعداد لأصحاب المشاريع فضاء يضمن التوفيق المهني الاجتماعي تماشيا مع الأسس القانونية المسيّرة لجهاز دعم إحداث و توسيع النشاطات من طرف البطالين ذوي المشاريع البالغين ما بين ثلاثين (30) و خمسين (50) سنة :</p>
                <p class="cairo-right">على هذا الأساس القانوني، باشر الصندوق الوطني للتأمين عن البطالة (ص.و.ت.ب) في إرساء ميكانيزمات داخلية و بناء شراكة وطيدة مع وزارات و مؤسسات تعمل على تجسيد صلاحياته الجديدة</p>
                <p class="cairo-right">تكمّن الخدمات الموجّهة لذوي المشاريع عبر المراكز المتخصّصة في المرافقة الشّخصية طيلة مراحل إنشاء النشاط و التّصديق على الخبرات المهنيّة و المساعدة على دراسة المشاريع المعروضة على لجان الانتقاء و الاعتماد</p>
                <p class="cairo-right">ترتكز الاستثمارات المنجزة في الميدان على أساس نمط التمويل الذاتي أو التمويل الثلاثي يشترك فيه كل من صاحب المشروع و البنك و الصندوق الوطني للتأمين عن البطالة بتكلفة إستثمارية لا تتعدّى عشرة (10) ملايين ديناراً جزائرياَ</p>
                <p class="cairo-right">فضلا عن ذلك، تمّ تقرير مساعدات و امتيازات ماليّة و جبائية لصالح كلّ شخص يستوفي شروط الالتحاق بالجهاز بما في ذلك: السّن و فترة البطالة و التأهيل أو المهارة المكتسبة في النشاط المراد إنجازه و القدرة على المساهمة في تمويل المشروع (الـمرافـقـة)</p>
                <p class="cairo-right">بخصوص عملية تقويم خبرات أصحاب المشاريع المهنية، فإنها تتّم بتمويلٍ من الصندوق الوطني للتأمين عن البطالة وإسهامٍ من وزارة التكوين والتعليم المهنيين وباقي القطاعات المعنية (التـصديق على المـؤهلات المـهنية)
علاوة على ذلك، خصّص لصالح ذوي المشاريع المؤهلين إمتيازات متمثلة في :
</p>
                <p class="cairo-right">
                    <ul class="cairo-right">
                        <li class="cairo-right">	تخفيض نسب فوائد القروض البنكية</li>
                        <li class="cairo-right">الاستفادة من قرض غير مكافئ (بدون فائدة) ممنوح من طرف الصندوق الوطني للتأمين عن البطالة</li>
                        <li class="cairo-right">إمكانية توسيع المشروع </li>
                    </ul>
                </p>
                <p class="cairo-right">فيما يتعلّق بمخاطر قروض الاستثمارات، تمّ إنشاء صندوق الضمان لمرافقة البنوك الشريكة و استيفاء الديون و الفوائد المترتبة في حدود سبعين (70) بالمائة (الإمتيازات المالية)</p>
            </div>
        </div>
    </div>
</section>


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
                    <a href="" class="article-Button">اقرأ أكثر</a>
                </div>
            </div>
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/services.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h3>خدمات عبر الانترنت</h3>
                    <a href="javascript:void(0)" target="_blank" class="article-Button">عرض</a>
                </div>
            </div>
            <div class="feature-block col-lg-4 col-md-6 col-sm-12 wow active fadeInUp">
                <div class="product__resources__item">
                    <div style="background: url({{ asset('assets/templates/landing/images/telechargement.jpg') }}) no-repeat center left; " class="product__resources__item__img"></div>
                    <h3>تحميل</h3>
                    <a href="javascript:void(0)" id="telechargement" class="article-Button">عرض</a>
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