<?php

namespace App\Http\Controllers;

use App\Models\Conference;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::all();
        return view('.index', compact('conferences'));
    }
}
