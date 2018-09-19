<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    //

    public function change($lang = 'en')
    {
        Session::put('lang', $lang);

        return redirect()->back();
    }

}
