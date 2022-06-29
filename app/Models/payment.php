<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $guarded = [];

    public function class()
    {
        return $this->belongsTo(SchoolClass::class);
    }
    public function student()
    {
        return $this->belongsTo(User::class);
    }
    public function my_class()
    {
        return $this->belongsTo(Payment::class);
    }
}