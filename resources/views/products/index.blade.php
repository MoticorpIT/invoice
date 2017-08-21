@extends('layout.master')

@section('body')
	<h2>Products</h2>

	@foreach($products as $product)
		<h3><a href="/products/{{ $product->id }}">{{ $product->name }}</a></h3>
		<ul>
			<li>MSRP: ${{ $product->msrp }}</li>
			<li>Retailer Price: ${{ $product->retailer_price }}</li>
			<li>Description: {{ $product->description }}</li>
			<li>Short Description: {{ $product->short_descript }}</li>
		</ul>
		<hr />
	@endforeach
	
@endsection


@section('pageLinks')
<ul>
	<li><a href="products/create">Add Product</a></li>
</ul>
@endsection