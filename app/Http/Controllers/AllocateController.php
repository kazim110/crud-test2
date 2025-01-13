<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alocatebudget;

class AllocateController extends Controller
{
    public function AlocateBudget(){

        $requests = Alocatebudget::all();

        foreach($requests as $request){
            if($request->status==='Approved'){
                $request->amount_allocated = rand(1000000, 5000000);
            } else {
                $request->amount_allocated = 0;
            }
            $request->save();
        }
        return response()->json([
            'message' => 'Budget Allocated successfully',
            'data' => $requests
        ]);
    }
}
