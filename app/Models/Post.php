<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\User;

class Post extends Model
{
    use HasFactory;

    // protected $filable = ['title', 'excerpt', 'body'];
    protected $guarded = ["id"];
    // with() berfungsi mengenerate hanya 1 kali query
    protected $with = ['category', 'user'];

    //searching form
    public function scopeFilter($query, array $filters){

        $query->when($filters['search'] ?? false, function($query, $search){
            //where adalah perintah query yg meminta data search yg akan mengambil data dari db dan dikembalikan lgi ke controller
           return $query->where('title', 'like', '%' . $search . '%')
                  ->orWhere('body', 'like', '%' . $search . '%');
        });
            
    }

    //relasi table posts dan categori
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
