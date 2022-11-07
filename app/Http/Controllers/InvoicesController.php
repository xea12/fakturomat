<?php

namespace App\Http\Controllers;

use App\Models\Invoices;
use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $invoices = Invoices::all();
        return view('invoices.index', ['name' => $invoices]);
    }
    public function create()
    {
        return view('invoices.create');
    }
}
