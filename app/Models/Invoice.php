<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable=[

    ];
         /**
       * Get the customers that owns the Invoice
       *
        * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
        */
        public function customers()
    {
        return $this->belongsTo(Customer::class);
 }
}
