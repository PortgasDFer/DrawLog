<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;

class Ilustracion extends Model
{
    use Taggable;
    protected $table = 'ilustraciones';
    protected $primaryKey = 'id_ilustracion';

    public function scopeSearch($query, $palabra) {
        return $query
            ->where('name_draw', 'like', "%" . $palabra . "%")
            ->orWhere('descripcion', 'like', "%" . $palabra . "%");
    }
}
