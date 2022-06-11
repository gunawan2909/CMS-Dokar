<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DPofileController extends Controller
{
    public function index()
    {
        return view('Dokar.profile.index', [
            'catagories' => Catagory::where('page', 'profile')->get(),
            'page' => 'Profile'

        ]);
    }
}
