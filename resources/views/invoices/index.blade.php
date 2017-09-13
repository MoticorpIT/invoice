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

								{{-- TAB 1 --}}
								<div class="tab-pane fade in active" id="hr1">
									<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
								        <thead>
											{{-- <tr>
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
											</tr> --}}
								            <tr>
							                    <th>Status</th>
							                    <th>Number</th>
								            	<th>Customer</th>
							                    <th>Terms</th>
							                    <th>Due</th>        
							                    <th>Created</th>
							                    <th>Rep</th>
							                    <th>Total</th>
							                    <th>Actions</th>
								            </tr>
								        </thead>
			
								        <tbody>
								            @foreach($invoices as $invoice)
												<tr>
													<td
														@php
															switch ($invoice->status->id) {
															case 6:
														    	echo 'class="bg-danger">';
														    	break;
															case 5:
															case 4:
														    	echo 'class="bg-warning">';
														    	break;
														    case 3:
														    	echo 'class="bg-default">';
														    	break;
														    default:
														    	echo 'class="bg-success">';
															}
														@endphp
														{{-- @if($invoice->status->id == 6)
															class="bg-danger">
														@elseif($invoice->status->id == 5 || $invoice->status->id == 4)
															class="bg-warning">
														@elseif($invoice->status->id == 3)
															class="bg-default">
														@else
															class="bg-success">
														@endif --}}
														{{ $invoice->status->status }}
													</td>
													<td>
														<a href="/invoices/{{ $invoice->inv_number }}">
															{{ $invoice->inv_number }}
														</a>
													</td>
													<td>
														<a href="/customers/{{ $invoice->customer->id }}">
															{{ $invoice->customer->company }}
														</a>
													</td>
													<td>{{ $invoice->term->name }}</td>
													<td>{{ $invoice->due }}</td>
													<td>{{ format_date($invoice->created_at) }}</td>
													<td>{{ $invoice->user->name }}</td>
													<td>{{ format_price($invoice->total) }}</td>
													<td><a href="/invoices/{{  $invoice->inv_number  }}">View</a> | <a href="/invoices/{{  $invoice->inv_number  }}/edit"><i class="fa fa-pencil"></i></a></td>
												</tr>
											@endforeach
								        </tbody>
									</table>
								</div>

								{{-- TAB 2 --}}
								<div class="tab-pane fade" id="hr2">
									Tab to be filled with filtered table of invoices
								</div>

								{{-- TAB 3 --}}
								<div class="tab-pane fade" id="hr3">
									Tab to be filled with filtered table of invoices
								</div>

							</div>
						</div>
					</div>
				</div>
			</article>
		</div>

		<div class="row center-block">
			<div class="btn btn-labeled btn-success" style="margin-top:10px;">
				<span class="btn-label"><i class="glyphicon glyphicon-plus"></i></span>
				<a href="/invoices/create">Add New Invoice</a>
			</div>
		</div>
	</section>
	{{-- end widget grid --}}

	
@endsection


