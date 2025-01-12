<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentRequest;

class PaymentRequestController extends Controller
{
    public function processRequests(){
        $threshold = 1000000;

        $requests = PaymentRequest::where('status', 'pending')->get();

        foreach($requests as $request){
            if($request->amount > $threshold){
                $request->status = 'declined';
            } else {
                $request->status = 'approved';
            }

            $request->save();
        }

        return response()->json([
            'message' => 'Requests processed successfully',
            'data' => $requests
        ]);
    }
}
