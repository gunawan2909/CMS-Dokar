<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.pelayanan.index', [
            'catagories' => Catagory::where('page', 'pelayanan')->get(),
            'active' => 'pelayanan'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.pelayanan.input', ['active' => 'pelayanan']);
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
            'name_catagory' => 'required|max:255',
            'describe' => 'max:1000'
        ]);
        $data['name'] = $dataValidate['name_catagory'];
        $data['describe'] = $dataValidate['describe'];
        $data['page'] = 'pelayanan';
        $data['view'] = $request->view;
        Catagory::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(Catagory $pelayanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(Catagory $pelayanan)
    {
        return view('Dashboard.pelayanan.edit', [
            'catagory' => $pelayanan,
            'active' => 'pelayanan'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catagory $pelayanan)
    {
        $dataValidate = $request->validate([
            'name_catagory' => 'required|max:255',
            'describe' => 'max:1000'
        ]);
        $data['name'] = $dataValidate['name_catagory'];
        $data['describe'] = $dataValidate['describe'];
        $data['page'] = 'pelayanan';
        $data['view'] = $request->view;
        Catagory::where('id', $pelayanan->id)->update($data);

        return redirect('/dashboard/pelayanan')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagory $pelayanan)
    {
        foreach ($pelayanan->content as $content) {

            Storage::delete($content->directory);
        }

        Catagory::destroy($pelayanan->id);
        return redirect('/dashboard/pelayanan')->with('success', 'Data Berhasil Dihapus');
    }
}
