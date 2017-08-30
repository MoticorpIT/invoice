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
            <div class="radio">
                <label>
                    <input type="radio" name="category" id="optionsRadios1" value="1" 
                    @if ($product->category == 'Powders')
                        checked
                    @endif
                    >Powders
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="category" id="optionsRadios2" value="2"
                    @if ($product->category == 'Capsules')
                        checked
                    @endif
                    >Capsules
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="category" id="optionsRadios3" value="3"
                    @if ($product->category == 'Extracts')
                        checked
                    @endif
                    >Extracts
                </label>
            </div>
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