<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    //

    public function changeLanguage($locale)
    {
        if (in_array($locale, ['en', 'id'])) {
            App::setlocale($locale);
            session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
