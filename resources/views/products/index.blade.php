@extends('layout.master')

@section('body')

	<style>
	.th2 { background-color: #dddddd; }
	a { color: inherit; }
	.icon-addon { display:table-cell; }
	.table {margin-bottom:0;}
	.color-match>header {
    	border-color: #474544 !important;
	    background: #474544;
	    color: #fff;
	}
	.color-match .nav-tabs li:not(.active) a, .color-match>header>.jarviswidget-ctrls a {
	    color: #fff!important;
	}
	</style>

	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
		<h1 class="page-title txt-color-blueDark">
			<!-- PAGE HEADER -->
			<i class="fa-fw fa fa-tags"></i> 
				Products
		</h1>
	</div>
	<div class="col-xs-12 col-sm-7 col-md-7 col-lg-4 pull-right text-right">
		<div class="btn btn-labeled btn-success">
			<span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>
			<a href="/products/create">Add Product</a>
		</div>
	</div>

	{{-- widget grid --}}
	<section id="widget-grid">
	
		{{-- row --}}
		<div class="row">
			
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget color-match " id="wid-id-11" data-widget-colorbutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
					<header>
						<span class="widget-icon"> <i class="fa fa-tags"></i> </span>
						<h2><strong>Products</strong></h2>	
						<ul id="widget-tab-1" class="nav nav-tabs pull-right">
							<li class="active">
								<a data-toggle="tab" href="#hr1"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Active </span></a>
							</li>
							<li>
								<a data-toggle="tab" href="#hr2"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Inactive </span></a>
							</li>
							<li>
								<a data-toggle="tab" href="#hr3"> <i class="fa fa-lg fa-arrow-circle-o-down"></i> <span class="hidden-mobile hidden-tablet"> All </span> </a>
							</li>
						</ul>	
					</header>
					<div>
						<div class="widget-body no-padding">
							<div class="tab-content padding-10">

								{{-- TAB 1 --}}
								<div class="tab-pane fade in active" id="hr1">
									<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
								        <thead>
								        	<tr>
								            	<th>Name</th>
								            	{{-- <th>Category</th> --}}
							                    <th>MSRP</th>
							                    <th>Retailer</th>
							                    <th>Distributor</th>
							                    <th>Description</th>
							                    <th>Actions</th>
								            </tr>
								        </thead>
			
								        <tbody>
								            @foreach($products as $product)
												<tr>
													<td>{{ $product->name }}</td>
													<td>{{ $product->category }}</td>
													<td>${{ $product->msrp }}</td>
													<td>${{ $product->retailer_price }}</td>
													<td>${{ $product->distributor_price }}</td>
													<td>{{ $product->description }}</td>
													<td>
														<a href="/products">
															@if($product->active == 0)
																<i class="fa fa-lg fa-eye-slash" style="color:red"></i>
															@else
																<i class="fa fa-lg fa-eye" style="color:green"></i>
															@endif
														</a> | 
														<a href="/products/{{  $product->id  }}">View</a> | 
														<a href="/products/{{  $product->id  }}/edit">Edit</a>
													</td>
												</tr>
											@endforeach
								        </tbody>
									</table>
								</div>

								{{-- TAB 2 --}}
								<div class="tab-pane fade" id="hr2">
									<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
								        <thead>
								        	<tr>
								            	<th>Name</th>
								            	{{-- <th>Category</th> --}}
							                    <th>MSRP</th>
							                    <th>Retailer</th>
							                    <th>Distributor</th>
							                    <th>Description</th>
							                    <th>Active</th>
							                    <th>Actions</th>
								            </tr>
								        </thead>
			
								        <tbody>
								            @foreach($products as $product)
												<tr>
													<td>{{ $product->name }}</td>
													{{-- <td>{{ $product->category }}</td> --}}
													<td>${{ $product->msrp }}</td>
													<td>${{ $product->retailer_price }}</td>
													<td>${{ $product->distributor_price }}</td>
													<td>{{ $product->description }}</td>
													<td>{{ $product->active }}</td>
													<td><a href="/products/{{  $product->id  }}">View</a> | <a href="/products/{{  $product->id  }}/edit">Edit</a></td>
												</tr>
											@endforeach
								        </tbody>
									</table>
								</div>

								{{-- TAB 3 --}}
								<div class="tab-pane fade" id="hr3">
									<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
								        <thead>
								        	<tr>
								            	<th>Name</th>
								            	{{-- <th>Category</th> --}}
							                    <th>MSRP</th>
							                    <th>Retailer</th>
							                    <th>Distributor</th>
							                    <th>Description</th>
							                    <th>Active</th>
							                    <th>Actions</th>
								            </tr>
								        </thead>
			
								        <tbody>
								            @foreach($products as $product)
												<tr>
													<td>{{ $product->name }}</td>
													{{-- <td>{{ $product->category }}</td> --}}
													<td>${{ $product->msrp }}</td>
													<td>${{ $product->retailer_price }}</td>
													<td>${{ $product->distributor_price }}</td>
													<td>{{ $product->description }}</td>
													<td>{{ $product->active }}</td>
													<td><a href="/products/{{  $product->id  }}">View</a> | <a href="/products/{{  $product->id  }}/edit">Edit</a></td>
												</tr>
											@endforeach
								        </tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>
			</article>
		</div>
	</section>
	
@endsection
