<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExcelExport implements FromView
{
    /**
     * @return View
     */
    public function view(): View
    {
        return view('excel-report');
    }
}
