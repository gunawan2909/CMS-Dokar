<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Content;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Dashboard.home.index', [
            'catagories' => Catagory::where('page', 'home')->get(),
            'active' => 'home'
        ]);
    }


    public function create()
    {
        return view('Dashboard.home.input', ['active' => 'home']);
    }


    public function store(Request $request)
    {
        $dataValidate = $request->validate([
            'name_catagory' => 'required|max:255',
            'describe' => 'max:1000',

        ]);
        $data['name'] = $dataValidate['name_catagory'];
        $data['describe'] = $dataValidate['describe'];
        $data['view'] = $request->view;
        $data['page'] = 'home';
        Catagory::create($data);

        return redirect('/dashboard/home')->with('success', 'Data Berhasil Ditambahkan');
    }


    public function show(Catagory $home)
    {
    }


    public function edit($id)
    {

        return view('Dashboard.home.edit', [
            'catagory' => Catagory::find($id),
            'active' => 'home'
        ]);
    }


    public function update(Request $request, $id)
    {
        $dataValidate = $request->validate([
            'name_catagory' => 'required|max:255',
            'describe' => 'max:1000'
        ]);
        $data['name'] = $dataValidate['name_catagory'];
        $data['describe'] = $dataValidate['describe'];
        $data['page'] = 'home';
        $data['view'] = $request->view;
        Catagory::where('id', $id)->update($data);

        return redirect('/dashboard/home')->with('success', 'Data Berhasil Diubah');
    }


    public function destroy(Catagory $home)
    {
        foreach ($home->content as $content) {

            Storage::delete($content->directory);
        }

        Catagory::destroy($home->id);
        return redirect('/dashboard/home')->with('success', 'Data Berhasil Dihapus');
    }
}
