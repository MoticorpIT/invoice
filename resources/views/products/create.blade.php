@extends('layout.master')

@section('body')

    <div id="widget-grid">
    <h2>Create a Product</h2>

    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>New Product </h2>             
        </header>

        <div>            
            {{-- widget content --}}
            <div class="widget-body no-padding">
                <form id="checkout-form" class="smart-form" method="POST" action="/products">
                {{ csrf_field() }}
                    <fieldset>
                        <div class="row">
                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="name" placeholder="Name">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                    <input type="text" name="msrp" placeholder="MSRP">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                    <input type="text" name="retailer_price" placeholder="Retailer">
                                </label>
                            </section>
                        </div>
                    </fieldset>

                    <fieldset>
                        <section>
                            <label class="textarea">                                        
                                <textarea rows="1" name="short_descript" class="custom-scroll" placeholder="Short Description"></textarea> 
                            </label>
                        </section>

                        <section>
                            <label class="textarea textarea-resizable">                                         
                                <textarea rows="3" name="description" class="custom-scroll" placeholder="Description"></textarea> 
                            </label>
                        </section>
                    </fieldset>

                    <footer>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                        <a href="/products" class="btn btn-warning">Cancel</a>
                    </footer>
                </form>

            </div>
            {{-- end widget content --}}
            
        </div>
        {{-- end widget div --}}
        
    </div>
    {{-- end widget --}}
    </div>

	{{-- <h2>Create a Product</h2>
    <form role="form" method="POST" action="/products">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Product Name</label>
            <input name="name" class="form-control" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <label>MSRP</label>
            <input name="msrp" class="form-control" value="{{ old('msrp') }}">
        </div>
        <div class="form-group">
            <label>Retailer Price</label>
            <input name="retailer_price" class="form-control" value="{{ old('retailer_price') }}">
        </div>
        <div class="form-group">
            <label>Description</label>
            <input name="description" class="form-control" value="{{ old('description') }}">
        </div>
        <div class="form-group">
            <label>Short Description</label>
            <input name="short_descript" class="form-control" value="{{ old('short_descript') }}">
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Submit Button</button>
        </div>
    </form> --}}

	@include('layout.validate')

@endsection