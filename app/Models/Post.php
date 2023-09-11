<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        "title",
        "slug",
        "extract",
        "body",
        "published",
        "image_path",
        "category_id",
        "user_id",
        "published_at",
        "image_path"
    ];

    // protected function title(): Attribute {
    //     return new Attribute(
    //         set: fn ($value) => strtolower($value),
    //         get: fn ($value) => ucfirst($value)
    //     );
    // }

    protected function image(): Attribute {
        return new Attribute(
            // get: fn () => $this->image_path ? "http://localhost/storage/" . $this->image_path : "https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg"

            get: function() {
                if($this->image_path){
                    if(substr($this->image_path, 0, 8) === "https://") {
                        return $this->image_path;
                    }
                    return Storage::url($this->image_path);
                }else {
                    return "https://t4.ftcdn.net/jpg/04/73/25/49/360_F_473254957_bxG9yf4ly7OBO5I0O5KABlN930GwaMQz.jpg";
                }
            }
        );
    }

    // Relación uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }


    # relacion de muchos a muchos
    public function tags(){
        return $this->morphToMany(Tag::class, "taggable");
    }

    public function comments(){
        return $this->morphMany(Comment::class, "commentable");
    }

    # relacion uno a uno polimorfica
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }

}