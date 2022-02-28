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

<section class="faq-section pt-0 rtl">
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
                        <p data-title="">المرحلة 1</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/inventory.svg')}}" alt="Alternate Text" />
                    </a>
                    <a class="tablinks" data-country="etape2">
                        <p data-title="">المرحلة 2</p>
                        <img class="icon-hover" src="{{ asset('assets/templates/landing/images/engineer.svg')}}" alt="Alternate Text" />
                    </a>
                </div>

                <!-- Tab content -->
                <div class="wrapper_tabcontent">
                    {{-- <div id="presentation" class="tabcontent">
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
                    </div> --}}

                    <div id="etape1" class="tabcontent active">
                        <h3>المرحلة 1</h3>
                        <h4>
                            1- إقتناء التجهيزات و/أو المعدات الجديدة  و تركيبها:
                        </h4>
                        <h4>المرحلة1: طلبية التجهيزات و/أو المعدات</h4>
                        <p>إذن التحويل بنسبة10% مشروط بتقديم لدى الصندوق الوطني للتأمين عن البطالة(ص.و.ت.ب)نسخة من  <strong>إتفاقية القرض المبرمة بين البنك وصاحب المشروع.</strong></p>
                        <p>تتجسّد هذه العملية بتسليم الصندوق الوطني للتأمين عن البطالة(ص.و.ت.ب) إذن التحويل بنسبة10% يسمح له بتقديم طلبيته لدى مورد أو عدة موردين.</p>
                        <p>يُسلم البنك المعني لصاحب المشروع صك أو صكوك محررة بإسم المورد أو الموردين مرفقة بتأمين.</p>
                        <h4>المرحلة2: إقتناء المعدات و الأجهزة و تركيبها</h4>
                        <p>يتم تسليم إذن التحويل بنسبة90% لفائدة صاحب المشروع بتقديم شهادة الجاهزية    التي يُشارفيها الخاصيات المفصلة للتجهيزات و/أو المعدات الواجب إقتناءها.</p>
                        <p>يُسلم البنك المعني لصاحب المشروع صك أو صكوك محررة باسم المورد أو الموردين مرفقة بتأمين.</p>
                        <p>خلال مرحلة الإنجاز هذه المحددة بإثنتي عشر(12) شهرا، تُباشر مصالح الصندوق الوطني للتأمين عن البطالة(ص.و.ت.ب) في إجراء متابعة بغرض التثبت من تقدّم  المشروع المنجز.</p>
                        <p></p>
                    </div>

                    <div id="etape2" class="tabcontent">
                        <h3>المرحلة 2</h3>
                        <h4>إنطلاق النشاط و إستغلاله</h4>
                        <h4>1- إنطلاق النشاط:</h4>
                        <div class="alert alert-dark">
                            <h4>بدء نشاط المؤسسة المصغرة يسمح لصاحب المشروع بالإستفادة  من الإمتيازات الجبائية في مرحلة إستغلال المشروع.</h4>
                        </div>
                        <p>لأجل ذلك، يتعيّن على صاحب المشروع إيداع طلب( إستمارة-(ص.و.ت.ب)) للحصول   على مقرر منح الإمتيازات الجبائية في مرحلة إستغلال المشروع (م.م.إ.ج.إ) رفقة المستندات التالية:</p>
                        <ul class="rtl-list-caret">
                            <li>الفواتير النهائية،</li>
                            <li>تصريح القيد الجبائي،</li>
                            <li>نسخة من البطاقة الجبائية،</li>
                            <li>نسخة من السجل التجاري أو وثيقة معادلة،</li>
                            <li>نسخة من ترخيص(نهائي أو مؤقت) لممارسة نشاطات منظّمة أو مصنّفة</li>
                            <li>نسخة من جدول إستيفاء القرض البنكي،</li>
                            <li>نسخة من عقد ملكية أو كراء محل،</li>
                            <li>نسخة من بطاقة الصندوق الإجتماعي للعمال غير الإجراء(CASNOS) أو نسخة من وصل تسديد مستحقات الإشتراك.</li>
                            <li>نسخة من البطاقة الرمادية للسيارة تتضمن عبارة "مرهونة لفائدة الصندوق الوطني للتأمين عن البطالة(ص.و.ت.ب)" أو نسخة من شهادة رهن العتاد المتنقل،</li>
                            <li>ملحق توكيل التأمين المتعدد المخاطر لصالح الصندوق الوطني للتأمين   عن البطالة(ص.و.ت.ب) للصف الثاني،</li>
                            <li>نسخة من رهن حيازة التجهيزات لصالح الصندوق الوطني للتأمين   عن البطالة(ص.و.ت.ب) للصف الثاني، مسجّل لدى المركز الوطني للسجل التجاري(م.و.س.ت).</li>
                        </ul>
                        <h4>2- إستغلال النشاط:</h4>
                        <h4>إلتزامات صاحب المشروع:</h4>
                        <ul>
                            <li>•       إزاء هيئات الضمان الإجتماعي: الصندوق الإجتماعي للعمال غير الإجراء(CASNOS) و الصندوق الوطني للتأمينات الإجتماعية (CNAS)( تحيين الإشتراكات)،</li>
                            <li>إزاء إدارة الضرائب( تصريحات جبائية).</li>
                        </ul>
                        <p>تسديد القروض الممنوحة من طرف البنك (صنف1) و الصندوق الوطني للتأمين              عن البطالة(ص.و.ت.ب) (صنف2).</p>
                        <h4>المتابعة بعد إحداث المؤسسة المصغرة:</h4>
                        <p>تُعد المتابعة "بعد إحداث" المؤسسة المصغرة المبتدئة بمثابة مسعى إلزامي مشخّص.</p>
                        <p>تتم هذه العملية فور بدء النشاط.</p>
                        <p>الغاية منها هو الحفاظ على نشاط المؤسسة المصغرة وضمان ديمومتها.</p>
                        <p>تضمن المصالح المختصة التابعة للصندوق الوطني للتأمين عن البطالة(ص.و.ت.ب)  دعما تقنيا و بيداغوجيا في صيغة نصائح و توجيهات.</p>
                    </div>


                </div>
            </div>
        </section>
    </div>
</section>

@endsection