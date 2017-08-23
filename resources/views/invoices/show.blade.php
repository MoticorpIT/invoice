@extends('layout.master')

@section('body')
	<h2>Invoices</h2>

		<ul>
			<li>Customer: <a href="/customers/{{ $invoice->customer->id }}">{{ $invoice->customer->company }}</a></li>
			<li>Due: {{ $invoice->due }}</li>
			<li 
				@if($invoice->status->status == 'Past Due')
					style="color:red"
				@endif
			>Status: {{ $invoice->status->status }}</li>
			<li>Shipping: ${{ $invoice->shipping }}</li>
			<li>Add_1_Text: {{ $invoice->add_1_text }}</li>
			<li>Add_1: ${{ $invoice->add_1 }}</li>
			<li>Add_2_Text: {{ $invoice->add_2_text }}</li>
			<li>Add_2: ${{ $invoice->add_2 }}</li>
			<li>Subtotal: ${{ $invoice->sub_total }}</li>
			<li>Total: ${{ $invoice->total }}</li>
		</ul>
	
@endsection


@section('pageLinks')
<ul>
	<li><a href="/invoices/{{  $invoice->id  }}/edit">Edit</a></li>
	<li><a href="/invoices">Back to invoices</a></li>
</ul>
@endsection