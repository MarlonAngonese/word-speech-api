<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sentence;

class SentenceController extends Controller
{
    public function read(){
        $sentences = Sentence::select('phrase', 'correct_word')->get();
        return response()->json($sentences);
    }
}
