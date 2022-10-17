<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CodeText extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'code_id',
        'language_code',
        'instructions'
    ];

    public function code()
    {
        return $this->belongsTo('Code');
    }

    public static function getCodeTextForEvent($code_id, $event_id, $appLocale)
    {
        $code_text = CodeText::where('code_id', '=', $code_id)->where('language_code', '=', $appLocale)->first();

        if (!isset($code_text)) {
            $code_text = DB::table('code_texts')
                ->join('codes', 'code_texts.code_id', '=', 'codes.id')
                ->select('code_texts.*', 'codes.event_id')
                ->where('codes.event_id', '=', $event_id)
                ->first();
        }
        return $code_text;
    }

}
