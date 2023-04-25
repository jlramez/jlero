<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Companie;
use App\Models\Invoice_product_line;
use Illuminate\Http\Request;
use App\Modules\Approval\Api\Dto;
use App\Domain\Enums\StatusEnum;
use Ramsey\Uuid\UuidInterface;


class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $invoices=Invoice::all();
        $data= response()->json($invoices);        
        return response()->json($data);

    }


    public function show(invoice $invoice)
    {          
        $company=Companie::find($invoice->company_id);
        $products=Invoice_product_line::where('invoice_id',$invoice->id)->get();
        dd($invoice,$company,$products);
           
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function EntityApproved(invoice $invoice)
    {
        if ($invoice->status!=StatusEnum::APPROVED || $invoice->status!=StatusEnum::REJECTED)
            {
                $status=StatusEnum::APPROVED;
                $invoice->status=$status;
                $invoice->save();
            }
        else
            {
              dd('The invoice have been accepted or rejected ');   
            }
    }
    public function EntityRejected(invoice $invoice)
    {
        if ($invoice->status!=StatusEnum::APPROVED || $invoice->status!=StatusEnum::REJECTED)
            {

                $status=StatusEnum::REJECTED;
                $invoice->status=$status;
                $invoice->save();
            }
        else
            {
              dd('The invoice have been accepted or rejected ');   
            }
    }


}
