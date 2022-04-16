<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Ticket;
use Illuminate\Http\Request;


class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=buyer::all();
        $ticket=ticket::all();
        return view('buyer.index',compact('data','ticket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= buyer::all();
        $ticket=ticket::all();
        // toast('Success Toast','success');
       
        return view('buyer.create',compact('data','ticket'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new buyer();
        $data->create($request->all());

        // Alert::success('Success Title', 'Success Message');

        return redirect()->route('buyer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= buyer::all();
        $ticket=ticket::all();

        return view('buyer.index',compact('data','ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $buyer = buyer::findOrfail($id);
        $tickets = ticket::all();
    return view('buyer.index',compact('buyer', 'tickets'));
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
        $data = buyer::findOrfail($id);
        $data->update(['Nama' => $request->nama]);
        $data->update(['Tanggal Lahir' => $request->tgl_lahir]);
        $data->update(['E-Mail' => $request->email]);
        $data->update(['No HP' => $request->no_hp]);
        $data->update(['Qty' => $request->qty]);
        $data->save();
        return redirect ()->route('buyer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = buyer::findOrfail($id);
        $data->delete();
        return redirect()->route('buyer.index');
    }
}
