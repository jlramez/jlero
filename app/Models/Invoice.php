<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'date',
        'duedate',
        'company_id',
        'status'


    ];

    public function companies()
    {
  
      return $this->HasOne(Companie::class,'id','company_id');//rel with companies
  
    }
}
