<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    protected $template;

    public function __construct()
    {
        $this->template = config('app.template');
    }


    public function Index()
    {
        $lang = is_null(session('locale')) ? config('app.locale') : session('locale') ;
        
        return view("$this->template.$lang.index",compact(['lang']));
    }
}
