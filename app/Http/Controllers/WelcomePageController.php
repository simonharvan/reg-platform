<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class WelcomePageController extends Controller
{

    public function index()
    {
        $code_text = $this->getCodeTexts();

        if (!isset($code_text)) {
            return Redirect::to('/registration/create');
        }
        Session::put('lang', $code_text->language_code);
        App::setLocale($code_text->language_code);
        return View::make('welcome-page', array('welcome_text' => $code_text->instructions));
    }
}
