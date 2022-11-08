<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cusomer = Customer::all();
        return view('customers.index', ['customers' => $cusomer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cusomer = new Customer();

        $cusomer->name = $request->name;
        $cusomer->adress = $request->adress;
        $cusomer->nip = $request->nip;

        $cusomer->save();

        return redirect()->route('customers.index')->with('message', 'Nowa klient został dodany');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cusomer = Customer::find($id);
        
        return view('customers.edit', ['customer' => $cusomer]);
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
        $cusomer = Customer::find($id);
        //dd($request);
        $cusomer->name = $request->name;
        $cusomer->adress = $request->adress;
        $cusomer->nip = $request->nip;

        $cusomer->save();

        return redirect()->route('customers.index')->with('message', 'Nadpisano dane klienta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Customer::destroy($id);
        return redirect()->route('customers.index')->with('message', 'Klient został poprawnie usuniety');
    }
}
