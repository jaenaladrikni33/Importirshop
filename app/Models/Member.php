<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone_Number', 'address'];

    public function transaction()

    {
        return $this->hasOne(Transaction::class);
    }
}
