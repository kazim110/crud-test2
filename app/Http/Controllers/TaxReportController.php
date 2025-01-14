<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaxPayment;

class TaxReportController extends Controller
{
    public function generateMonthlyReport(){
        $report = TaxPayment::where('status','Verfied')
        ->selectRaw('DATE_FORMAT(payment_date, "%Y-%m") as month, SUM(tax_amount) as total_income')
        ->groupBy('month')
        ->orderBy('month', 'asc')
        ->get();

        return response()->json([
            'message' => 'Monthly Report Generated successfully',
            'data' => $report
        ]);
    }
}
