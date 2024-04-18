<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.orders_home',
            [
                'orders'=>ticket::all()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket = new Ticket();
        $ticket->email = $request->email;
        $ticket->name = $request->name;
        $ticket->surname= $request->surname;
        $ticket->city= $request->city;
        $ticket->ex_date= $request->date;
        $ticket->cc_number= $request->bank;
        $ticket->child= $request->child;
        $ticket->teen= $request->teen;
        $ticket->adult= $request->adult;
        $ticket->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return view('Admin.orders_edit',
            [
                'orders'=>$ticket,
            ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $ticket=Ticket::find($id);
        $ticket->update($request->all());
        $ticket->save();
        return redirect()->route('admin_orders.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $ticket = Ticket::find($id);
        $ticket->delete();
        return redirect()->route('admin_orders.index');
    }
}
