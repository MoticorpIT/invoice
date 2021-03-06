<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\CustomerFormRequest;

class CustomerController extends Controller
{
	
    /* AUTHENTICATION */
	public function __construct(){

		$this->middleware('auth');

	}


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::where('active', 1)
        							->orderBy('company', 'asc')
        							->get();
        return view('customers.index', compact('customers'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerFormRequest $request)
    {

    	//ADD
    	
    	//ADD LOCATION ONLY - GET ID FROM REQUEST
    	if(isset($request->locationOnly) && $request->locationOnly){

    		$customerId = $request->customerId;

    	//ADD CUSTOMER + LOCATION - GET ID FROM CUSTOMER INSERT
    	} else {

    		$customer = new Customer(
		    	['company' => $request->company,
		    	'contact_first' => $request->contact_first,
		    	'contact_last' => $request->contact_last,
		    	'email' => $request->email,
		    	'phone1' => $request->phone1,
		    	'phone2' => $request->phone2,
		    	'fax' => $request->fax,
		    	'updated_at' => $request->updated_at,
		    	'created_at' => $request->created_at]
		    );

    		$customer->save();
    		//CUSTOMER ID
    		$customerId = $customer->id;

    	}

    	//NEW LOCATION
		$location = new Location(
	    	['name' => $request->name,
	    	'contact_name' => $request->contact_name,
	    	'street' => $request->street,
	    	'street2' => $request->street2,
	    	'city' => $request->city,
	    	'state' => $request->state,
	    	'zip' => $request->zip,
	    	'phone' => $request->phone,
	    	'updated_at' => $request->updated_at,
	    	'created_at' => $request->created_at]
	    );

		//SAVE LOCATION BASED ON MODEL RELATIONSHIP
		$customer->locations()->save($location);

        //CUSTOMER SHOW PAGE
        return redirect('customers/'.$customerId);
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	$customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerFormRequest $request, $id)
    {
    	$customer = Customer::find($id);
	    $customer->fill($request->toArray())->save();

        //store page
        return redirect('customers')->with('message', 'Customer Modified!');
    }

    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
