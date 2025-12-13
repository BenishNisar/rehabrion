<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table="category";
    protected $fillable = ['name'];

     public function downloads()
    {
        return $this->belongsToMany(Download::class, 'category_download', 'category_id', 'download_id');
    }

}
