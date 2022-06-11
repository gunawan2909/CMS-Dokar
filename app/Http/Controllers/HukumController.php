<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Catagory;
use Illuminate\Http\Request;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;



class HukumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.hukum.index', [
            'catagories' => Catagory::where('page', 'hukum')->get(),
            'active' => 'hukum'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.hukum.input', [
            'active' => 'hukum',
            'catagory' => Catagory::where('page', 'hukum')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataValidate = $request->validate([
            'name' => 'required|max:255',
            'file' => 'required|',
            'Catagory_id' => 'required'
        ]);

        $dataValidate['directory'] = $request->file('file')->store('Content-file');


        Content::create($dataValidate);

        return redirect('dashboard/hukum')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $hukum)

    {

        Storage::delete($hukum->directory);
        Content::destroy($hukum->id);
        return redirect('dashboard/hukum')->with('success', 'Data Berhasil Diubah');
    }
    public function download(Content $content)
    {
        $path = 'storage/' . $content->directory;
        $name = $content->name . "." . (pathinfo('storage/' . $content->directory, PATHINFO_EXTENSION));
        return response()->download($path, $name);
    }
}
