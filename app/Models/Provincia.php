<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Models\Propiedad;

class Provincia extends Model
{
    //
    protected $fillable = [
        'id','provincia'
    ];

    public function propiedades(){
        return $this->hasMany(Propiedad::class);
    }
}
