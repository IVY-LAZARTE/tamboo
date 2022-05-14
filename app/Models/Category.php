<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','responsable', 'slug', 'numero_contacto', 'numero_cuenta', 'image', 'icon','user_id'];

    //Relacion uno a muchos
    public function subcategories(){
        return $this->hasMany(Subcategory::class);
    }

    //Relacion muchos a muchos
    public function brands(){
        return $this->belongsToMany(Brand::class);
    }


    public function products(){
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //URL AMIGABLES
    public function getRouteKeyName()
    {
        return 'slug';
    }

   
}
