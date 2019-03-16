<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\SlugRoutable;
use App\Models\Traits\Sluggable;

class Event extends Model
{
    use SlugRoutable,Sluggable;
    protected $fillable=['title','description'];

    protected static function boot(){
        parent::boot();
        static::creating(function($event){
            $event->slug =str_slug($event->title);
        });
        static::deleting(function($event){
            dd("pendant la suppression d'un evenement");
        });
    }

}
