<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContributorController extends Controller
{
    public function index()
    {
        return view('roles.contributor');
    }
}
