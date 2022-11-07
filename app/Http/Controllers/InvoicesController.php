<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoicesController extends Controller
{
    public function index()
    {
        $test = "przekazana lista faktur";
        return view('invoices.index', ['name' => $test]);
    }
    public function create()
    {
        return view('invoices.create');
    }
}
