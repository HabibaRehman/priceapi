<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    
    function index(Request $request){
    	$resp=array(
			    "IsPriceZone" => false,
			    "VehicleId"=> 0,
			    "TariffType"=> "T4",
			    "farecolor"=> "Red",
			    "lst_MultiVehicles"=> [
			        [
			            "vehicleTypeId"=> 15,
			            "name"=> "Saloon",
			            "description"=> "",
			            "cost"=> 0.03,
			            "numberOfSeats"=> 4,
			            "jobPrice"=> 3.03,
			            "JourneyCost"=> 3.03
			        ],
			        [
			            "vehicleTypeId"=> 101,
			            "name"=> "6 Seater",
			            "description"=> "",
			            "cost"=> 1.5,
			            "numberOfSeats"=> 6,
			            "jobPrice"=> 4.5,
			            "JourneyCost"=> 4.5
			        ],
			        [
			            "vehicleTypeId"=> 26,
			            "name"=> "Mini Bus",
			            "description"=> "",
			            "cost"=> 0.0,
			            "numberOfSeats"=> 8,
			            "jobPrice"=> 3.0,
			            "JourneyCost"=> 3.0
			        ],
			        [
			            "vehicleTypeId"=> 102,
			            "name"=> "9 Seater",
			            "description"=> "",
			            "cost"=> 8.45,
			            "numberOfSeats"=> 9,
			            "jobPrice"=> 11.45,
			            "JourneyCost"=> 11.45
			        ],
			        [
			            "vehicleTypeId"=> 97,
			            "name"=> "14 Seater",
			            "description"=> "",
			            "cost"=> 10.45,
			            "numberOfSeats"=> 14,
			            "jobPrice"=> 13.45,
			            "JourneyCost"=> 13.45
			        ]
			    ],
			    "JourneyCost"=> 3.0,
			    "Price"=> "3",
			    "DPrice"=> 3.0,
			    "Milage"=> "0.23",
			    "DMileage"=> 0.23,
			    "FairType"=> 2
			);
    	return json_encode($resp);	
    }
}
