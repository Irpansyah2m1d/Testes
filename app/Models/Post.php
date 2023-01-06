<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Laravel\Scout\Searchable;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ["id"];
    protected $with = ["author", "category"];

    public function scopeFilter($query, array $filters){
    //   $query->when($filters["keyword"] ?? false, function($query, $keyword) {
    //        return $query->where('title', 'like', '%' . $keyword . '%')->orWhere('body', 'like', '%' . $keyword . '%');
    //     });
      $query->when($filters["keyword"] ?? false, function($query, $keyword) {
           return $query->where(function($query) use($keyword){
            $query->where('title', 'like', '%' . $keyword . '%')->orWhere('body', 'like', '%' . $keyword . '%');
           });
        });

      $query->when($filters["category"] ?? false, function($query, $category){
          return $query->whereHas("category", function($query) use($category){
                $query->where("slug", $category);
            });
        });

        $query->when($filters["author"] ?? false, function($query, $author){
            return $query->whereHas("author", function($query) use($author){
                $query->where("username", $author);
            });
        });




        // if(request('keyword')){
        //    $query->where('title', 'like', '%' . request('keyword') . '%')->orWhere('body', 'like', '%' . request('keyword') . '%');
 
         
        //  }
    }

    // public function scopeFilter($query){
    //     if(request('keyword')){
    //        $query->where('title', 'like', '%' . request('keyword') . '%')->orWhere('body', 'like', '%' . request('keyword') . '%');
 
         
    //      }
    // }

   
    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function author(){
        return $this->belongsTo(User::class, "user_id");
    }
}
