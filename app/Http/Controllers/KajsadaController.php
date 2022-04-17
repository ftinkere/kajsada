<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class KajsadaController extends Controller
{
    //

    /**
     * Show the profile for a given user.
     *
     * @return View
     */
    public function show(): View
    {
        return view('kajsada', ['words' => Word::words_array()]);
    }
}
