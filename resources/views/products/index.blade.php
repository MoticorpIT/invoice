@extends('layout.master')

@section('body')
	<p>Products Index</p>

	@foreach($products as $product)
		<ul>
			<li><a href="/products/{{ $product->id }}">Name: {{ $product->name }}</a></li>
			<li>MSRP: ${{ $product->msrp }}</li>
			<li>Retailer Price: ${{ $product->retailer_price }}</li>
			<li>Description: {{ $product->description }}</li>
			<li>Short Description: {{ $product->short_descript }}</li>
		</ul>
	@endforeach
	<a href="products/create">Add Product</a>
@endsection