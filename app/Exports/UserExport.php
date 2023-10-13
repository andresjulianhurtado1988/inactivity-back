<?php

namespace App\Exports;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class UserExport implements FromView
{
    /**
     * @return \Illuminate\Support\Collection
     */

    protected $ventas;

    function __construct($ventas)
    {
        $this->misDatos = $ventas;

    }
    public function view(): View
    {

  
        return view('exportExcel', [
            'data' => $this->misDatos
        ]);

    }

}