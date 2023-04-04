<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\ExportUsers;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;

class ReportController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
        // return Excel::download(new ExportUsers, 'users.xlsx');
    } 
}
