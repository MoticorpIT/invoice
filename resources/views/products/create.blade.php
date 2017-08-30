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
                                <section class="col col-6"> 
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="name" placeholder="Name">
                                    </label>
                                </section>

                                <section class="col col-6">
                                    <label class="select">
                                        <select>
                                            <option name="category" value="0">Category</option>
                                            <option name="category" value="1">Powders</option>
                                            <option name="category" value="2">Capsules</option>
                                            <option name="category" value="3">Extracts</option>
                                        </select> <i></i>
                                    </label>
                                </section>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <section class="col col-4">
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="msrp" placeholder="MSPR">
                                    </label>
                                </section>

                                <section class="col col-4">
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="retailer_price" placeholder="Retailer Price">
                                    </label>
                                </section>

                                <section class="col col-4">
                                    <label class="input"> <i class="icon-prepend fa fa-user"></i>
                                        <input type="text" name="distributor_price" placeholder="Distributor Price">
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
                                Save
                            </button>
                            <a href="/products" class="btn btn-warning">Cancel</a>
                        </footer>
                    </form>

                </div>
            </div>
        </div>
    </div>

	@include('layout.validate')

@endsection