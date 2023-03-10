<?php

namespace App\Http\Controllers;
use App\Models\Gallery;
use App\Models\Files;
use App\Models\Realization;
use App\Models\Core;
use File;
use DB;

use Illuminate\Http\Request;

class RealizationsController extends Controller
{
    public function index()
    {
        $realizations = Realization::all();

        return view('cms.realization', [
            'realizations' => $realizations,
        ]);
    }

    public function list()
    {
        $cores = Core::all();
        $realizations = Realization::all();

        return view('realizations-list', [
            'realizations' => $realizations,
            'cores' => $cores,
        ]);
    }

    public function create()
    {
        $realizations = Realization::all();
        $galleries = Gallery::all();

        return view('cms.realization-add', [
            'realizations' => $realizations,
            'galleries' => $galleries,
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'galleryId' => 'required',
            'filenames' => 'required',
            'filenames.*' => 'mimes:doc,pdf,docx,zip,png,jpge,jpg,webp,webm',
        ]);

        $realizations = new Realization();

        $realizations->title = $request->title;

        $realizations->galleryId = $request->galleryId;
        
        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = $file->getClientOriginalName();
                $filename = time().'-'.$name;
                if($file->move('gallery/news', $filename)){
                    $realizations->filenames = $filename;
                }
            }
        }

        $realizations->content = $request->content;

        $realizations->save();

        return redirect("/home/realizacje")->with('status','Udało się dodać element');
    }

    public function destroy($id)
    {
        $realizations = Realization::find($id);

        $destination = 'gallery/news/'.$realizations->filenames;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        DB::delete('delete from realizations where id = ?',[$id]);
        return redirect()->back()->with('status','Rekord został usunięty pomyślnie');
    }
}