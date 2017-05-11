<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masa extends Model
{
    protected $table = 'masas';

    protected $fillable = ['cantidad'];

    public function tipo_equipo()
    {
        return $this->hasOne('App\TipoEquipo','tipoEquipo3_id');
    }

    public function f37()
    {
        return $this->belongsTo('App\F37','f37_id');
    }

    public function marca()
    {
        return $this->belongsTo('App\Marca','marca_id');
    }

    public function material()
    {
        return $this->belongsTo('App\Material','material_id');
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
