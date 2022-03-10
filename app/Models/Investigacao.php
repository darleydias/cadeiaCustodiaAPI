<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investigacao extends Model
{
    protected $fillable=['investNome','investTitular','investDescription','investDtInicio','investAnexo','category_id','statuses_id','investAnexo'];
    public function getResults($investNome){
        return $this->where('investNome','LIKE',"%{$investNome}%")
               ->get();
    }
}
