@extends('layout.master')

@section('body')

    <div id="widget-grid">

        <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false" data-widget-togglebutton="false">
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
                                <section class="col col-8"> 
                                    <label class="input">
                                        <input type="text" name="name" placeholder="Name*" value="{{ old('name') }}"> 
                                    </label>
                                </section>

                                <section class="col col-4">
                                    <div class="inline-group">
                                        @foreach($categories as $category)
                                            <label class="checkbox text-capitalize">
                                                <input type="checkbox" value="{{ $category->id }}" name="category[]">
                                                <i></i>{{ $category->name }}
                                            </label>
                                        @endforeach
                                    </div>
                                </section>
                            </div>
                        </fieldset>

                        <fieldset>
                            <div class="row">
                                <section class="col col-4">
                                    <label class="input">
                                        <input type="text" name="msrp" placeholder="MSRP*" value="{{ old('msrp') }}">
                                    </label>
                                </section>

                                <section class="col col-4">
                                    <label class="input">
                                        <input type="text" name="default_price" placeholder="Price*" value="{{ old('default_price') }}">
                                    </label>
                                </section>

                                <section class="col col-4">
                                    <label class="input">
                                        <input type="text" name="pack_size" placeholder="Pack Size" value="{{ old('pack_size') }}">
                                    </label>
                                </section>
                            </div>
                        </fieldset>

                        <fieldset>
                            <section>
                                <label class="textarea">                                        
                                    <textarea rows="1" name="short_descript" class="custom-scroll" placeholder="Short Description" value="{{ old('short_descript') }}"></textarea> 
                                </label>
                            </section>

                            <section>
                                <label class="textarea textarea-resizable">                                         
                                    <textarea rows="3" name="description" class="custom-scroll" placeholder="Description" value="{{ old('description') }}"></textarea> 
                                </label>
                            </section>
                        </fieldset>

                        <footer>
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="button" class="btn btn-default" onclick="window.history.back();">Cancel</button>
                        </footer>
                    </form>

                </div>
            </div>
        </div>
    </div>

	@include('layout.validate')

@endsection