<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class FrontController extends Controller
{
    
    public function index()
    {
        $levels = \App\WordLevel::all();
        return view('index', compact('levels'));
    }


    public function words(Request $request)
    {
        $this->validate($request, [
            'level' => 'required|integer|exists:word_levels,id',
            'n'     => 'required|integer',
        ],[
            'n.required' => 'Please fill number of words',
            'level.required' => 'Please select level',
        ]);

        $n  = $request->n;

        $words = Word::where('level_id', $request->level)->get();

        if($n > count($words))
            return redirect()->route('front.index');

        $words =  $words->random($n);

        $words =  $words->shuffle();

        return view('words', compact('words'));
    }



    public function check(Request $request)
    {
        //return $request->all();
        $this->validate($request, [
            'word_de' => 'required|string',
            'id'      => 'required|integer|exists:words,id',
            'attempt' => 'required|integer',
        ]);

        $id = $request->id;
        $word = Word::findOrFail($id);
        

        $word_from_user = $request->word_de;
        $word_de = $word->word_de;

        $attempt = $request->attempt;

        $hint = '';

        if($attempt >= 4)
        {
            $expected_word = $word->word_de;

            $count_of_symbols = strlen($expected_word);

            if($count_of_symbols >= 50) $random_number_count = 10;
            elseif($count_of_symbols >= 40) $random_number_count = 8;
            elseif($count_of_symbols >= 30) $random_number_count = 6;
            elseif($count_of_symbols >= 20) $random_number_count = 5;
            elseif($count_of_symbols >= 10) $random_number_count = 2;
            else $random_number_count = 1;

            $random_numbers = $this->random_numbers(0, $count_of_symbols-1 , $random_number_count);

            for($i = 0;$i < $count_of_symbols;$i++)
                if(in_array($i, $random_numbers))
                    $hint .= $expected_word[$i];
                else
                    $hint .= '*'; 

            $hint = '<span>Hint:</span> ' . '<span style="font-size:17px;font-weight:bold;">' . $hint . '</span>';
        }

        if($word_from_user == $word_de)
        {
            return response()->json([
                'message' => 'ok',
                'index'   => $request->index,
            ], 200);
        } 
        else 
        {
            return response()->json([
                'message' => 'false',
                'hint'    => $hint,
                'index'   => $request->index,
            ], 400);
        }
    }



    public function random_numbers($min, $max, $quantity) {
        $numbers = range($min, $max);
        shuffle($numbers);
        return array_slice($numbers, 0, $quantity);
    }

}
