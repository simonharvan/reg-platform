<?php

namespace App\Http\Controllers;

use App\Models\CodeText;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        View::share('code_text', $this->getCodeTexts());
    }

    public function getCodeTexts()
    {
        $code_text = CodeText::where('code_id', '=', Session::get('code_id'))->where('language_code', '=', App::getLocale())->first();

        if (!isset($code_text)) {
            $code_text = DB::table('code_texts')
                ->join('codes', 'code_texts.code_id', '=', 'codes.id')
                ->select('code_texts.*', 'codes.event_id')
                ->where('codes.event_id', '=', Session::get('event_id'))
                ->first();
        }
        return $code_text;
    }
}
