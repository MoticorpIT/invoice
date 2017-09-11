@extends('layout.master')

@section('body')

	{{-- widget grid --}}
	<section id="widget-grid" class="">
		<div class="row">
			<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

				<div class="jarviswidget well jarviswidget-color-darken" id="wid-id-0" data-widget-sortable="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-colorbutton="false">
					
					<div>

						<div class="widget-body ">

							{{-- INVOICE TOP BUTTONS --}}
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
	
							{{-- INVOICE CONTAINER --}}
							<div class="padding-10">

								{{-- LOGO --}}
								<div class="row" style=" margin:20px 0;">
									<div class="col-sm-12">
										<img src="/img/logo-blacknwhite.png" width="150" height="32" alt="invoice icon">
									</div>
								</div>

								{{-- FIRE WHOLESALE CONTACT + 'INVOICE' --}}
								<div class="row" style=" margin:20px 0;">
									{{-- FIRE CONTACT INFO --}}
									<div class="col-md-9 col-sm-12" style="margin-bottom:20px">
										<address style="font-size:1.3em;margin-bottom:0;">
											<strong>Fire Wholesale</strong>
											<br>
											706 Seaboard Street,
											<br>
											Myrtle Beach, SC 29577
											<br>
											<abbr title="Phone">P:</abbr> (843) 481-3473
										</address>
									</div>
									{{-- INVOICE + NUMBER --}}
									<div class="col-md-3 col-sm-12">
										<h1 class="font-400" style="margin:-10px 0px">invoice</h1>
										<div>
											<div class="font-md">
												<span style="font-size:1.5em">No. {{ $invoice->inv_number }}</span>
											</div>
										</div>
									</div>
								</div>

								{{-- CUSTOMER CONTACT + INVOICE DETAILS --}}
								<div class="row" style=" margin:20px 0;">
									{{-- CUSTOMER CONTACT INFO --}}
									<div class="col-md-8 col-sm-12">
										{{-- <h4 class="semi-bold" style="font-size:2em;">
											<a href="/customers/{{ $invoice->customer->id }}">{{ $invoice->customer->company }}</a>
										</h4> --}}
										<address style="font-size:1.3em;margin-bottom:0;">
											<a href="/customers/{{ $invoice->customer->id }}"><strong>{{ $invoice->customer->company }}</strong></a>
											<br>
											{{ $invoice->customer->contact_first }} {{ $invoice->customer->contact_last }}
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

									{{-- INVOICE DETAILS --}}
									<div class="col-md-4 col-sm-12">
										<div>
											<div class="font-md">
												<strong>Shipping:</strong>
												<span class="pull-right"> {{ $invoice->ship_method->name }} </span>
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
										<div class="well well-sm bg-color-darken txt-color-white no-border">
											<div class="fa-lg">
												Due:
												<span class="pull-right"> ${{ number_format($invoice->total, 2, ".", ",") }} </span>
											</div>
										</div>
									</div>
								</div>

								{{-- LINE ITEMS TABLE --}}
								<div class="row" style=" margin:20px 0;">
									<div class="col-md-12">
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
											</tbody>
										</table>
									</div>
								</div>

								{{-- NOTES + TALLYS --}}
								<div class="row" style=" margin:-20px 0;">
									<div class="col-md-3 col-sm-12 pull-right">
										<table class="table table-hover">
											<tbody>
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
												@foreach($invoice->payments as $payment)
													<tr>
														<td colspan="4" class="text-right"><strong>Payment:</strong></td>
														<td class="text-right">
															<strong style="color:red;">
																(${{ number_format($payment->amount, 2, ".", ",") }})
															</strong>
														</td>
													</tr>
												@endforeach
												<tr>
													<td colspan="4" class="text-right"><strong>Total:</strong></td>
													<td class="text-right"><strong>${{ number_format($invoice->shipping, 2, ".", ",") }}</strong></td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="col-md-9 col-sm-12 pull-left">
										<div class="payment-methods">
											<h5>Notes:</h5>
											<ul class="list-unstyled">
												@foreach($invoice->notes as $note)
													<li>{{ $note->note }}</li>
												@endforeach
											</ul>
										</div>
									</div>
								</div>

								{{-- TRACKING INFO --}}
								<div class="row" style=" margin:20px 0;">
									<div class="col-md-12">
										<strong>Tracking:</strong>
										<br>
										@foreach($invoice->tracking_nums as $tracking)
											<span> {{$tracking->track_num}} </span>
										@endforeach
									</div>
								</div>

								{{-- FINE PRINT --}}
								<div class="row" style=" margin:20px 0;">
									<div class="col-md-12">
										<p class="note">**To avoid any excess penalty charges, please make payments within 30 days of the due date. There will be a 2% interest charge per month on all late invoices.</p>
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
