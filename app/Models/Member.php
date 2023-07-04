<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone_Number', 'address', 'email'];

    public function transaction()

    {
        return $this->hasOne(Transaction::class);
    }
}