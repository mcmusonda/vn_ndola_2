<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        "meeting_id",
        "member_id",
        "requested_date",
        "requested_amount",
        "date_paid",
        "amount_paid",
    ];
}
