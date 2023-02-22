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
    public function scopeFilter($query){
        //search ngambil dari name si form yg ada di posts.blade
        if(request('search')){

                //where adalah fungsi query search
                $query->where('title', 'like', '%' . request('search') . '%')
                    ->orWhere('body', 'like', '%' . request('search' . '%'));
        }
    }

    //relasi table posts dan categori
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
