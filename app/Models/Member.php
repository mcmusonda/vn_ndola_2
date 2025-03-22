<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        "first_name",
        "last_name",
        "nrc",
        "email",
        "primary_phone",
        "other_phone",
        "physical_address",
        "town",
    ];
}
