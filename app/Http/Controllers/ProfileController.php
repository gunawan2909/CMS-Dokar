<?php

namespace App\Http\Controllers;

use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.Profile.index', [
            'catagories' => Catagory::where('page', 'profile')->get(),
            'active' => 'profile'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.Profile.input', ['active' => 'profile']);
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
        $data['page'] = 'profile';
        $data['view'] = $request->view;
        Catagory::create($data);

        return redirect('/dashboard/profile')->with('success', 'Data Berhasil Ditambahkan');
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
    public function edit(Catagory $profile)
    {
        return view('Dashboard.profile.edit', [
            'catagory' => $profile,
            'active' => 'profile'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catagory $profile)
    {
        $dataValidate = $request->validate([
            'name_catagory' => 'required|max:255',
            'describe' => 'max:1000'
        ]);
        $data['name'] = $dataValidate['name_catagory'];
        $data['describe'] = $dataValidate['describe'];
        $data['page'] = 'profile';
        $data['view'] = $request->view;
        Catagory::where('id', $profile->id)->update($data);

        return redirect('/dashboard/profile')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catagory $profile)
    {
        foreach ($profile->content as $content) {

            Storage::delete($content->directory);
        }

        Catagory::destroy($profile->id);
        return redirect('/dashboard/profile')->with('success', 'Data Berhasil Dihapus');
    }
}
