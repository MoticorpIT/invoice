<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Location;
use Illuminate\Http\Request;
use App\Http\Requests\LocationFormRequest;

class LocationController extends Controller
{
    public $states = array(
		    'AL'=>'Alabama',
		    'AK'=>'Alaska',
		    'AZ'=>'Arizona',
		    'AR'=>'Arkansas',
		    'CA'=>'California',
		    'CO'=>'Colorado',
		    'CT'=>'Connecticut',
		    'DE'=>'Delaware',
		    'DC'=>'District of Columbia',
		    'FL'=>'Florida',
		    'GA'=>'Georgia',
		    'HI'=>'Hawaii',
		    'ID'=>'Idaho',
		    'IL'=>'Illinois',
		    'IN'=>'Indiana',
		    'IA'=>'Iowa',
		    'KS'=>'Kansas',
		    'KY'=>'Kentucky',
		    'LA'=>'Louisiana',
		    'ME'=>'Maine',
		    'MD'=>'Maryland',
		    'MA'=>'Massachusetts',
		    'MI'=>'Michigan',
		    'MN'=>'Minnesota',
		    'MS'=>'Mississippi',
		    'MO'=>'Missouri',
		    'MT'=>'Montana',
		    'NE'=>'Nebraska',
		    'NV'=>'Nevada',
		    'NH'=>'New Hampshire',
		    'NJ'=>'New Jersey',
		    'NM'=>'New Mexico',
		    'NY'=>'New York',
		    'NC'=>'North Carolina',
		    'ND'=>'North Dakota',
		    'OH'=>'Ohio',
		    'OK'=>'Oklahoma',
		    'OR'=>'Oregon',
		    'PA'=>'Pennsylvania',
		    'RI'=>'Rhode Island',
		    'SC'=>'South Carolina',
		    'SD'=>'South Dakota',
		    'TN'=>'Tennessee',
		    'TX'=>'Texas',
		    'UT'=>'Utah',
		    'VT'=>'Vermont',
		    'VA'=>'Virginia',
		    'WA'=>'Washington',
		    'WV'=>'West Virginia',
		    'WI'=>'Wisconsin',
		    'WY'=>'Wyoming',
		);

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
    	//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Customer $customer)
    {
        return view('locations.create', compact('customer'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationFormRequest $request, Customer $customer)
    {
         Location::create($request->all());
         return redirect('customers/'.$customer->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer, Location $location)
    {
        return view('locations.edit', compact('customer', 'location'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update(LocationFormRequest $request, $id, Location $location)
    {
    	$location->update($request->all());
    	return redirect('customers/'.$id)->with('message', 'Location Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Location $location)
    {
        $location->fill(['active' => 0])->save();

        //store page
        return redirect('customers/'.$id)->with('message', 'Location Removed!');
    }
}
