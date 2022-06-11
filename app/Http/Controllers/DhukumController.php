<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DhukumController extends Controller
{
    public function index()
    {
        return view('Dokar.hukum.index', [
            'catagories' => Catagory::where('page', 'hukum')->get(),
            'page' => 'hukum'

        ]);
    }
}
