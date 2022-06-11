<?php

namespace App\Http\Controllers;

use App\Models\Catagory;


class DHomeController extends Controller
{


    public function index()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://dokar.dishub.grobogan.go.id/dokar/pkb/e5118c930603c0f727c40bb793caed7d',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Basic RGlzaHViUEtCMTIzNERva2FyOlBLQkRpc2h1YjEyMzREb2thcg==',
                'Cookie: PHPSESSID=1fhrq4j6b7n775fc0jbf0jclo3'
            ),
        ));

        //array penampung data API Berita 
        $data_berita = json_decode(curl_exec($curl), 1);
        $data_berita = $data_berita['tipe'];
        curl_close($curl);
        return view('Dokar.home.index', [
            'catagories' => Catagory::where('page', 'home')->get(),
            'data_berita' => $data_berita,
            'page' => 'Home'


        ]);
    }
}
