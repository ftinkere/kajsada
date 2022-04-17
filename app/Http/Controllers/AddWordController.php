<?php

namespace App\Http\Controllers;

use App\Models\Language;
use App\Models\Word;
use Illuminate\Http\Request;

class AddWordController extends Controller
{
    //
    public function show(Request $request) {
        if ($request['word'] == null) {
          return redirect('/');
        }
        $word = new Word([
            'word' => $request->get('word', "ERROR"),
            'description_full' => $request->get('description', ""),
            'language_id' => Language::where('language_code', $request->get('language_code', "err"))->get('language_id')[0]->language_id
        ]);
        $word->save();

        return redirect('/');
    }
}
