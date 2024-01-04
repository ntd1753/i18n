<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class HomeController extends Controller
{
//    public function changeLanguage($language)
//    {
//        if (! in_array($language, ['en', 'vi'])) {
//            abort(400);
//        }
//        App::setLocale($language);
//
//        return view('welcome');
//    }
    public function changeLanguage(Request $request,$language)
    {
        if (! in_array($language, ['en', 'vi'])) {
            abort(400);
        }
        $request->session()->put(['lang' => $language]);
        return redirect()->back();
    }
}
