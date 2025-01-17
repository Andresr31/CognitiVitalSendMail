<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'subject',
        'message',
        'customer_id',
    ];

    ////////////////////////////////////
    // Relaciones
    public function customer(){
        return $this->belongsTo('App\Models\Customer');
    }
}
