<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lists;
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

        return view('cms.structure', [
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

        return view('cms.list-add', [
            'lists' => $lists,
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
        ]);

        $lists = new Lists();

        $lists->menu = $request->menu;

        $lists->title = $request->title;

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
        return view('cms.list-edit', compact('lists'));
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

        $lists->link = $request->link;

        $lists->content = $request->content;

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
