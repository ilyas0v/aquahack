<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;
use App\WordLevel;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $words = Word::paginate(30);

        return view('admin.words.index', compact('words'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = WordLevel::all();
        return view('admin.words.create', compact('levels'));
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
            'level_id' => 'required|integer|exists:word_levels,id',
            'word_az'  => 'required|string|max:190',
            'word_de'  => 'required|string|max:190',
        ]);

        $w = new Word();
        $w->level_id = $request->level_id;
        $w->word_az  = $request->word_az;
        $w->word_de  = $request->word_de;

        $w->user_id  = \Auth::user()->id; 
        $w->save();

        \Session::flash('success_message' , 'Word has been added');
        return redirect()->route('words.index');
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
        $levels = WordLevel::all();
        $word = Word::findOrFail($id);

        return view('admin.words.edit', compact('levels', 'word'));
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
            'level_id' => 'required|integer|exists:word_levels,id',
            'word_az'  => 'required|string|max:190',
            'word_de'  => 'required|string|max:190',
        ]);

        $w = Word::findOrFail($id);
        $w->level_id = $request->level_id;
        $w->word_az  = $request->word_az;
        $w->word_de  = $request->word_de;

        $w->save();

        \Session::flash('success_message' , 'Word has been edited');
        return redirect()->route('words.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $word = Word::findOrFail($id);
        $word->delete();

        \Session::flash('success_message' , 'Word has been deleted');
        return redirect()->route('words.index');
    }
}
