<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index(): View
    {
        $listes = Formation::all();
        return view('school.formations', ['items' => $listes]);
    }
}
