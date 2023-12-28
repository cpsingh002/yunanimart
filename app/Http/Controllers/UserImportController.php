<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UserImport;
use Maatwebsite\Excel\Facades\Excel;

class UserImportController extends Controller
{
    public function show()
    {
        return view('users.import');
    }
    public function store(Request $request)
    {
        $file = $request->file('file')->store('import');

        //Excel::import(new UserImport, $file);
        //(new UserImport)->import($file);
        $import = new UserImport;
        $import->import($file);
        if($import->failures()->isNotEmpty()){
            return back()->withFailures($import->failures());
        }
       // dd($import->errors());
        return back()->withStatus('excel file imporeted');
    } 
}
