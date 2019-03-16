<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\SlugRoutable;
use App\Models\Traits\Sluggable;
class Post extends Model
{
    use SlugRoutable,Sluggable;
    protected $fillable=['title','body'];

    public static function boot(){
        parent::boot();
        static::creating(function($event){
            $event->slug =str_slug($event->title);
        });
    }

}
