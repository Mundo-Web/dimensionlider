<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo', //1
        'producto', //2
        'precio', //5
        'descuento', //6
        'stock', //7
        'imagen', //10
        'destacar',
        'recomendar',
        'atributes',
        'visible',
        'status',
        'extract', //3
        'description', //4
        'costo_x_art', //8
        'peso', //9
        'categoria_id',
        'cuartos',
        'banios',
        'area',
        'cochera',
        'mascota',
        'mobiliado',
        'incluye',
        'no_incluye',
        'propietario',
        'tipo_propietario',
        'imagen_propietario',
        'pisos',
        'movilidad',
        'tipo_propiedad',
        'address',
        'inside',
        'district',
        'city',
        'country',
        'departamento_id',
        'provincia_id',
        'distrito_id',
        'frecuencia'
    ];

    public function categoria()
    {
        return $this->belongsTo(Category::class);
    }

    public function galeria()
    {
        //Uno a muchos
        return $this->hasMany(Galerie::class, 'product_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'tags_xproducts', 'producto_id', 'tag_id');
    }

    public function scopeActiveDestacado($query)
    {
        return $query->where('status', true)->where('destacar', true);
    }

    /* -----specificationes */

    public function specificaciones()
    {
        return $this->hasMany(Specifications::class, 'product_id');
    }

    /* public function departamentos()
    {
        return $this->belongsTo(Department::class);
    } */
}