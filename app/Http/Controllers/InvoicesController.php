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

    public function edit($id)
    {
        $invoice = Invoices::find($id);

        return view('invoices.edit', ['invoice' => $invoice]);
    }


    public function store(Request $request)
    {
        //dd($request); zatrzymuje program i pokazuje co jest w zmiennej

        $invoice = new Invoices();

        $invoice->number = $request->number;
        $invoice->date = $request->date;
        $invoice->total = $request->total;

        $invoice->save();

        return redirect()->route('invoices.index')->with('message', 'Nowa faktura została dodana');
    }

    public function update($id, Request $request)
    {
        //dd($request); zatrzymuje program i pokazuje co jest w zmiennej

        $invoice = Invoices::find($id);

        $invoice->number = $request->number;
        $invoice->date = $request->date;
        $invoice->total = $request->total;

        $invoice->save();

        return redirect()->route('invoices.index')->with('message', 'Faktura została poprawnie z edytowana');
    }

    public function delete($id)
    {
        //dd($request); zatrzymuje program i pokazuje co jest w zmiennej

        $invoice = Invoices::find($id);
        $invoice->delete();

        //Invoices::destroy($id); <-- inna możliwość usunięcia rekordu z bazy
        return redirect()->route('invoices.index')->with('message', 'Faktura została poprawnie usunieta');
    }
}
