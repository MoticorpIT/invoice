<?php

namespace App\Http\Controllers;

use App\Invoice;
use App\Customer;
use App\Term;
use App\Status;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\InvoiceFormRequest;

class InvoiceController extends Controller
{

    /* AUTHENTICATION */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $invoices = Invoice::all();
        return view('invoices.index', compact('invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations = Location::where('active', '=', 1)->get();
        $customers = Customer::where('active', '=', 1)->get();
        $statuses = Status::all();
        $terms = Term::all();
        return view('invoices.create', compact('customers', 'locations', 'statuses', 'terms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(InvoiceFormRequest $request)
    {
        Invoice::create($request->all());
        // store page
        return redirect('invoices')->with('message', 'Invoice Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Invoice $invoice)
    {
        return view('invoices.show', compact('invoice'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Invoice $invoice)
    {
        $statuses = Status::all();
        $terms = Term::all();
        return view('invoices.edit', compact('invoice', 'terms', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Invoice $invoice)
    {
        $invoice->update(
            [
                'due' => $request->due,
                'inv_number' => $request->inv_number,
                'user_id' => $request->user_id,
                'term_id' => $request->term_id,
                'status_id' => $request->status_id,
                'customer_id' => $request->customer_id,
                'subtotal' => $request->subtotal,
                'shipping' => $request->shipping,
                'total' => $request->total
            ]
        );
        $invoice->sync($request->toArray())->save();
        //store page
        return redirect('invoices/{{$invoice->inv_number}}')->with('message', 'Invoice Modified!');

        // $invoice = Invoice::find($id);
        // $invoice->fill($request->toArray())->save();
        // // store page
        // return redirect('invoices')->with('message', 'Invoice Modified!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
