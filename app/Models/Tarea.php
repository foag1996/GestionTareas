<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titulo',
        'descripcion',
        'fecha_vencimiento',
        'tarea_completada'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'fecha_vencimiento' => 'date',
        'tarea_completada' => 'boolean',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the text representation of the tarea_completada attribute.
     *
     * @return string
     */
    public function getTareaCompletadaTextAttribute()
    {
        return $this->tarea_completada ? '<span class="badge bg-success">Completada</span>' : '<span class="badge bg-danger">No completada</span>';
    }
}
