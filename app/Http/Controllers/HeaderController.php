<?php
namespace App\Http\Controllers;

use App\Models\Proyecto;
use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function show()
    {
        return view('proyecto');
    }

    public function index()
    {
        $dotHeader = Proyecto::all();

        return view('proyecto', compact('dotHeader'));
    }
}