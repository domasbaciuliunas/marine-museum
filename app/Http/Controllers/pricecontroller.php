<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortCode;

class pricecontroller extends Controller
{
    public function index()
    {
        return view('Admin.price_edit',
        [
            'ShortCodes'=>ShortCode::all()
        ]);
    }

    public function update(Request $request, $id)
    {



    }

}
