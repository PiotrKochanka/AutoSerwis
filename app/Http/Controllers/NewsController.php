<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Core;
use File;
use DB;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view('cms.news', [
            'news' => $news,
        ]);
    }

    public function list()
    {
        $cores = Core::all();
        $news = News::all();

        return view('news-list', [
            'news' => $news,
            'cores' => $cores,
        ]);
    }

    public function archive()
    {
        $cores = Core::all();
        $news = News::all();

        return view('news-list-archive', [
            'news' => $news,
            'cores' => $cores,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news = News::all();

        return view('cms.news-add', [
            'news' => $news,
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
            'title' => 'required',
            'start' => 'required',
            'stop' => 'required',
            'filenames' => 'required',
            'filenames.*' => 'mimes:doc,pdf,docx,zip,png,jpge,jpg,webp,webm',
            'content' => 'required'
        ]);

        $news = new News();

        $news->title = $request->title;

        $news->start = $request->start;
        $news->stop = $request->stop;
        
        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = $file->getClientOriginalName();
                $filename = time().'-'.$name;
                if($file->move('gallery/news', $filename)){
                    $news->filenames = $filename;
                }
            }
        }

        $news->content = $request->content;

        $news->save();

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
        $news = News::find($id);
        return view('cms.news-edit', compact('news'));
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
        $news = News::find($id);

        $news->title = $request->title;

        $news->start = $request->start;
        $news->stop = $request->stop;

        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $destination = 'gallery/news/'.$animations->filenames;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $name = $file->getClientOriginalName();
                $filename = time().'-'.$name;
                $file->move('gallery/news/', $filename);
                $animations->filenames = $filename;
            }
        }
        $news->content = $request->content;

        $news->update();
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
        $news = News::find($id);

        $destination = 'gallery/news/'.$news->filenames;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        DB::delete('delete from news where id = ?',[$id]);
        return redirect()->back()->with('status','Rekord został usunięty pomyślnie');
    }
}
