<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Conner\Tagging\Taggable;

class Ilustracion extends Model
{
    protected $table = 'ilustraciones';
    protected $primaryKey = 'id_ilustracion';
}
