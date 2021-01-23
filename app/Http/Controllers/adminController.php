<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
// use Yajra\Datatables\Datatables;
//use config\datatables;

class adminController extends Controller
{
    public function index(){
        return view('dadmin');
    }

    public function datapemilih(){
        // return Datatabbles::of(User::query())->make(true);
        return view('datauser');
    }

    public function suaramasuk(){
        return view('suaramasuk');
    }
}
