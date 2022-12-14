<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Category;
use Illuminate\Support\Carbon;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    // protected $fillable = ['title','excerpt','body'];

    protected $guarded = ['id'];
    protected $with = ['category','author'];

    public function scopeFilter($query, array $filters) {


        $query->when(($filters['search']) ??  false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                        ->orWhere('body', 'like', '%' . $search . '%');

        });

        $query->when(($filters['category']) ??  false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });

        });

        $query->when(($filters['author']) ??  false, fn($query, $author) =>
        
            $query->whereHas('author', fn($query) => 
              $query->where('username', $author)
            )
        );

    }

    public function category() {

        return $this->belongsTo(Category::class, 'category_id');

    }
    
    public function author() {

        return $this->belongsTo(User::class, 'user_id');

    }

    public function getRouteKeyName(){
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getCreatedAttribute(){
        return Carbon::parse($this->attributes['created_at'])
            ->translatedFormat('1, d F Y');
    }

}
