<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $invoices = Invoices::all();
        return view('invoices.index', ['invoices' => $invoices]);
    }
    public function create()
    {
        return view('invoices.create');
    }

    public function store(Request $request)
    {
        //dd($request); zatrzymuje program i pokazuje co jest w zmiennej

        $invoice = new Invoices();

        $invoice->number = $request->number;
        $invoice->date = $request->date;
        $invoice->total = $request->total;

        $invoice->save();

        return redirect()->route('invoices.index');
    }
}
