<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
{
    $users = User::all();

    return view('reportes.report', compact('users'));
}

    
}
