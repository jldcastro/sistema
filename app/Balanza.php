<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balanza extends Model
{
    protected $table = 'balanzas';

    protected $fillable = ['cantidad'];

    public function tipo_equipo()
    {
        return $this->hasOne('App\TipoEquipo','tipoEquipo2_id');
    }

    public function f37()
    {
        return $this->belongsTo('App\F37','f37_id');
    }

    public function marca()
    {
        return $this->belongsTo('App\Marca','marca_id');
    }

    public function tipo()
    {
        return $this->belongsTo('App\Tipo','tipo_id');
    }

    public function unidadc()
    {
        return $this->belongsTo('App\Unidad','unidadc_id');
    }

    public function unidadg()
    {
        return $this->belongsTo('App\Unidad','unidadg_id');
    }

    public function condicion()
    {
        return $this->belongsTo('App\Condicion','condicion_id');
    }
}
