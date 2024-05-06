<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhoneController extends Controller
{

    public function create(Request $request)
     {
        $response = array();


        foreach($request["data"] as $req)
        {

            //get validation library and set values
            $phoneNumberUtil = \libphonenumber\PhoneNumberUtil::getInstance();
            $phoneNumberObject = $phoneNumberUtil->parse($req["phone_no"], null);

            $code   = $phoneNumberObject->getCountryCode(); 
            $type   = $phoneNumberUtil->getNumberType($phoneNumberObject);
            $valid  = $phoneNumberUtil->isValidNumber($phoneNumberObject);
            $length = $phoneNumberUtil->isPossibleNumber($phoneNumberObject);

            $phone = Phone::create([
                'phone_no' => $req["phone_no"],
                'code' => $code,
                'phone_type' => $type,
                'lentgh_match' => $length,
                'valid' => $valid,
            ]);

            array_push($response, $phone);

        }  

       return response()->json($response, 201);
    }

    
}