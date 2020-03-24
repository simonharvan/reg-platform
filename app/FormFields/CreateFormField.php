<?php


namespace App\FormFields;


use TCG\Voyager\FormFields\AbstractHandler;

class CreateFormField extends AbstractHandler
{
    protected $codename = 'Create form field';

    public function createContent($row, $dataType, $dataTypeContent, $options)
    {
        return view('formfields.create', [
            'row' => $row,
            'options' => $options,
            'dataType' => $dataType,
            'dataTypeContent' => $dataTypeContent
        ]);
    }
}
