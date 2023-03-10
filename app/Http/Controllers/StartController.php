<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Core;
use App\Models\Animation;
use App\Models\News;
use App\Models\Lists;
use App\Models\Realization;
use App\Models\Gallery;
use App\Models\Files;

class StartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cores = Core::all();
        $animations = Animation::all();
        $news = News::all();
        $lists = Lists::all();
        $realizations = Realization::all();

        return view('start', [
            'cores' => $cores,
            'animations' => $animations,
            'news' => $news,
            'lists' => $lists,
            'realizations' => $realizations,
        ]);
    }

    public function subpage()
    {
        $news = News::all();
        $cores = Core::all();
        
        foreach($news as $new){
            return view('subpage', [
                'cores' => $cores,
                'news' => $news,
            ]);
        }
    }

    public function realizationSubpage()
    {
        $realizations = Realization::all();
        $files = Files::all();
        $cores = Core::all();
        
        foreach($realizations as $realization){
            return view('realizations-subpage', [
                'cores' => $cores,
                'files' => $files,
                'realizations' => $realizations,
            ]);
        }

        // $realizations = Realization::all();
        // $galleries = Gallery::find($id);
        // $files = Files::all()->where('galleryId', '=', $id);
        // $cores = Core::all();

        // return view('realizations-subpage', [
        //     'cores' => $cores,
        //     'realizations' => $realizations,
        //     'galleries' => $galleries,
        //     'files' => $files,
        // ], compact('files'));
    }

    public function subpageInfo()
    {
        $lists = Lists::all();
        $cores = Core::all();
        
        foreach($lists as $list){
            return view('subpage-info', [
                'cores' => $cores,
                'lists' => $lists,
            ]);
        }
    }
}
