<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){
        // Restituisce la dashboard amministratore
        return view('admin.dashboard');
    }
}
