<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Category extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function posts() {

        return $this->hasMany(Post::class);

    }

    public function getCreatedAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('1, d F Y');
    }

    public function getRouteKeyName(){
        return 'slug';
    }

}
