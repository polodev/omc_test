<?php

namespace App\Http\Controllers;

use App\Omc;
use Illuminate\Http\Request;

class OmcController extends Controller
{
    public function index()
    {
      $omcs = Omc::all();
      return view('omc.index', compact('omcs'));
    }
}
