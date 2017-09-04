@extends('layout.master')

@section('body')
	<style type="text/css">
		.pad-r-24 { padding-right:12px; }
	</style>

	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<i class="fa-fw fa fa-tags"></i>Product
			<span>>  Details</span>
		</h1>
	</div>
	
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
											<span class="btn btn-sm btn-primary">
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
											<a href="/products/{{ $product->id }}/edit" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> Edit </a>
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
											<div class="col-md-5 col-sm-12 col-xs-12 ">
												<div class="product-image"> 
													<div class="item" style="width:380px; height:480px; background-color:gray;">
														<img src="#" alt="">
													</div>
												</div>
											</div>
											<div class="col-md-7 col-sm-12 col-xs-12">
												<h1 class="name">
													<strong>{{ $product->name }}</strong>
													<small class="text-capitalize">
														@foreach($product->categories as $key => $category)
															@if($key)
																,
															@endif
															<a href="/products/categories/{{ $category->name }}">{{ $category->name }}</a>
														@endforeach
													</small>
													{{-- <small>{{ $product->category }}</small> --}}
												</h1>

												<hr />
											
												<div class="certified">
													<ul>
														<li class="col-md-4">
															<a href="javascript:void(0);">
																<h3 class="price-container text-center">${{ $product->msrp }}</h3>
																<span>MSRP</span>
															</a>
														</li>
														<li class="col-md-4">
															<a href="javascript:void(0);">
																<h3 class="price-container text-center">${{ $product->retailer_price }}</h3>
																<span>Retailer</span>
															</a>
														</li>
														<li class="col-md-4">
															<a href="javascript:void(0);">
																<h3 class="price-container text-center">${{ $product->distributor_price }}</h3>
																<span>Distributor</span>
															</a>
														</li>
													</ul>
												</div>

												<div class="clearfix"></div>
												<hr />

												<div class="description">
													<div class="row">
														<h3>Product Description</h3>
														<p>{{ $product->description }}</p>
													</div>
													<div class="row">
														<h3>Product Short Description</h3>
						 								<p>{{ $product->short_descript }}</p>
						 							</div>
												</div>

												<hr />

												<div class="row">
													<div class="col-sm-12 col-md-6 col-lg-6">
														<a href="/products/{{$product->id}}/edit" class="btn btn-success btn-lg">Edit Product</a>
														<a href="/products" class="btn btn-warning btn-lg">Cancel</a>
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