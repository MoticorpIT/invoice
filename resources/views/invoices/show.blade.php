@extends('layout.master')

@section('body')
	<style type="text/css">
		.pad-r-24 {
			padding-right: 12px;
		}
	</style>

	{{-- widget grid --}}
	<section id="widget-grid" class="">
	
		{{-- row --}}
		<div class="row">
	
			{{-- NEW WIDGET START --}}
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	
				{{-- Widget ID (each widget will need unique ID)--}}
				<div class="jarviswidget well jarviswidget-color-darken" id="wid-id-0" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-colorbutton="false">
	
					{{-- widget div--}}
					<div>
	
						{{-- widget content --}}
						<div class="widget-body">
	
							<div class="widget-body-toolbar">
	
								<div class="row">

									<div class="col-sm-2 pull-left">

										<div class="btn-group">
											<span class="btn btn-sm btn-primary">{{ $invoice->status->status }}</span>
										</div>
	
									</div>
	
									<div class="col-sm-10 text-align-right">

										<div class="btn-group">
											<a href="/invoices" class="btn btn-sm btn-primary"> <i class="fa fa-arrow-left"></i> Back </a>
										</div>

										<div class="btn-group">
											<a href="/invoices/{{ $invoice->inv_number }}" class="btn btn-sm btn-primary"> <i class="fa fa-dollar"></i> Pay </a>
										</div>

										<div class="btn-group">
											<a href="/invoices/{{ $invoice->inv_number }}" class="btn btn-sm btn-primary"> <i class="fa fa-send"></i> Send </a>
										</div>
	
										<div class="btn-group">
											<a href="/invoices/{{ $invoice->inv_number }}/edit" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> Edit </a>
										</div>
	
										<div class="btn-group">
											<a href="/invoices/create" class="btn btn-sm btn-success"> <i class="fa fa-plus"></i> Create New </a>
										</div>
	
									</div>
	
								</div>
	
							</div>
	
							<div class="padding-10">
								<br>
								<div class="pull-left">
									<img src="/img/logo-blacknwhite.png" width="150" height="32" alt="invoice logo">
	
									<address style="font-size:1.3em;margin-bottom:0;">
										<br>
										<strong>Fire Wholesale</strong>
										<br>
										706 Seaboard Street,
										<br>
										Myrtle Beach, SC 29577
										<br>
										<abbr title="Phone">P:</abbr> (843) 481-3473
									</address>
								</div>
								<div class="pull-right" style="margin-top:-30px;">
									<h1 class="font-400">invoice</h1>
									<div>
										<div class="font-md">
											<strong>Ship:</strong>
											<span class="pull-right"> Overnight </span>
										</div>
									</div>
								</div>
								<div class="clearfix"></div>
								<br>
								<br>
								<div class="row">
									<div class="col-sm-9">
										<h4 class="semi-bold" style="font-size:2em;">
											<a href="/customers/{{ $invoice->customer->id }}">{{ $invoice->customer->company }}</a>
										</h4>
										<address style="font-size:1.3em;">
											<strong>{{ $invoice->customer->contact_first }} {{ $invoice->customer->contact_last }}</strong>
											<br>
											@foreach($invoice->customer->locations as $location)
												{{ $location->street }}
												<br>
												{{ $location->city }}, {{ $location->state }} {{ $location->zip }}
												<br>
											@endforeach
											<abbr title="Phone">P:</abbr> {{ $invoice->customer->phone1 }}
										</address>

									</div>
									<div class="col-sm-3">

										<div>
											<div class="font-md">
												<strong>Invoice No:</strong>
												<span class="pull-right"> {{ $invoice->inv_number }} </span>
											</div>
										</div>

										<div>
											<div class="font-md">
												<strong>Created:</strong>
												<span class="pull-right"> {{ $invoice->created_at->format('d-m-y') }} </span>
											</div>
										</div>

										<div>
											<div class="font-md">
												<strong>Due:</strong>
												<span class="pull-right"> {{$invoice->due}} </span>
											</div>
										</div>
										<div>
											<div class="font-md">
												<strong>Terms:</strong>
												<span class="pull-right"> {{$invoice->term->name}} </span>
											</div>
										</div>
										<br>

										<div class="well well-sm  bg-color-darken txt-color-white no-border">
											<div class="fa-lg">
												Total Due :
												<span class="pull-right"> ${{ number_format($invoice->total, 2, ".", ",") }} </span>
											</div>
										</div>

										<br>
										<br>
									</div>
								</div>
								<table class="table table-hover">
									<thead>

										<tr>
											<th class="text-center">QTY</th>
											<th>ITEM</th>
											<th data-hide="phone,tablet">DESCRIPTION</th>
											<th class="text-right">PRICE</th>
											<th class="text-right">AMOUNT</th>
										</tr>

									</thead>
									<tbody>
										@foreach($invoice->line_items as $line)
											<tr>
												<td class="text-center">
													<strong>{{ $line->qty }}</strong>
												</td>
												<td>
													{{ $line->name }}
												</td>
												<td data-hide="phone,tablet">
													{{ $line->description }}
												</td>
												<td class="text-right">${{ $line->price }}</td>
												<td class="text-right">
													${{ number_format($line->price * $line->qty, 2, ".", ",") }}
												</td>
											</tr>
										@endforeach

										<tr>
											<td colspan="4" class="text-right"><strong>Subtotal:</strong></td>
											<td class="text-right"><strong>${{ number_format($invoice->subtotal, 2, ".", ",") }}</strong></td>
										</tr>

										<tr>
											<td colspan="4" class="text-right"><strong>Shipping:</strong></td>
											<td class="text-right"><strong>${{ number_format($invoice->shipping, 2, ".", ",") }}</strong></td>
										</tr>

										<tr>
											<td colspan="4" class="text-right"><strong>Tax:</strong></td>
											<td class="text-right"><strong>${{ number_format($invoice->shipping, 2, ".", ",") }}</strong></td>
										</tr>

									</tbody>
								</table>
								<div class="invoice-footer">
									<div class="row">

										<div class="col-sm-7">
											<div class="payment-methods">
												<h5>Notes:</h5>
												<ul class="list-unstyled">
													@foreach($invoice->notes as $note)
														<li>{{ $note->note }}</li>
													@endforeach
												</ul>
											</div>
										</div>

										<div class="col-sm-5">
											<div class="invoice-sum-total pull-right pad-r-24">
												<h3><strong>Total: <span class="text-success">${{ number_format($invoice->total, 2, ".", ",") }}</span></strong>
												</h3>
											</div>
										</div>

									</div>
									<div class="row">

										<div class="col-sm-12">
											<p class="note">**To avoid any excess penalty charges, please make payments within 30 days of the due date. There will be a 2% interest charge per month on all late invoices.</p>
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

