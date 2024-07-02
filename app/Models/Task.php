<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'pirority_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function pirority()
    {
        return $this->belongsTo(Pirority::class);
    }

}
