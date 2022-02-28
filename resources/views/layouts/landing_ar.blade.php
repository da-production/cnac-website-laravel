
<!DOCTYPE html>

<html lang="fr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="CAISSE NATIONALE ASSURANCE CHÖMAGE, assurance chômage, prestations, indemnités, dispositif de soutien, création d'activité, réinsertion, formation reconversion, accompagnement, emploi, 35 50 ans, recherche emploi" name="keywords">
    <title>CNAC</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito&amp;display=swap" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="{{ asset('assets/templates/landing/images/logo-cnac.png') }}" rel="shortcut icon" />
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />
    {{-- <link href="https://cdn.plyr.io/1.6.13/plyr.css" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/templates/landing/css/style.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/templates/landing/css/parcours.css')}} ">
    <link rel="stylesheet" href="{{ asset('assets/templates/landing/css/rtl.css')}} ">

</head>
<body>
    <form runat="server">
        <div class="popup_container " >
            <div class="display_flex">
                <div class="popup_content animated">
                    <div class="popup_body  ">
                        <img src="{{ asset('assets/templates/landing/images/mtess.png') }}" alt="">
                        <a href="javascript" class="big-btn clear_popup"></a>
                        <a href="https://araacom.mtess.gov.dz/" target="_blank" class="big-btn"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="preloader">
                <img src="{{ asset('assets/templates/landing/images/preloader.png') }}">
                <div class="spinners"><span class="ouro"><span class="left"><span class="anim"></span></span><span class="right"><span class="anim"></span></span></span></div>
            </div>

            <!-- Starting Top Header-->
            <div class="header top-header" id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-sm-6 col-xs-12">
                            

                        </div>
                        <div class="col-md-2  col-sm-6 direction-rtl">
                            <ul class="lang ">
                                <li><i>اللغة : </i></li>
                                <li><a href="{{ route('language',['locale'=>'fr']) }}">Français</a></li>
                                <li> | </li>
                                <li><a href="{{ route('language',['locale'=>'ar']) }}" class="cairo-right">العربية</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Header-->
            <!-- Banner starting-->
            <div class="bannerContainer">
                <div class="container" id="banner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="text-center"><img src="{{ asset('assets/templates/landing/images/header-ar.jpg') }}" width="100%" style="width: 100% !important;" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Banner-->
            <!-- Starting Main Header-->
            <header class="main-header rtl">
                <div class="main-box">
                    <div class="auto-container-2">
                        <div class="nav-outer clearfix">
                            <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
                            <nav class="main-menu navbar-expand-md navbar-light">
                                <div class="navbar-header">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="icon flaticon-menu-button"></span></button>
                                </div>
                                <div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class="current  "><a href="{{ route('accueil') }}"> &bull; الصفحة الرئيسية </a></li>
                                        <li class="current dropdown">
                                            <a href="javascript:void(0)" class="cairo-right">  &bull; العرض </a>
                                            <ul class="rtl">
                                                <li><a href="{{ route('Presentation') }}">تعريف الصندوق الوطني للتأمين عن البطالة</a></li>
                                                <li><a href="{{ route('MotDG') }}"> رسالة المدير العام </a></li>
                                                <li><a href="{{ route('TextReglementaires') }}">النصوص التنظيمية</a></li>
                                                <li><a href="{{ route('Organisation') }}">التنظيم و التوزيع</a></li>
                                            </ul>
                                        </li>
                                        <li class="current dropdown ">
                                            <a href="javascript:void(0)">  &bull; مهام الصندوق </a>
                                            <ul>
                                                <li><a href="{{ route('AssuranceChomage') }}">التأمين عن البطالة</a></li>
                                                <li><a href="{{ route('Dispositif3055') }}">جهاز دعم لإحداث و توسيع النشاطات من طرف البطالين ما بين 30 و 50 سنة</a></li>
                                                <li><a href="{{ route('Loi0621') }}">جهاز تشجيع و دعم ترقية الشغل</a></li>
                                            </ul>
                                        </li>
                                        <li class="current dropdown ">
                                            <a href="javascript:void(0)">  &bull; خدمات  </a>
                                            <ul>
                                                <li><a href="{{ route('AssuranceChomage') }}#services">التأمين عن البطالة</a></li>
                                                <li><a href="{{ route('Dispositif3055') }}#services">جهاز دعم لإحداث و توسيع النشاطات من طرف البطالين ما بين 30 و 50 سنة</a></li>
                                                <li><a href="{{ route('Loi0621') }}#services">جهاز تشجيع و دعم ترقية الشغل</a></li>
                                            </ul>
                                        </li>
                                        <li class="current ">
                                            <a href="{{ route('AutreServices') }}">  &bull; خدمات أخرى  </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Starting Mobile-->
                <div class="mobile-menu">
                    <div class="menu-backdrop"></div>
                    <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
                    <nav class="menu-box">
                        <div class="nav-logo"><a href="{{ route('accueil') }}"><img src="{{ asset('assets/templates/landing/image/logo.png') }}" alt="" title=""> </a></div>
                        <ul class="navigation clearfix"> </ul>
                    </nav>
                </div>
                <!-- Ending Mobile -->
            </header>

            @yield('content')
            <!-- ending Main Header-->
            <section id="footer"></section>
            <div class="footer-area rtl">
                <div class="white-bg-footer footer-widget py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="foot-title">
                                    <h3 class="cairo-right">العرض</h3>
                                </div>
                                <div class="foot-content">
                                    <ul>
                                        <li><a href="http://192.168.5.15/cnac/fr/"><i class="fa fa-angle-left" aria-hidden="true"></i> رسالة المدير العام </a></li>
                                        <li><a href="http://192.168.5.15/cnac/fr/presentation"><i class="fa fa-angle-left" aria-hidden="true"></i> تعريف الصندوق الوطني للتأمين عن البطالة</a></li>
                                        <li><a href="http://192.168.5.15/cnac/fr/TextesReglementaires"><i class="fa fa-angle-left" aria-hidden="true"></i> Textes réglementaires</a></li>
                                        <li><a href="http://192.168.5.15/cnac/fr/organisation"><i class="fa fa-angle-left" aria-hidden="true"></i> النصوص التنظيمية</a></li>
                                        <li><a href="http://192.168.5.15/cnac/fr/organisation"><i class="fa fa-angle-left" aria-hidden="true"></i> قصة نجاح</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="foot-title">
                                    <h3 class="cairo-right">الخدمات</h3>
                                </div>
                                <div class="foot-content">
                                    <ul>
                                        <li><a href="https://www.cnac.dz/p1/acceuil.html"><i class="fa fa-angle-left" aria-hidden="true"></i> مسار صاحب المشروع </a></li>
                                        <li><a href="https://www.cnac.dz/simule_pnr/default.aspx"><i class="fa fa-angle-left" aria-hidden="true"></i> محاكات عبر الموقع</a></li>
                                        <li><a href="https://www.cnac.dz/inscription_promoteur/inscription_promoteur/winensedjel.aspx"><i class="fa fa-angle-left" aria-hidden="true"></i> وين نسجل</a></li>
                                        <li><a href="https://www.cnac.dz/inscription_promoteur/inscription_promoteur/inscription_p1.aspx"><i class="fa fa-angle-left" aria-hidden="true"></i> تسجيل أولي</a></li>
                                        <li><a href="https://www.cnac.dz/suivi_dossier/accueil_suivi.aspx"><i class="fa fa-angle-left" aria-hidden="true"></i> الملف عبر الموقع</a></li>
                                        <li><a href="https://www.cnac.dz/reechelonnement/inscription_promoteur/inscription_p.aspx"><i class="fa fa-angle-left" aria-hidden="true"></i> إعادة الجدولة</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="foot-title">
                                    <h3 class="cairo-right">مجال المستخدمين</h3>
                                </div>
                                <div class="foot-content">
                                    <ul>
                                        <li><a href="http://192.168.5.15/cnac/fr/PromoteurInfosUtiles"><i class="fa fa-angle-left" aria-hidden="true"></i> المستفيدين من نظام التأمين عن البطالة : معلومات مفيدة </a></li>
                                        <li><a href="http://192.168.5.15/cnac/fr/dispositif"><i class="fa fa-angle-left" aria-hidden="true"></i>المستفيدين من نظام التأمين عن البطالة : خدمات على المباشر </a></li>
                                        <li><a href="http://192.168.5.15/cnac/fr/AllocataireInfosUtiles"><i class="fa fa-angle-left" aria-hidden="true"></i> صاحب المشروع : معلومات مفيدة </a></li>
                                        <li><a href="http://192.168.5.15/cnac/fr/EmployeurInfosUtiles"><i class="fa fa-angle-left" aria-hidden="true"></i> صاحب المؤسسة : معلومات مفيدة </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ts-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="ts-footer-social text-center mb-30">
                                <ul class="glossy">
                                    <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                                </ul>
                            </div><br>
                            <div class="footer-menu text-center mb-25">
                                <ul>
                                    <li><a href="{{ route('accueil') }}">الصفحة الرئيسية</a></li>
                                    <li><a href="{{ route('FAQ') }}">أسئلة و أجوبة</a></li>
                                    <li><a href="{{ route('SiteMap') }}">خريطة الموقع</a></li>
                                    <li><a href="javascript:void(0)" data-toggle="modal" data-target="#contact">إتصلوا بنا</a></li>
                                </ul>
                            </div>
                            <div class="copyright-text text-center">
                                <br>
                                <p>Copyright © 2018 <a href="http://192.168.5.15/cnac/fr/">DaProduction </a>. Tous droits réservés.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div id="live-chat">
            <header class="clearfix">
                <h4>Besoin d'aide ?</h4><span class="chat-message-counter">?</span>
            </header>
            <div class="chat text-center">
                <p>Vous êtes un Visiteur ou un Promoteur et vous avez une question autour de votre facture, ou sur les offres proposées par la CNAC ?</p>
                <hr>
                <div class="btn-box mt-2 text-center"><a class="theme-btn btn-style-two" href="http://192.168.5.15/cnac/fr/">Accéder à la FAQ</a> <a class="theme-btn btn-style-two" href="http://192.168.5.15/cnac/fr/#reseau-national">Nous Contactez</a></div>
            </div>
        </div>
        <div class="light-box">
            <button class="light-btn "><img src="{{ asset('assets/templates/landing/image/light_off.svg') }}" alt=""></button>
        </div>
        <div class="modal-frame">
            <div class="modal">
                <div class="modal-inset">
                    <div class="button close"><i class="fas fa-times"></i></div>
                    <div class="modal-body"><img src="#" alt=""></div>
                </div>
            </div>
        </div>
        <div class="modal-overlay"></div><!--Scroll to top-->
        <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>
        <script src="https://cdn.plyr.io/1.6.13/plyr.js"></script>
        <script src="{{ asset('assets/templates/landing/js/vendors.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcaOOcFcQ0hoTqANKZYz-0ii-J0aUoHjk"></script>
        <script src="{{ asset('assets/templates/landing/js/map-script.js') }}"></script>
        <script src="{{ asset('assets/templates/landing/js/app.js?v=6762297') }}"></script>
        <script src="{{ asset('assets/templates/landing/parcours.js') }}"></script>
        <script src="{{ asset('assets/templates/landing/js/search_ar.js') }}"></script>
        <script async src="https://cse.google.com/cse.js?cx=0fa41df34dcea984a"></script>
        <script>
            $(function () {
                setTimeout(function () {
                    $("input.gsc-input").css({
                        background: 'white !important'
                    });
                    console.log($("input.gsc-input"));
                }, 1000);
            });
        </script>
    </form>
</body>
</html>