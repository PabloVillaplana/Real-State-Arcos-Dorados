<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Provincia extends Model
{
    use CrudTrait;
    //
    protected $table = 'provincias';
    protected $fillable = [
        'id','provincia'
    ];

    public function propiedades(){
        return $this->hasMany(Propiedad::class);
    }
}
