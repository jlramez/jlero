<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_product_line extends Model
{
    use HasFactory;
    protected $fillable = [
        'invoice_id',
        'product_id',
        'quantity',
        


    ];

    public function invoices()
    {
  
      return $this->HasOne(Invoice::class,'id','invoice_id');//rel with companies
  
    }
    public function products()
    {
  
      return $this->HasOne(Product::class,'id','product_id');//rel with companies
  
    }
}


