@extends('layout.master')

@section('body')

    <!-- widget grid -->
    <section id="widget-grid" class="">
    
        <div class="row">
    
            <!-- NEW COL START -->
            <article class="col-sm-12 col-md-12 col-lg-12">
    
                <!-- Widget ID (each widget will need unique ID)-->
                <div class="jarviswidget" id="wid-id-1" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-custombutton="false" data-widget-fullscreenbutton="false" data-widget-deletebutton="false" data-widget-togglebutton="false">
                    
                    <header>
                        <span class="widget-icon"> <i class="fa fa-edit"></i> </span>
                        <h2>Edit Product </h2>
                    </header>
    
                    <!-- widget div-->
                    <div>
                        <div class="widget-body no-padding">
                            <form class="smart-form form-horizontal" role="form" method="POST" action="/products/{{ $product->slug }}">

                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}

                                <fieldset>        
                                    <div class="row">  
                                        <section class="col col-8">
                                            <label class="label">Product Name</label>
                                            <label class="input">
                                                <input type="text" name="name" value="{{ $product->name }}">
                                            </label>
                                        </section>

                                        <section class="col col-4">
                                            <label class="label">Categories</label>
                                            <div class="inline-group">
                                                @foreach($categories as $category)
                                                    <label class="checkbox text-capitalize">
                                                        <input type="checkbox" value="{{ $category->id }}"
                                                         @foreach ($product->categories as $associatedCat)
                                                            @if ($associatedCat->id == $category->id)
                                                                checked="checked"
                                                            @endif
                                                        @endforeach
                                                        name="category[]"><i style="top:9px;"></i>{{ $category->name }}
                                                    </label>
                                                @endforeach
                                            </div>
                                        </section>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <div class="row">
                                        <section class="col col-4">
                                            <label class="label">Default Price</label>
                                            <label class="input">
                                                <input type="text" name="default_price" value="{{ $product->default_price }}">
                                            </label>
                                        </section>

                                        <section class="col col-4">
                                            <label class="label">MSRP</label>
                                            <label class="input">
                                                <input type="text" name="msrp" value="{{ $product->msrp }}">
                                            </label>
                                        </section>

                                        <section class="col col-4">
                                            <label class="label">Pack Size</label>
                                            <label class="input">
                                                <input type="text" name="pack_size" value="{{ $product->pack_size }}">
                                            </label>
                                        </section>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <section>
                                        <label class="label">Short Description</label>
                                        <label class="input">
                                            <input type="text" name="short_descript" value="{{ $product->short_descript }}">
                                        </label>
                                    </section>

                                    <section>
                                        <label class="label">Description</label>
                                        <label class="input">
                                            <input type="text" name="description" value="{{ $product->description }}">
                                        </label>
                                    </section>
                                </fieldset>

                                <fieldset>
                                    <section>
                                        <label class="label">Status</label>
                                        <div class="inline-group">
                                            <label class="radio">
                                                <input type="radio" name="active" id="optionsRadios1" value="1"
                                                @if ($product->active == 1)
                                                    checked="checked"
                                                @endif
                                                ><i style="top:9px;"></i>Active
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="active" id="optionsRadios2" value="0"
                                                @if ($product->active != 1)
                                                    checked="checked"
                                                @endif
                                                ><i style="top:9px;"></i>Inactive
                                            </label>
                                        </div>
                                    </section>
                                </fieldset>
    
                                <footer>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-default" onclick="window.history.back();">Back</button>
                                </footer>

                            </form>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>

    @include('layout.validate')

@endsection