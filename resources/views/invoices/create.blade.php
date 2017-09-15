@extends('layout.master')

@section('body')

    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>New Invoice </h2>             
        </header>

        <div>            
            {{-- widget content --}}
            <div class="widget-body no-padding">
                <form id="checkout-form" class="smart-form" method="POST" action="/invoices">
                {{ csrf_field() }}
                    <fieldset>
                        <div class="row">

                            <section class="col col-3">
                                <label class="input">
                                    <input type="text" name="inv_number" value="{{ old('inv_number') }}" placeholder="Invoice No.">
                                </label>
                            </section>

                            <section class="col col-3">
                                <label class="select">
                                    <select name="status">
                                        <option value="0" selected="" disabled="">Choose Terms</option>
                                        @foreach($terms as $term)
                                            <option value="{{$term->id}}" name="status_id" id="optionsSelects{{$term->id}}">{{ $term->name }}</option>
                                        @endforeach
                                    </select> <i></i>
                                </label>
                            </section>

                            <section class="col col-3">
                                <label class="input">
                                    <input type="text" name="due" value="{{ old('due') }}" placeholder="Due Date" class="form-control datepicker" data-dateformat="mm-dd-yy">
                                </label>
                            </section>

                            <section class="col col-3">
                                <label class="select">
                                    <select name="status">
                                        <option value="0" selected="" disabled="">Choose Status</option>
                                        @foreach($statuses as $status)
                                        <option value="{{$status->id}}" name="status_id" id="optionsSelects{{$status->id}}">{{ $status->status }}</option>
                                        @endforeach
                                    </select> <i></i>
                                </label>
                            </section>

                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="row">

                            <section class="col col-6">
                                <label class="select">
                                    <select>
                                        <option value="0">Choose Customer</option>
                                        @foreach($customers as $customer)
                                            <option name="company" value="{{ $customer->id }}">{{ $customer->company }}</option>
                                        @endforeach
                                    </select> <i></i>
                                </label>
                            </section>

                            <section class="col col-6">
                                <label class="select">
                                    <select name="location">
                                        <option value="0">Choose Location</option>
                                        @foreach($locations as $location)
                                            <option name="location_id" value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select> <i></i>
                                </label>
                            </section>

                        </div>
                        
                    </fieldset>

                    {{-- LINE ITEMS --}}
                    <fieldset>
                        <div class="row">
                            <div class="col col-12 pull-left">
                                <label class="label" style="font-size:1.25em;margin-bottom:20px;">
                                    Line Items
                                </label>
                            </div>
                        </div>
                        <div class="row">
                            <section class="col col-1">
                                <label class="input">
                                    <input type="text" name="qty" placeholder="QTY" value="{{ old('qty') }}">
                                </label>
                            </section>

                            <section class="col col-10">
                                <label class="select">
                                    {{-- <select name="company" class="select2">
                                        <option value="0" selected="" disabled="">Choose Product</option>
                                        @foreach($products as $product)
                                            @foreach($product->categories as $category)
                                                <optgroup label="{{$category->name}}">
                                            @endforeach
                                                <option name="name" value="{{$product->id}}">{{$product->name}}</option>
                                            </optgroup>
                                        @endforeach
                                    </select> --}}
                                    <select>
                                        <option value="0">Choose Product</option>
                                        @foreach($products as $product)
                                            <option name="name" value="{{ $product->id }}">{{ $product->name }}</option>
                                        @endforeach
                                    </select> <i></i>
                                </label>
                            </section>

                            {{-- <section class="col col-5">
                                <label class="input">
                                    <input type="text" name="description" placeholder="Product Description" value="{{ old('description') }}">
                                </label>
                            </section> --}}
                            {{-- <section class="col col-2">
                                <label class="input">
                                    <input type="text" name="price" placeholder="Item Price" value="{{ old('price') }}">
                                </label>
                            </section> --}}
                            {{-- <section class="col col-2">
                                <label class="input">
                                    <input type="text" name="total" placeholder="Line Total" value="{{ old('total') }}">
                                </label>
                            </section> --}}
                            <section class="col col-1">
                                <label class="input">
                                    <a href="" class="btn btn-primary pull-left" style="width:49%;padding:5px 0;">
                                        <i class="fa fa-lg fa-plus"></i></a>
                                    <a href="" class="btn btn-danger disabled" style="width:49%;padding:5px 0;">
                                    <i class="fa fa-lg fa-trash"></i></a>
                                </label>
                            </section>
                        </div>
                    </fieldset>
                    <fieldset>
                        <div class="row">

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="subtotal" value="{{ old('subtotal') }}" placeholder="Subtotal">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="shipping" value="{{ old('shipping') }}" placeholder="Shipping">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="total" value="{{ old('total') }}" placeholder="Total">
                                </label>
                            </section>

                        </div>

                        <section>
                            <label class="textarea textarea-resizable">                                        
                                <textarea rows="3" class="custom-scroll" name="inv_note" placeholder="Notes"></textarea> 
                            </label>
                        </section>

                    </fieldset>

                    <footer>
                        <button type="submit" class="btn btn-primary">
                            Submit
                        </button>
                        <button type="button" class="btn btn-default" onclick="window.history.back();">Cancel</button>
                    </footer>
                    
                </form>
            </div>
        </div>
    </div>
    <div class="jarviswidget" id="wid-id-2">
        <div class="row">
            <div class="col col-12">
                <p>FORM NOTES</p>
                <ol>
                    <li>Make invoice number prefill (++last)</li>
                    <li>Make choosing terms, automatically set due date based on terms</li>
                        <ul>
                            <li>14 days = 14 days from current</li>
                            <li>30 days = 30 days from current</li>
                            <li>COD || Prepay || Due Now = Today</li>
                        </ul>
                    <li>Limit choices of statuses avialbale - ex: no need for past due</li>
                    <li>Make customer fuzzy search text field</li>
                        <ul>
                            <li>Give option to add new customer</li>
                        </ul>
                    <li>Limit available location options based on Customer chosen (same form)</li>
                        <ul>
                            <li>Give option to add new customer location</li>
                        </ul>
                    <li>Line Items</li>
                        <ul>
                            <li>Make product fuzzy search text field</li>
                            <li>Figure out how to save line_item to line_item table</li>
                                <ul>
                                    <li>Make it so product short_descript, price + invoice_num get sent to table (hidden field?)</li>
                                </ul>
                            <li>Make + at end of line add a new line (row)</li>
                            <li>Make - at end of line remove the line (row)</li>
                            <li>Make the first row's - button inactive (must be 1 row) and active on all others</li>
                        </ul>
                </ol>
            </div>
        </div>
    </div>
	@include('layout.validate')

@endsection