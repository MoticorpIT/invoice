@extends('layout.master')

@section('body')

   	<h2>Edit a Product</h2>
    <form role="form" method="POST" action="/products/{{ $product->id }}">
    	{{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div class="form-group">
            <label>Product Name</label>
            <input name="name" class="form-control" value="{{ $product->name }}">
        </div>
        <div class="form-group">
            <label>MSRP</label>
            <input name="msrp" class="form-control" value="{{ $product->msrp }}">
        </div>
        <div class="form-group">
            <label>Retailer Price</label>
            <input name="retailer_price" class="form-control" value="{{ $product->retailer_price }}">
        </div>
        <div class="form-group">
            <label>Distributor Price</label>
            <input name="distributor_price" class="form-control" value="{{ $product->distributor_price }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input name="description" class="form-control" value="{{ $product->description }}">
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <input name="short_descript" class="form-control" value="{{ $product->short_descript }}">
        </div>
        <div class="form-group">
            <label>Category</label>
            @foreach($categories as $category)
                <div class="radio text-capitalize">
                    <label>
                        <input type="radio" name="category" id="{{ $category->id }}" value="{{ $category->id }}" 
                            @foreach ($product->categories as $associatedCat)
                                @if ($associatedCat->name == $category->name)
                                    checked
                                @endif
                            @endforeach
                        >{{ $category->name }}
                    </label>
                </div>
            @endforeach
        </div>
        <div class="form-group">
            <label>Current Status</label>
            <div class="radio">
                <label>
                    <input type="radio" name="active" id="optionsRadios1" value="1" 
                    @if ($product->active == 1)
                    	checked
                    @endif
                    >Active
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="active" id="optionsRadios2" value="0"
                    @if ($product->active != 1)
                    	checked
                    @endif
                    >Not Active
                </label>
            </div>
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Submit Button</button>
            <a href="/products/{{ $product->id }}" class="btn btn-warning">Cancel</a>
        </div>
    </form>

    @include('layout.validate')

@endsection