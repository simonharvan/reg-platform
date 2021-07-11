<?php

namespace App\Exports;

use App\Models\Registration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RegistrationsExport implements FromCollection, WithHeadings
{

    private $id;
    private $registrations;
    private $keys;

    public function __construct($id)
    {
        $this->id = $id;
        $tmp = Registration::where('event_id' , '=' , $this->id)->with('group');
        $this->registrations = $tmp->get();
        $first = $tmp->first();
        if (isset($first)) {
	        $this->keys = array_keys($first->toArray());
        } else {
	        $this->keys = [];
        }

    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->registrations;
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return $this->keys;
    }
}
