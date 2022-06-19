<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class DKontakController extends Controller
{
    public function index()
    {
        return view('Dokar.kontak.index', [
            'catagories' => Content::where('name', 'Dokar')->get(),
            'page' => 'Hubungi Kami'

        ]);
    }
}
