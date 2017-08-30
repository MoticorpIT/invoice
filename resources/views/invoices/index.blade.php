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
			<i class="fa-fw fa fa-pencil-square-o"></i> 
				Invoices
		</h1>
	</div>

	{{-- widget grid --}}
	<section id="widget-grid">
	
		{{-- row --}}
		<div class="row">
			
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="jarviswidget color-match " id="wid-id-11" data-widget-colorbutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
					<header>
						<span class="widget-icon"> <i class="fa fa-table"></i> </span>
						<h2><strong>Invoices</strong></h2>	
						<ul id="widget-tab-1" class="nav nav-tabs pull-right">
							<li class="active">
								<a data-toggle="tab" href="#hr1"> <i class="fa fa-lg fa-arrow-circle-o-down"></i> <span class="hidden-mobile hidden-tablet"> All </span> </a>
							</li>
							<li>
								<a data-toggle="tab" href="#hr2"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Unpaid </span></a>
							</li>
							<li>
								<a data-toggle="tab" href="#hr3"> <i class="fa fa-lg fa-arrow-circle-o-up"></i> <span class="hidden-mobile hidden-tablet"> Quote </span></a>
							</li>
						</ul>	
					</header>
					<div>
						<div class="widget-body no-padding">
							<div class="tab-content padding-10">
								
								<div class="tab-pane fade in active" id="hr1">
									<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
								        <thead>
											<tr>
												<th class="hasinput">
													<input type="text" class="form-control" placeholder="Filter Name" />
												</th>
												<th class="hasinput">
													<input type="text" class="form-control" placeholder="Filter Status" />
												</th>
												<th class="hasinput icon-addon">
													<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
													<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
												</th>
												<th class="hasinput icon-addon">
													<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
													<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
												</th>
												<th class="hasinput">
													<input type="text" class="form-control" placeholder="Filter Total" />
												</th>
												<th>
													<button type="button" class="btn btn-labeled btn-success">
														<span class="btn-label">
															<i class="glyphicon glyphicon-plus"></i>
														</span><a href="/invoices/create">Add Invoice</a>
													</button>
												</th>
											</tr>
								            <tr>
								            	<th data-class="expand">Customer</th>
							                    <th>Status</th>
							                    <th>Created</th>
							                    <th>Due</th>
							                    <th>Total</th>
							                    <th>Actions</th>
								            </tr>
								        </thead>
			
								        <tbody>
								            @foreach($invoices as $invoice)
												<tr>
													<td>{{ $invoice->customer->company }}</td>
													<td>{{ $invoice->status->status }}</td>
													<td>{{ $invoice->created_at }}
													<td>{{ $invoice->due }}</td>
													<td>${{ $invoice->total }}</td>
													<td><a href="/invoices/{{  $invoice->id  }}">View</a> | <a href="/invoices/{{  $invoice->id  }}/edit">Edit</a></td>
												</tr>
											@endforeach
								        </tbody>
									</table>
								</div>

								<div class="tab-pane fade" id="hr2">
									<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
								        <thead>
											<tr>
												<th class="hasinput">
													<input type="text" class="form-control" placeholder="Filter Name" />
												</th>
												<th class="hasinput">
													<input type="text" class="form-control" placeholder="Filter Status" />
												</th>
												<th class="hasinput icon-addon">
													<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
													<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
												</th>
												<th class="hasinput icon-addon">
													<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
													<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
												</th>
												<th class="hasinput">
													<input type="text" class="form-control" placeholder="Filter Total" />
												</th>
												<th>
													<button type="button" class="btn btn-labeled btn-success">
														<span class="btn-label">
															<i class="glyphicon glyphicon-plus"></i>
														</span><a href="/invoices/create">Add Invoice</a>
													</button>
												</th>
											</tr>
								            <tr>
								            	<th data-class="expand">Customer</th>
							                    <th>Status</th>
							                    <th>Created</th>
							                    <th>Due</th>
							                    <th>Total</th>
							                    <th>Actions</th>
								            </tr>
								        </thead>
			
								        <tbody>
								            @foreach($invoices as $invoice)
												<tr>
													<td>{{ $invoice->customer->company }}</td>
													<td>{{ $invoice->status->status }}</td>
													<td>{{ $invoice->created_at }}
													<td>{{ $invoice->due }}</td>
													<td>${{ $invoice->total }}</td>
													<td><a href="/invoices/{{  $invoice->id  }}">View</a> | <a href="/invoices/{{  $invoice->id  }}/edit">Edit</a></td>
												</tr>
											@endforeach
								        </tbody>
									</table>
								</div>

								<div class="tab-pane fade" id="hr3">
									<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
								        <thead>
											<tr>
												<th class="hasinput">
													<input type="text" class="form-control" placeholder="Filter Name" />
												</th>
												<th class="hasinput">
													<input type="text" class="form-control" placeholder="Filter Status" />
												</th>
												<th class="hasinput icon-addon">
													<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
													<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
												</th>
												<th class="hasinput icon-addon">
													<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
													<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
												</th>
												<th class="hasinput">
													<input type="text" class="form-control" placeholder="Filter Total" />
												</th>
												<th>
													<button type="button" class="btn btn-labeled btn-success">
														<span class="btn-label">
															<i class="glyphicon glyphicon-plus"></i>
														</span><a href="/invoices/create">Add Invoice</a>
													</button>
												</th>
											</tr>
								            <tr>
								            	<th data-class="expand">Customer</th>
							                    <th>Status</th>
							                    <th>Created</th>
							                    <th>Due</th>
							                    <th>Total</th>
							                    <th>Actions</th>
								            </tr>
								        </thead>
			
								        <tbody>
								            @foreach($invoices as $invoice)
												<tr>
													<td>{{ $invoice->customer->company }}</td>
													<td>{{ $invoice->status->status }}</td>
													<td>{{ $invoice->created_at }}
													<td>{{ $invoice->due }}</td>
													<td>${{ $invoice->total }}</td>
													<td><a href="/invoices/{{  $invoice->id  }}">View</a> | <a href="/invoices/{{  $invoice->id  }}/edit">Edit</a></td>
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
	
			{{-- NEW WIDGET START --}}
			{{-- <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
				<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-colorbutton="false" data-widget-colorbutton="false" data-widget-editbutton="false" data-widget-togglebutton="false" data-widget-deletebutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false">
					
					<header>
						<span class="widget-icon"> <i class="fa fa-table"></i> </span>
						<h2>Invoices </h2>
					</header>
	
					<div>
	
						<div class="widget-body no-padding">
	
							<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
		
						        <thead>
									<tr>
										<th class="hasinput">
											<input type="text" class="form-control" placeholder="Filter Name" />
										</th>
										<th class="hasinput">
											<input type="text" class="form-control" placeholder="Filter Status" />
										</th>
										<th class="hasinput icon-addon">
											<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
											<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
										</th>
										<th class="hasinput icon-addon">
											<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
											<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
										</th>
										<th class="hasinput">
											<input type="text" class="form-control" placeholder="Filter Total" />
										</th>
										<th>
											<button type="button" class="btn btn-labeled btn-success">
												<span class="btn-label">
													<i class="glyphicon glyphicon-plus"></i>
												</span><a href="/invoices/create">Add Invoice</a>
											</button>
										</th>
									</tr>
						            <tr>
						            	<th data-class="expand">Customer</th>
					                    <th>Status</th>
					                    <th>Created</th>
					                    <th>Due</th>
					                    <th>Total</th>
					                    <th>Actions</th>
						            </tr>
						        </thead>
	
						        <tbody>
						            @foreach($invoices as $invoice)
										<tr>
											<td>{{ $invoice->customer->company }}</td>
											<td>{{ $invoice->status->status }}</td>
											<td>{{ $invoice->created_at }}
											<td>{{ $invoice->due }}</td>
											<td>${{ $invoice->total }}</td>
											<td><a href="/invoices/{{  $invoice->id  }}">View</a> | <a href="/invoices/{{  $invoice->id  }}/edit">Edit</a></td>
										</tr>
									@endforeach
						        </tbody>
							</table>

						</div>
					</div>
				</div>
			</article> --}}
		</div>
		{{-- end row --}}
	</section>
	{{-- end widget grid --}}

	
@endsection


