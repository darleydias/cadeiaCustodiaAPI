<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['nomeCategory'];
    public function getResults($nomeCategory){
        return $this->where('nomeCategory','LIKE',"%{$nomeCategory}%")
               ->get();
    }
}