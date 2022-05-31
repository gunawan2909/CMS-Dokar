<?php

namespace App\Models;

use App\Models\Catagory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Content extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function catagory()
    {
        return $this->belongsTo(Catagory::class, 'Catagory_id');
    }
}
