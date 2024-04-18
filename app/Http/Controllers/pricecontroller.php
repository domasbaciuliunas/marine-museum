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

    public function update(Request $request, $replace)
    {
        foreach ($replace as $replacement)
        {
            $ShortCode=ShortCode::find($replacement->id);
            $ShortCode->update($request->all());
            $ShortCode->save();
            return redirect()->route('admin_orders.index');
        }


    }

}
