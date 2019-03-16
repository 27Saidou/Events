<?php

namespace App\Models\Traits;

trait Sluggable {
    protected static function bootSluggable(){
        static::creating(function($event){
            $event->slug =str_slug($event->title);
        });
    }
}
