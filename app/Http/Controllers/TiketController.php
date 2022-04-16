<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Buyer;
use Illuminate\Http\Request;
use JeroenNoten\LaravelAdminLte\View\Components\Widget\Alert;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=ticket::all();
        return view ('ticket.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ticket = ticket::all();
        return view ('ticket.create',compact('ticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new ticket();
        $data->create($request->all());

        return redirect()->route('ticket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = buyer::where('id','=',$id)->get();
        return view('transaksi.detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('ticket.edit',[
        'Ticket' => ticket::findOrfail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = ticket::findOrfail($id);
        $data->update(['Category' => $request->category]);
        $data->update(['Harga' => $request->harga]);
        $data->save();
        return redirect ()->route('buyer.index');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ticket::findOrfail($id);
        $data->delete();
        $data->save();
        return redirect()->route('ticket.index');
    }
}
