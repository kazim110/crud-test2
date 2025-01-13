<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaxPayment;

class TaskPaymentController extends Controller
{
    public function processPayment(){
        $minTax = 50000;

        $requests = TaxPayment::where('status','Pending')->get();

        foreach($requests as $request){
            if($request->tax_amount >= $minTax){
                $request->status = 'Verfied';
            } else {
                $request->status = 'Under Review';
            }
            $request->save();
        }

        return response()->json([
            'message' => 'Payment Processed successfully',
            'data' => $requests
        ]);
    }
}
