<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestFund extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'amount',
        'image',
        'status'
     ];
}
