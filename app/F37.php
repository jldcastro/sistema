<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class F37 extends Model
{
    protected $table = 'f37s';

    protected $primaryKey = 'numero';

    protected $fillable = ['numero','fecha_solicitud','comuna_servicio','lugar_servicio','tipo_cliente','observaciones'];

    public function bascula() {
        return $this->hasMany('App\Bascula');
    }
}


