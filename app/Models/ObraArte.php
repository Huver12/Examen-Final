<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ObraArte
 *
 * @property $id
 * @property $exposiciones
 * @property $titulo
 * @property $autor
 * @property $created_at
 * @property $updated_at
 * @property $delete_at
 * @property $estilo_artes_id
 *
 * @property EstiloArte $estiloArte
 * @property Exposicione[] $exposiciones
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ObraArte extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['exposiciones', 'titulo', 'autor', 'delete_at', 'estilo_artes_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estiloArte()
    {
        return $this->belongsTo(\App\Models\EstiloArte::class, 'estilo_artes_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function exposiciones()
    {
        return $this->hasMany(\App\Models\Exposicione::class, 'id', 'obra_artes_id');
    }
    
}
