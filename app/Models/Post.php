<?php

namespace App\Models;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'user_id',
        'category_id',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    /**
     * Переключатель статуса (опубликован/не опубликован)
     * @param $id
     * @return $this
     */
    public function toggleStatus(){
        if ($this->is_publish){
            $this->is_publish = 0;
        }else{
            $this->is_publish = 1;
        }
        $this->save();
        return $this;
    }

    /**
     * Загрузка изображения
     * @param $image
     * @return mixed
     */
    public function uploadImage($image){
        if ($image->has('image')){
            $this->deleteImage();
            $path = $image->store('images/' . date('Y-m-d'), 'public');
            $this->image = $path;
            $this->save();
        }
    }

    public function deleteImage(){
        if ($this->image){
            Storage::disk('public')->delete($this->image);
            $this->image = null;
        }
        $this->save();
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
