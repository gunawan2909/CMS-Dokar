<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Content;

class Catagory extends Model
{
    use HasFactory;
    protected $table = 'catagories';
    protected $primaryKey = 'id';
    protected $guarded = ['id'];

    public function Content()
    {
        return $this->hasMany(Content::class);
    }
}
