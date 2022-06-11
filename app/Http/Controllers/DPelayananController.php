<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DPelayananController extends Controller
{
    public function index()
    {
        return view('Dokar.pelayanan.index', [
            'catagories' => Catagory::where('page', 'pelayanan')->get(),
            'page' => 'Pelayanan'

        ]);
    }
}
