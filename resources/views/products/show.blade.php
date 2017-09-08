@extends('layout.master')

@section('body')
	<style type="text/css">
		.pad-r-24 { padding-right:12px; }
	</style>
	
	<section id="widget-grid" class="">
		<div class="row">
			
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget well jarviswidget-color-darken" id="wid-id-0" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-colorbutton="false">
					<div>
						
						<div class="widget-body">
							<div class="widget-body-toolbar">
								<div class="row">
									<div class="col-sm-2 pull-left">
										<div class="btn-group">	
											@if($product->active == 1)
											<span class="btn btn-sm btn-success">
												Available for Sale
											</span>
											@else
											<span class="btn btn-sm btn-danger">
												Not Available for Sale
											</span>
											@endif
										</div>
									</div>
									<div class="col-sm-10 text-align-right">
										<div class="btn-group">
											<a href="/products/{{ $product->slug }}/edit" class="btn btn-sm btn-primary"> <i class="fa fa-pencil"></i> Edit </a>
										</div>
										<div class="btn-group">
											<a href="/products/create" class="btn btn-sm btn-success"> <i class="fa fa-plus"></i> Create New </a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12">
								<!-- product -->
								<div class="product-content product-wrap clearfix product-deatil">
									<div class="row">
											<div class="col-md-4 col-sm-12 col-xs-12 ">
												<div class="product-image"> 
													<div class="item" style="width:284px; height:384px; background-color:gray;">
														<img src="#" alt=""><p class="text-center">Pictures are not included in the table</p>
													</div>
												</div>
											</div>
											<div class="col-md-8 col-sm-12 col-xs-12">
												<h1 class="name">
													<strong>{{ $product->name }}</strong>
													<small class="text-capitalize" style="margin-top: 10px;">
														@foreach($product->categories as $key => $category)
															@if($key)
																,&nbsp;
															@endif
															<a href="/products/categories/{{ $category->name }}">{{ $category->name }}</a>
														@endforeach
													</small>
												</h1>

												<hr />
											
												<div class="certified">
													<ul>
														<li class="col-md-4">
															<a href="javascript:void(0);">
																<h3 class="price-container text-center">${{ $product->default_price }}</h3>
																<span>Retailer</span>
															</a>
														</li>
														<li class="col-md-4">
															<a href="javascript:void(0);">
																<h3 class="price-container text-center">${{ $product->msrp }}</h3>
																<span>MSRP</span>
															</a>
														</li>
														<li class="col-md-4">
															<a href="javascript:void(0);">
																<h3 class="price-container text-center">{{ $product->pack_size }}</h3>
																<span>Per Pack</span>
															</a>
														</li>
													</ul>
												</div>

												<div class="clearfix"></div>
												<hr />

												<div class="description">
													<div class="row">
														<h3>Product Short Description</h3>
						 								<p>{{ $product->short_descript }}</p>
						 							</div>
													<div class="row">
														<h3>Product Description</h3>
														<p>{{ $product->description }}</p>
													</div>
												</div>

												<hr />

												<div class="row">
													<div class="col-sm-12 col-md-6 col-lg-6">
														<a href="/products/{{$product->slug}}/edit" class="btn btn-primary">Edit Product</a>
														<a href="/products" class="btn btn-default">Cancel</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>	
						</div>

					</div>
				</div>
			</article>

		</div>
	</section>
@endsection