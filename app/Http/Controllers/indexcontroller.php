<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ticket;

class indexcontroller extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function order()
    {
        return view('order');
    }

}
