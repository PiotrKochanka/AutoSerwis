<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;
use App\Models\Structure;
use File;
use DB;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lists = Lists::all();
        $structures = Structure::all();

        return view('cms.structure', [
            'structures' => $structures,
            'lists' => $lists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lists = Lists::all();
        $structures = Structure::all();

        return view('cms.list-add', [
            'lists' => $lists,
            'structures' => $structures,
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
        $this->validate($request, [
            'menu' => 'required',
            'title' => 'required',
            'filenames.*' => 'mimes:doc,pdf,docx,zip,png,jpge,jpg,webp,webm',
        ]);

        $lists = new Lists();

        $lists->position = $request->position;

        $lists->menu = $request->menu;

        $lists->title = $request->title;

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = $file->getClientOriginalName();
                $filename = time().'-'.$name;
                if($file->move('gallery/icons', $filename)){
                    $lists->filenames = $filename;
                }
            }
        }

        $lists->link = $request->link;

        $lists->content = $request->content;

        $lists->save();

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function showData($id)
    {
        $lists = Lists::find($id);
        $structures = Structure::all();
        return view('cms.list-edit', [
            'lists' => $lists,
            'structures' => $structures,
        ]);
    }

    public function showData_info($id)
    {
        $lists = Lists::find($id);
        return view('cms.list-edit-info', compact('lists'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $lists = Lists::find($id);

        $lists->menu = $request->menu;

        $lists->title = $request->title;

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $destination = 'gallery/icons/'.$lists->filenames;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $name = $file->getClientOriginalName();
                $filename = time().'-'.$name;
                $file->move('gallery/icons/', $filename);
                $lists->filenames = $filename;
            }
        }

        $lists->link = $request->link;

        $lists->update();
        return redirect()->back()->with('status','Dane zostały zmienione pomyślnie');
    }

    public function update_info(Request $request, $id)
    {
        $lists = Lists::find($id);

        $lists->content = $request->content;

        $lists->update();
        return redirect()->back()->with('status','Dane zostały zmienione pomyślnie');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lists = Lists::find($id);

        DB::delete('delete from lists where id = ?',[$id]);
        return redirect()->back()->with('status','Rekord został usunięty pomyślnie');
    }
}
