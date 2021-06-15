<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias';
    protected $primaryKey = 'id';
    
    protected $fillable = ['name','description','color'];

    protected $dates = ['created_at','updated_at'];
}
