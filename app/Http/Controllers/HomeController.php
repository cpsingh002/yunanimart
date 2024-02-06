<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UserExport; 
use Maatwebsite\Excel\Excel;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function export( Excel $excel)
    {
        //return Excel::download(new UserExport, 'users.xlsx');
       // return (new UserExport)->download('users.xlsx');
       //return new UserExport;
       // return $excel->download(new UserExport, 'users.xlsx');
        return $excel->download(new UserExport, 'users.csv',Excel::CSV);
      // return $excel->download(new UserExport, 'users.pdf',Excel::DOMPDF);
    }


    public function sdsdsd(Request $request)
    {
        if (Session::has('wishlist')){

            Session::forget('wishlist');
        }
        if (Session::has('cart')){

            Session::forget('cart');
        }
    }
}
