@extends('layout.master')

@section('body')
    <h2>Create a Invoice</h2>

    <div class="jarviswidget" id="wid-id-1" data-widget-editbutton="false" data-widget-custombutton="false">
        <header>
            <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
            <h2>New Invoice </h2>             
        </header>

        <div>            
            <!-- widget content -->
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
                                            <option value="{{ $customer->id }}">{{ $customer->company }}</option>
                                        @endforeach
                                    </select> <i></i>
                                </label>
                            </section>

                            <section class="col col-6">
                                <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                    <input type="text" name="contact_first" placeholder="Contact Name">
                                </label>
                            </section>

                        </div>
                        <div class="row">

                            <section class="col col-6">
                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                    <input type="tel" name="phone1" placeholder="Phone" data-mask="(999) 999-9999">
                                </label>
                            </section>

                            <section class="col col-6">
                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                    <input type="tel" name="phone2" placeholder="Phone 2" data-mask="(999) 999-9999">
                                </label>
                            </section>

                        </div>
                        <div class="row">

                            <section class="col col-6">
                                <label class="input"> <i class="icon-prepend fa fa-envelope-o"></i>
                                    <input type="email" name="email" placeholder="E-mail">
                                </label>
                            </section>

                            <section class="col col-6">
                                <label class="input"> <i class="icon-prepend fa fa-phone"></i>
                                    <input type="tel" name="fax" placeholder="Fax" data-mask="(999) 999-9999">
                                </label>
                            </section>

                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="row">
                            <section class="col col-4">
                                <label class="select">
                                    <select name="location">
                                        <option value="0" selected="" disabled="">Choose Location</option>
                                        <option value="244">Aaland Islands</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                    </select> <i></i>
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="contact_name" placeholder="Name">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="phone" placeholder="Phone">
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-6">
                                <label class="input">
                                    <input type="text" name="address" placeholder="Address 1">
                                </label>
                            </section>

                            <section class="col col-6">
                                <label class="input">
                                    <input type="text" name="address2" placeholder="Address 2">
                                </label>
                            </section>
                        </div>

                        <div class="row">
                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="city" placeholder="City">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="state" placeholder="State">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="zip" placeholder="Zip Code">
                                </label>
                            </section>
                        </div>
                    </fieldset>

                    <fieldset>
                        <div class="row">
                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="invoice" placeholder="Invoice No.">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="select">
                                    <select name="status">
                                        <option value="0" selected="" disabled="">Choose Status</option>
                                        <option value="244">Aaland Islands</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                    </select> <i></i>
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="due" placeholder="Due Date">
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
                                    <input type="text" name="city" placeholder="Shipping">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="state" placeholder="Handling">
                                </label>
                            </section>

                            <section class="col col-4">
                                <label class="input">
                                    <input type="text" name="zip" placeholder="Asshole">
                                </label>
                            </section>
                        </div>

                        <section>
                            <label class="textarea textarea-resizable">                                        
                                <textarea rows="3" class="custom-scroll" name="notes" placeholder="Notes"></textarea> 
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
            <!-- end widget content -->
            
        </div>
        <!-- end widget div -->
        
    </div>
    <!-- end widget -->

	<h2>Create a Invoice</h2>
    <form role="form" method="POST" action="/invoices">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Due</label>
            <input name="due" class="form-control" value="{{ old('due') }}">
        </div>
        <div class="form-group">
            <label>Shipping</label>
            <input name="shipping" class="form-control" value="{{ old('shipping') }}">
        </div>
        <div class="form-group">
            <label>Add_1_Text</label>
            <input name="add_1_text" class="form-control" value="{{ old('add_1_text') }}">
        </div>
        <div class="form-group">
            <label>Add_1</label>
            <input name="add_1" class="form-control" value="{{ old('add_1') }}">
        </div>
        <div class="form-group">
            <label>Add_2_Text</label>
            <input name="add_2_text" class="form-control" value="{{ old('add_2_text') }}">
        </div>
        <div class="form-group">
            <label>Add_2</label>
            <input name="add_2" class="form-control" value="{{ old('add_2') }}">
        </div>
        <div class="form-group">
            <label>Subtotal</label>
            <input name="sub_total" class="form-control" value="{{ old('sub_total') }}">
        </div>
        <div class="form-group">
            <label>Total</label>
            <input name="total" class="form-control" value="{{ old('total') }}">
        </div>
        <div class="form-group">
            <label>Status</label>
            <div class="radio">
                <label>
                    <input type="radio" name="status_id" id="optionsRadios1" value="1" 
                    >Quote
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status_id" id="optionsRadios2" value="2"
                    >Paid
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status_id" id="optionsRadios3" value="3"
                    >Unpaid
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="status_id" id="optionsRadios4" value="4"
                    >Past Due
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>Customer</label>
            <input name="customer_id" class="form-control" value="{{ old('$invoice->customer->id') }}">
        </div>
        <div class="form-group">
        	<button type="submit" class="btn btn-primary">Submit Button</button>
            <button><a href="/invoices">Cancel</a></button>
        </div>
    </form>

	@include('layout.validate')

@endsection