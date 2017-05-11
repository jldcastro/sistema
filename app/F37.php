<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F37 extends Model
{
    protected $table = 'f37s';

    protected $primaryKey = 'numero';

    protected $fillable = ['numero','fecha_solicitud','comuna_servicio','lugar_servicio','observaciones'];

    public function bascula() {
        return $this->hasMany('App\Bascula');
    }

}

