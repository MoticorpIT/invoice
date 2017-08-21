@extends('layout.master')

@section('body')
	<h2>{{ $product->name }}</h2>
	<ul>
		<li>MSRP: {{ $product->msrp }}</li>
		<li>Retailer Price: {{ $product->retailer_price }}</li>
		<li>Description: {{ $product->description }}</li>
		<li>Short Description: {{ $product->short_descript }}</li>
		<li>Active: {{ $product->active }}</li>
	</ul>

	
@endsection


@section('pageLinks')
<ul>
	<li><a href="/products/{{ $product->id }}/edit">Edit</a></li>
	<li><a href="/products">Back to Products</a></li>
</ul>
@endsection