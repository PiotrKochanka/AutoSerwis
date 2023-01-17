<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Core;
use App\Models\Animation;
use App\Models\News;
use App\Models\Lists;

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

        return view('start', [
            'cores' => $cores,
            'animations' => $animations,
            'news' => $news,
            'lists' => $lists,
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
