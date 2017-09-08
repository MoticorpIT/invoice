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
                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                    <input type="text" name="contact_first" value="{{ old('contact_first') }}" placeholder="Contact Name">
                                </label>
                            </section>

                        </div>
                        <div class="row">

                            <section class="col col-6">
                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                    <input type="tel" name="phone1" value="{{ old('phone1')}}" placeholder="Phone" data-mask="(999) 999-9999">
                                </label>
                            </section>

                            <section class="col col-6">
                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                    <input type="tel" name="phone2" value="{{ old('phone2')}}" placeholder="Phone 2" data-mask="(999) 999-9999">
                                </label>
                            </section>

                        </div>
                        <div class="row">

                            <section class="col col-6">
                                <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                    <input type="email" name="email" value="{{ old('email')}}" placeholder="E-mail">
                                </label>
                            </section>

                            <section class="col col-6">
                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                    <input type="tel" name="fax" value="{{ old('fax')}}" placeholder="Fax" data-mask="(999) 999-9999">
                                </label>
                            </section>

                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="row">

                            <section class="col col-4">
                                <label class="select">
                                    <select name="location">
                                        <option value="0">Choose Location</option>
                                        @foreach($locations as $location)
                                            <option name="location_id" value="{{ $location->id }}">{{ $location->name }}</option>
                                        @endforeach
                                    </select> <i></i>
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="contact_name" value="{{ old('contact_name') }}" placeholder="Name">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone">
                                </label>
                            </section>

                        </div>

                        <div class="row">

                            <section class="col col-6">
                                <label class="input">
                                    <input type="text" name="address" value="{{ old('address') }}" placeholder="Address 1">
                                </label>
                            </section>

                            <section class="col col-6">
                                <label class="input">
                                    <input type="text" name="address2" value="{{ old('address2') }}" placeholder="Address 2">
                                </label>
                            </section>

                        </div>

                        <div class="row">

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="city" value="{{ old('city') }}" placeholder="City">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="state" value="{{ old('state') }}" placeholder="State">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="zip" value="{{ old('zip') }}" placeholder="Zip Code">
                                </label>
                            </section>

                        </div>
                    </fieldset>
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
                                    <input type="text" name="due" value="{{ old('due') }}" placeholder="Due Date">
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

                        <section>
                            <label class="input">
                                <input type="text" name="invoice" placeholder="Line Item 1">
                            </label>
                        </section>

                        <section>
                            <label class="input">
                                <input type="text" name="invoice" placeholder="Line Item 2">
                            </label>
                        </section>

                        <section>
                            <label class="input">
                                <input type="text" name="invoice" placeholder="Line Item 3">
                            </label>
                        </section>

                    </fieldset>
                    <fieldset>
                        <div class="row">

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="shipping" value="{{ old('shipping') }}" placeholder="Shipping">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="subtotal" value="{{ old('subtotal') }}" placeholder="Subtotal">
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
                        <a href="/invoices" class="btn btn-warning">Cancel</a>
                    </footer>
                    
                </form>
            </div>
        </div>
    </div>

	@include('layout.validate')

@endsection