<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    protected $template;

    public function __construct()
    {
        $this->template = config('app.template');
    }

    public function AssuranceChomage()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.assurance-chomage", compact(['lang']));
    }

    public function Dispositif3055()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.dispositif-30-55", compact(['lang']));
    }

    public function Loi0621()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.Loi0621", compact(['lang']));
    }

    public function Presentation()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.presentation", compact(['lang']));
    }

    public function MotDG()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.mot-dg", compact(['lang']));
    }

    public function TextReglementaires()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.text-reglementaires", compact(['lang']));
    }

    public function Organisation()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.organisation", compact(['lang']));
    }

    public function AllocataireInfosUtiles()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.allocataire-infos-utiles", compact(['lang']));
    }

    public function AutreServices()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.autre-services", compact(['lang']));
    }

    public function Communique()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.communique", compact(['lang']));
    }

    public function Contact()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.contact", compact(['lang']));
    }

    public function DossierPresse()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.dossier-presse", compact(['lang']));
    }

    public function EmployeurInfosUtiles()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.employeur-infos-utiles", compact(['lang']));
    }

    public function FCMG()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.fcmg", compact(['lang']));
    }

    public function Organismes()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.oragnismes", compact(['lang']));
    }

    public function Parcours()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.parcours", compact(['lang']));
    }

    public function PromoteurInfosUtiles()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.promoteur-infos-utiles", compact(['lang']));
    }

    public function ServicesEnLigne()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.services-en-ligne", compact(['lang']));
    }

    public function SiteMap()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.sitemap", compact(['lang']));
    }

    public function DiscoursDg()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        return view("$this->template.$lang.discours-dg", compact(['lang']));
    }

}
