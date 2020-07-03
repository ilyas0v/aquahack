<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WordLevel;

class WordLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $word_levels = WordLevel::all();
        return view('admin.word_levels.index', compact('word_levels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.word_levels.create');
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
            'name' => 'required|string|max:100',
        ]);

        $wl = new WordLevel();
        $wl->name = $request->name;
        $wl->save();

        \Session::flash('success_message' , 'Level has been added');
        return redirect()->route('word_levels.index');
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
        $level = WordLevel::findOrFail($id);

        return view('admin.word_levels.edit', compact('level'));
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
        $this->validate($request, [
            'name' => 'required|string|max:100',
        ]);

        $wl = WordLevel::findOrFail($id);
        $wl->name = $request->name;
        $wl->save();

        \Session::flash('success_message' , 'Level has been edited');
        return redirect()->route('word_levels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $level = WordLevel::findOrFail($id);
        $level->delete();

        \Session::flash('success_message' , 'Level has been deleted');
        return redirect()->route('word_levels.index');
    }
}
