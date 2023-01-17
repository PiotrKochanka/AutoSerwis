<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animation;
use DB;
use File;

class AnimationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $animations = Animation::all();

        return view('cms.animation', [
            'animations' => $animations,
        ]);
    }

    public function startAnimation(){
        $animations = Animation::all();

        return view('start', [
            'animations' => $animations,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.animation-add');
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
            'title' => 'required',
            'filenames' => 'required',
            'filenames.*' => 'mimes:doc,pdf,docx,zip,png,jpge,jpg,webp,webm'
        ]);

        $animations = new Animation();

        $animations->title = $request->title;
        
        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = $file->getClientOriginalName();
                $filename = time().'-'.$name;
                if($file->move('gallery/animations', $filename)){
                    $animations->filenames = $filename;
                    $animations->save();

                    return redirect('/home');
                }
            }
        }
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
        $animations = Animation::find($id);
        return view('cms.animation-edit', compact('animations'));
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
        $animations = Animation::find($id);

        $animations->title = $request->title;

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $destination = 'gallery/animations/'.$animations->filenames;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $name = $file->getClientOriginalName();
                $filename = time().'-'.$name;
                $file->move('gallery/animations/', $filename);
                $animations->filenames = $filename;
            }
        }

        $animations->update();
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
        $animations = Animation::find($id);

        $destination = 'gallery/animations/'.$animations->filenames;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        DB::delete('delete from animations where id = ?',[$id]);
        return redirect()->back()->with('status','Rekord został usunięty pomyślnie');
    }
}
