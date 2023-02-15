<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Files;

use Illuminate\Http\Request;

class GalleriesController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();

        return view('cms.galleries', [
            'galleries' => $galleries,
        ]);
    }

    public function create()
    {
        $galleries = Gallery::all();

        return view('cms.galleries-add', [
            'galleries' => $galleries,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $galleries = new Gallery();

        $galleries->name = $request->name;

        $galleries->save();

        return redirect("/home/galerie")->with('status','Udało się dodać element');
    }

    public function send()
    {
        $galleries = Gallery::all();

        return view('cms.galleries-files-add', [
            'galleries' => $galleries,
        ]);
    }

    public function push(Request $request)
    {
        $this->validate($request, [
            'filename' => 'required',
            'filename.*' => 'mimes:doc,pdf,docx,zip,png,jpge,jpg,webp,webm',
        ]);

        $files = new Files();

        $files->galleryId = $request->galleryId;
        

        if($request->hasfile('filename'))
        {
            foreach($request->file('filename') as $file)
            {
                $name = $file->getClientOriginalName();
                $filename = $name;
                $data[] = [
                    'galleryId' => $request->galleryId,
                    'filename' => $files->filename = $filename
                ];
                if($file->move('gallery/photogallery', $filename)){
                    $files->filename = 0;
                }
            }
        }

        Files::insert($data);

        $files->save();

        return redirect()->back()->with('status','Dane zostały zmienione pomyślnie');
    }

    public function inside($id)
    {
        $galleries = Gallery::find($id);
        $files = Files::all();

        return view('cms.galleries-files', [
            'galleries' => $galleries,
            'files' => $files,
        ], compact('files'));
    }
}