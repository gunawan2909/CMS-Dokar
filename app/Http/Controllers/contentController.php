<?php

namespace App\Http\Controllers;

use App\Models\Content;
use App\Models\Catagory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class contentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'body' => 'required',
            'image' => 'required|image|file|max:2024',
            'Catagory_id' => 'required'
        ]);

        $dataValidate['directory'] = $request->file('image')->store('Content-image');


        Content::create($dataValidate);
        $con = '/dashboard/' . strtolower($request->page) . '/' . $request->Catagory_id . '/edit';
        return redirect($con)->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function edit(Content $content)
    {

        return view('Dashboard.edit', [
            'content' => $content,
            'active' => $content->catagory->page
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {


        $dataValidate = $request->validate([
            'name' => 'required|max:255',
            'body' => 'required',
            'image' => 'image|file|max:2024',
            'Catagory_id' => 'required'
        ]);

        $data = [
            'name' => $request->name,
            'body' => $request->body,
            'Catagory_id' => $request->Catagory_id

        ];
        if ($request->file('image')) {
            if ($content->directory) {
                Storage::delete($content->directory);
            }
            $data['directory'] = $request->file('image')->store('Content-image');
        }


        Content::where('id', $content->id)->update($data);
        $con = '/dashboard/' . strtolower($content->catagory->page) . '/' . $request->Catagory_id . '/edit';

        return redirect($con)->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function destroy(Content $content)
    {
        $con = '/dashboard/' . strtolower($content->catagory->page)  . '/' . $content->Catagory_id . '/edit';

        Storage::delete($content->directory);
        Content::destroy($content->id);
        return redirect($con)->with('success', 'Data Berhasil Diubah');
    }


    public function createContent(Catagory $catagory)
    {
        return view('Dashboard.input', [
            'catagory' => $catagory,
            'active' => $catagory->page
        ]);
    }
}
