<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
class LocaleController extends Controller
{
    public function setLocale($locale)
    {


            Session::put('locale',$locale);
            App::setLocale($locale);

            Cookie::queue('locale', $locale, 60*24*365);
            return redirect()->back();






    }
}
