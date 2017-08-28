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
											<a href="/invoices/{{ $invoice->id }}" class="btn btn-sm btn-primary"> <i class="fa fa-dollar"></i> Pay </a>
										</div>

										<div class="btn-group">
											<a href="/invoices/{{ $invoice->id }}" class="btn btn-sm btn-primary"> <i class="fa fa-send"></i> Send </a>
										</div>
	
										<div class="btn-group">
											<a href="/invoices/{{ $invoice->id }}/edit" class="btn btn-sm btn-primary"> <i class="fa fa-edit"></i> Edit </a>
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
	
									<address>
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
								<div class="pull-right">
									<h1 class="font-400">invoice</h1>
								</div>
								<div class="clearfix"></div>
								<br>
								<br>
								<div class="row">
									<div class="col-sm-9">
										<h4 class="semi-bold"><a href="/customers/{{ $invoice->customer->id }}">{{ $invoice->customer->company }}</a></h4>
										<address>
											<strong>{{ $invoice->customer->contact_first }} {{ $invoice->customer->contact_last }}</strong>
											<br>
											@foreach($invoice->customer->locations as $location)
											{{ $location->street }}
											{{-- 342 Mirlington Road, --}}
											<br>
											{{ $location->city }}, {{ $location->state }} {{ $location->zip }}
											{{-- Calfornia, CA 431464 --}}
											<br>
											@endforeach
											<abbr title="Phone">P:</abbr> {{ $invoice->customer->phone1 }}
										</address>
									</div>
									<div class="col-sm-3">
										<div>
											<div class="font-md">
												<strong>INVOICE NO :</strong>
												<span class="pull-right"> {{ $invoice->invoice_num }} </span>
											</div>
										</div>
										<div>
											<div class="font-md">
												<strong>Created:</strong>
												<span class="pull-right"> {{ $invoice->created_at->diffForHumans() }} </span>
											</div>
										</div>
										<div>
											<div class="font-md">
												<strong>Due:</strong>
												<span class="pull-right"> {{$invoice->due}} </span>
											</div>
										</div>
										<br>
										<div class="well well-sm  bg-color-darken txt-color-white no-border">
											<div class="fa-lg">
												Total Due :
												<span class="pull-right"> ${{$invoice->total}} </span>
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
											<th>DESCRIPTION</th>
											<th>PRICE</th>
											<th>AMOUNT</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="text-center"><strong>1</strong></td>
											<td><a href="javascript:void(0);">Print and Web Logo Design</a></td>
											<td>Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium totam rem aperiam xplicabo.</td>
											<td>$1,300.00</td>
	
											<td>$1,300.00</td>
										</tr>
										<tr>
											<td class="text-center"><strong>1</strong></td>
											<td><a href="javascript:void(0);">SEO Management</a></td>
											<td>Sit voluptatem accusantium doloremque laudantium inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</td>
											<td>$1,400.00</td>
											<td>$1,400.00</td>
										</tr>
										<tr>
											<td class="text-center"><strong>1</strong></td>
											<td><a href="javascript:void(0);">Backend Support and Upgrade</a></td>
											<td>Inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</td>
											<td>$1,700.00</td>
											<td>$1,700.00</td>
										</tr>
										<tr>
											<td colspan="4" class="text-right">Subtotal:</td>
											<td class="text-right"><strong>${{$invoice->sub_total}}</strong></td>
										</tr>
										<tr>
											<td colspan="4" class="text-right">Shipping:</td>
											<td class="text-right"><strong>${{$invoice->shipping}}</strong></td>
										</tr>
									</tbody>
								</table>
	
								<div class="invoice-footer">
									<div class="row">

										<div class="col-sm-7">
											<div class="payment-methods">
												<h5>Notes:</h5>
												<p>
													{{ $invoice->notes }}
												</p>
												<ul>
													<li>Need to add a way to pull in only the address for this invoice, not all for that customer</li>
													<li>Need to add Notes to invoice table</li>
													<li>Need to create table for line items and pull in data</li>
													<li>Finalize subtotal, shipping, due section (make it math)</li>
												</ul>
											</div>
										</div>

										<div class="col-sm-5">
											<div class="invoice-sum-total pull-right pad-r-24">
												<h3><strong>Total: <span class="text-success">${{$invoice->total}}</span></strong>
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
						{{-- end widget content --}}
					</div>
					{{-- end widget div --}}
				</div>
				{{-- end widget --}}
			</article>
			{{-- WIDGET END --}}
		</div>
		{{-- end row --}}
	</section>
	{{-- end widget grid --}}

	{{-- <h2>Invoices</h2>

		<ul>
			<li>Customer: <a href="/customers/{{ $invoice->customer->id }}">{{ $invoice->customer->company }}</a></li>
			<li>Due: {{ $invoice->due }}</li>
			<li 
				@if($invoice->status->status == 'Past Due')
					style="color:red"
				@endif
			>Status: {{ $invoice->status->status }}</li>
			<li>Shipping: ${{ $invoice->shipping }}</li>
			<li>Add_1_Text: {{ $invoice->add_1_text }}</li>
			<li>Add_1: ${{ $invoice->add_1 }}</li>
			<li>Add_2_Text: {{ $invoice->add_2_text }}</li>
			<li>Add_2: ${{ $invoice->add_2 }}</li>
			<li>Subtotal: ${{ $invoice->sub_total }}</li>
			<li>Total: ${{ $invoice->total }}</li>
		</ul> --}}
	
@endsection


{{-- @section('pageLinks')
<ul>
	<li><a href="/invoices/{{  $invoice->id  }}/edit">Edit</a></li>
	<li><a href="/invoices">Back to invoices</a></li>
</ul>
@endsection --}}