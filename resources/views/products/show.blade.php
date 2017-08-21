@extends('layout.master')

@section('body')
	<ul>
		<li>Name: {{ $product->name }}</li>
		<li>MSRP: {{ $product->msrp }}</li>
		<li>Retailer Price: {{ $product->retailer_price }}</li>
		<li>Description: {{ $product->description }}</li>
		<li>Short Description: {{ $product->short_descript }}</li>
		<li>Active: {{ $product->active }}</li>
	</ul>

	<a href="/products/{{ $product->id }}/edit">Edit</a>
	<br>
	<a href="/products">Back to Products</a>
@endsection