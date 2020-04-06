<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonContoroller extends Controller
{
    public function index(Request $request)
    {
        $items = Person::all();
        return view('person.index', ['items'=>$items]);
    }
}
