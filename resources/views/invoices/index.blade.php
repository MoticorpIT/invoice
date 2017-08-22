@extends('layout.master')

@section('body')
	<style>
	table {
	    font-family: arial, sans-serif;
	    border-collapse: collapse;
	    width: 100%;
	}

	td, th {
	    border: 1px solid #dddddd;
	    text-align: left;
	    padding: 8px;
	}

	tr:nth-child(even) {
	    background-color: #dddddd;
	}
	</style>

	<h2>Invoices</h2>

	<table>
		<tr>
			<th>Due</th>
			<th>Shipping</th>
			<th>Add 1 Text</th>
			<th>Add 1</th>
			<th>Add 2 Text</th>
			<th>Add 2</th>
			<th>Subtotal</th>
			<th>Total</th>
			<th>Status</th>
			<th>Customer</th>
			<th>Actions</th>
		</tr>
		@foreach($invoices as $invoice)

			<tr>
				<td>{{ $invoice->due }}</td>
				<td>${{ $invoice->shipping }}</td>
				<td>{{ $invoice->add_1_text }}</td>
				<td>${{ $invoice->add_1 }}</td>
				<td>{{ $invoice->add_2_text }}</td>
				<td>${{ $invoice->add_2 }}</td>
				<td>${{ $invoice->sub_total }}</td>
				<td>${{ $invoice->total }}</td>
				<td>{{ $invoice->status_id }}</td>
				<td>{{ $invoice->customer->company }}</td>
				<td><a href="/invoices/{{  $invoice->id  }}">View</a> | <a href="/invoices/{{  $invoice->id  }}/edit">Edit</a></td>
			</tr>
		@endforeach
	</table>
	
@endsection


@section('pageLinks')
<ul>
	<li><a href="invoices/create">Add invoice</a></li>
</ul>
<p>Notes:
<br>

@endsection