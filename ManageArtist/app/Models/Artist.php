<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use HasFactory;
    protected $table = 'artists';
    protected $primaryKey = 'id';
    protected $fillable = ['first-name', 'last-name','birthday', 'hometown','outstanding','description'];

    public function getCategory()
    {
        return $this->belongsToMany(Category::class);
    }
}
