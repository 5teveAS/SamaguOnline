<?php

namespace App\Http\Controllers;

use App\Exports\All;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function download()
    {
        return Excel::download(new All, 'SamaguOnline.xlsx');
    }

    public function index()
    {
        return view('settlement-calculator');
    }
    public function databackup()
    {
        return view('table-dataBackup');
    }
}
